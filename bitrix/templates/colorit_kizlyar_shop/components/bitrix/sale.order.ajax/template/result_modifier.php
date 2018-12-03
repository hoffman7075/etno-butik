<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @var array $arParams
 * @var array $arResult
 * @var SaleOrderAjax $component
 */

$component = $this->__component;
$component::scaleImages($arResult['JS_DATA'], $arParams['SERVICES_IMAGES_SCALING']);

//if($USER->IsAdmin()) {echo '<pre>'; print_r($arResult["BASKET_ITEMS"]); echo '</pre>';} 
$arProductId = array();
foreach($arResult["BASKET_ITEMS"] as $arItems)
{
	$arProductId[] = $arItems["PRODUCT_ID"];
}
$prim = 0;
$arSelect = Array("ID", "NAME", "PROPERTY_NOTE");
$arFilter = Array("IBLOCK_ID"=>13, "ID"=>$arProductId);
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>count($arProductId)), $arSelect);
while($ob = $res->GetNextElement())
{
 $arFields = $ob->GetFields();
 if($arFields["PROPERTY_NOTE_VALUE"] != "") $prim  = 1;
}

$arResult["PRIM"] = $prim;
