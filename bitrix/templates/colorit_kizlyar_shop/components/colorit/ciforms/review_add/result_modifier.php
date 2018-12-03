<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED != true) return;

$arFieldsNew = array();
$arFieldsOld = $arResult["FIELDS"];

foreach($arFieldsOld as $arFieldOld)
{
	$arFieldsNew[ $arFieldOld["CODE"] ] = $arFieldOld;
}

$arResult["FIELDS"] = $arFieldsNew;
?>