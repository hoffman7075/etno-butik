<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');
$ID = $_REQUEST["ID"];
$QUANTITY = $_REQUEST["QUANTITY"];

if( in_array($_REQUEST["ACTION"], array("Add2Basket", "Add2Delay")) === false )
{
	return;
}

CModule::IncludeModule("catalog");
CModule::IncludeModule("sale");

$arProductInfo = CCatalogProduct::GetByID($ID);
$arProductInfo["PRICE"] = CPrice::GetBasePrice($ID);

//print_r($arProductInfo);

if($_REQUEST["ACTION"] == "Add2Basket" )
{
	$res = Add2BasketByProductID($ID, $QUANTITY);
}
elseif( $_REQUEST["ACTION"] == "Add2Delay" )
{
	$res = Add2BasketByProductID($ID, $QUANTITY);
	$res = CSaleBasket::Update($res, array(
			"PRICE" => $arProductInfo["PRICE"]["PRICE"],
			"DELAY" => "Y",
			"NAME" => $arProductInfo["NAME"],
			"CURRENCY" => $arProductInfo["PRICE"]["CURRENCY"],
			"LID" => SITE_ID,
			"CAN_BUY" => "Y",
			"MODULE" => "main"
		));
}
?>