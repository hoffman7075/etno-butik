<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED != true) return;

CModule::includeModule("iblock");
$arTemplateParameters = array(
	"HEAD_TEXT" => array(
		"NAME" => "Заголовок",
		"TYPE" => "TEXT",
		"PARENT" => "ADDITIONAL_SETTINGS"
	),

	"HEAD_TEXT_URL" => array(
		"NAME" => "URL в загаловке",
		"TYPE" => "TEXT",
		"PARENT" => "ADDITIONAL_SETTINGS"
	),

	"HEAD_COUNTER" => array(
		"NAME" => "Отображать количество", 
		"TYPE" => "CHECKBOX",
		"PARENT" => "ADDITIONAL_SETTINGS"
	),
	
	"HEAD_TEXT_ITEMS" => array(
		"NAME" => "Текст над каждым товаром",
		"TYPE" => "TEXT",
		"PARENT" => "ADDITIONAL_SETTINGS"
	)
);

?>