<?php
if(!defined("B_PROLOG_INCLUDED")) return;

$arTemplateParameters = array(
	"BIG_TEXT" => array(
		"TYPE" => "TEXT",
		"NAME" => "Главный текст",
		"DEFAULT" => "Оставьте отзыв!",
		"PARENT" => "ADDITIONAL_SETTINGS"
	),
	"SMALL_TEXT" => array(
		"TYPE" => "TEXT",
		"NAME" => "Дополнительный текст",
		"DEFAULT" => "и получайте информацию об акциях первыми!",
		"PARENT" => "ADDITIONAL_SETTINGS",
	)
);
?>