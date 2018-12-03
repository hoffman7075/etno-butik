<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED != true) return;

if( empty($arResult["ITEMS"]) ) return;

CModule::IncludeModule("iblock");

foreach($arResult["ITEMS"] as &$arItem)
{
	$arPropsRes = CIBlockElement::GetProperty($arItem["IBLOCK_ID"], $arItem["ID"]);

	while($row = $arPropsRes->Fetch())
	{
		$arItem[ "PROP_".$row["CODE"] ] = (is_array($row["VALUE"]) ? $row["VALUE"]["TEXT"] : $row["VALUE"]);
	}
}
unset($arItem);
?>