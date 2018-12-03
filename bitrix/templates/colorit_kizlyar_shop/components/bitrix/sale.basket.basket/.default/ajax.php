<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');

$action = $_REQUEST["action"];

switch($action)
{
	case "ETCH_ADD":
		CModule::IncludeModule("catalog");
		CModule::IncludeModule("sale");

		$name = CCatalogProduct::GetList(array(), array("ID" => $_REQUEST["ID"]))->Fetch();
		$name = $name["ELEMENT_NAME"];

		Add2BasketByProductID(910, $_REQUEST["COUNT"], array(), array(
				array(
					"NAME" => "Текст гравировки",
					"CODE" => "CI_ETCH_TEXT",
					"VALUE" => $_REQUEST['TEXT']
					//"VALUE" => iconv("utf-8", "windows-1251", $_REQUEST["TEXT"])
					//'VALUE' => urldecode(urldecode($_REQUEST['TEXT']))
				),
				array(
						"NAME" => "К товару",
						"CODE" => "CI_ETCH_TO",
						"VALUE" => $name
					)
			));

		break;
}
?>