<?php
include('simple_html_dom.php');
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");

$url = 'https://www.etno-butik.com/katalog-izdelij/antikvariat/';
$curSect = 79;

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
$str = curl_exec($curl);
curl_close($curl);

$html = str_get_html($str);
$a_links = $html->find('#mse2_results .name a');
$articuls = $html->find('#mse2_results .name span');
$price = $html->find('#mse2_results form p.price span')[0]->innertext;
$price = str_replace(" руб.", "", $price);
$price = str_replace(" ", "", $price);
$preview_pics = $html->find("#mse2_results .img img");

foreach ($a_links as $i => $link) {
  $arLoadProductArray = array();
  $name = $link->innertext;

  $arSelect = Array("ID", "NAME", "DATE_ACTIVE_FROM");
  $arFilter = Array("IBLOCK_ID"=>IntVal(17), "SECTION_ID"=>$curSect, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "NAME"=> $name);
  $res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>150), $arSelect);
  if ($res->SelectedRowsCount() == 0) {
    $articul = str_replace("Арт.: ", "", $articuls[$i]->innertext);
    $preview_pic = "https://www.etno-butik.com" . $preview_pics[$i]->src;

    $code = explode("/", $link->href);
    $last_key = count($code) - 2;
    $code = $code[$last_key];

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "https://www.etno-butik.com/" . $link->href);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
    $str = curl_exec($curl);
    curl_close($curl);
    $html = str_get_html($str);

    $detail_text = $html->find(".right form div.description")[0]->innertext;
    $detail_pic = "https://www.etno-butik.com" . $html->find(".left img")[0]->src;
    $ar_more_photos = $html->find(".connected-carousels img");

    $more_photos = array();
    foreach ($ar_more_photos as $key => $photo) {
      $more_photos[] = CFile::MakeFileArray("https://www.etno-butik.com" . $photo->src);
    }

    $PROP = array();
    $PROP["MORE_PHOTO"] = $more_photos;
    $PROP["ARTNUMBER"] = $articul;

    $arLoadProductArray = array(
      "IBLOCK_SECTION_ID" => $curSect,
      "IBLOCK_ID"      => 17,
      "PROPERTY_VALUES"=> $PROP,
      "NAME"           => $name,
      "CODE"           => $code,
      "ACTIVE"         => "Y",
      "DETAIL_TEXT"    => $detail_text,
      "PREVIEW_PICTURE" => CFile::MakeFileArray($preview_pic),
      "DETAIL_PICTURE" => CFile::MakeFileArray($detail_pic)
    );

    // echo "<pre>";
    // print_r ($arLoadProductArray);
    // echo "</pre>";

    $el = new CIBlockElement;

    // создаем элемент
    if($last_el_id = $el->Add($arLoadProductArray))
    {
       echo 'New ID: ' . $last_el_id . '<br>';

       $arFields = array(
          "ID" => $last_el_id,
          "VAT_INCLUDED" => "Y"
       );

       if(CCatalogProduct::Add($arFields))
       {
          echo "Добавили параметры товара к элементу каталога " . $last_el_id . '<br>';

          $arFields = Array(
             "PRODUCT_ID" => $last_el_id,
             "CATALOG_GROUP_ID" => 1,
             "PRICE" => $price,
             "CURRENCY" => "RUB",
          );
          CPrice::Add($arFields);
       }
       else
          echo 'Ошибка добавления параметров товара<br>';
    }
    else {
      echo 'Error: ' . $el->LAST_ERROR  . '<br>';

      // ищем существующий товар и обновляем привязку разделов
      $arSelect = Array("ID");
      $arFilter = Array("IBLOCK_ID"=>IntVal(17), "CODE"=> $arLoadProductArray["CODE"]);
      $res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>150), $arSelect);

      while($ob = $res->GetNextElement())
      {
        $arItem = $ob->GetFields();
      }
      $db_old_groups = CIBlockElement::GetElementGroups($arItem["ID"], true);
      $ar_new_groups = Array($curSect);
      while($ar_group = $db_old_groups->Fetch())
          $ar_new_groups[] = $ar_group["ID"];
      CIBlockElement::SetElementSection($arItem["ID"], $ar_new_groups);
      echo 'Обновили разделы элемента ID: ' . $arItem["ID"] . '<br><hr>';
    }
  }
  else {
    echo "Элемент уже существует<br>";
  }
}
?>
