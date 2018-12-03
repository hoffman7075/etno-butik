<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @var array $arParams
 * @var array $arResult
 * @var SaleOrderAjax $component
 */
$arFilter = Array(
   "USER_ID" => $USER->GetID(),
);
$lastOrderID = -1;
$db_sales = CSaleOrder::GetList(array("DATE_INSERT" => "DESC"), $arFilter,false, array("nTopCount"=>1) );
while ($ar_sales = $db_sales->Fetch())
{
	$lastOrderID = $ar_sales["ID"];
}


if($lastOrderID != -1)
{
	$db_order = CSaleOrderPropsValue::GetList(
	        array("ID" => "DESC"),array('ORDER_PROPS_ID'=>20,'ORDER_ID'=>$lastOrderID)
	    );

	// while ($ar_order = $db_order->Fetch())
	// {
	// 	if($ar_order["VALUE"] != "")
	// 	$arResult["USER_VALS"]["ORDER_PROP"][20] = CFile::GetFileArray($ar_order["VALUE"]);
	// 	$arResult["ORDER_PROP"]["PRINT"][20]["VALUE"] =CFile::GetFileArray($ar_order["VALUE"]);
	// 	$arResult["JS_DATA"]["ORDER_PROP"]["properties"][0]["DEFAULT_VALUE"] =CFile::GetFileArray($ar_order["VALUE"]);
	// 	$arResult["JS_DATA"]["ORDER_PROP"]["properties"][0]["VALUE"] =CFile::GetFileArray($ar_order["VALUE"]);

	// }
}




$component = $this->__component;
$component::scaleImages($arResult['JS_DATA'], $arParams['SERVICES_IMAGES_SCALING']);

$arProductId = array();
foreach($arResult["BASKET_ITEMS"] as $arItems)
{
	$arProductId[] = $arItems["PRODUCT_ID"];
	
}
$prim = 0; 
$arSelect = Array("ID", "NAME", "PROPERTY_COLD");
$arFilter = Array("IBLOCK_ID"=>array(13,14), "ID"=>$arProductId);
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nTopCount"=>count($arProductId)), $arSelect);
while($ob = $res->GetNextElement())
{
 $arFields = $ob->GetFields();
 if($arFields["PROPERTY_COLD_VALUE"] == "Y") $prim  = 1;
 // 	echo "<pre>";
	// print_r($arFields);		
	// echo "</pre>";
}

$arResult["PRIM"] = $prim;




// echo "<pre>";
// 		print_r($arResult["JS_DATA"]);
// 		echo "</pre>";
