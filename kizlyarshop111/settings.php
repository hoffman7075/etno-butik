<?
define("NOT_CHECK_FILE_PERMISSIONS", true);

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
header("Content-Type: application/x-javascript");
CModule::IncludeModule("mobileapp");
$platform = strtolower(CMobile::getInstance()->getPlatform());
echo \Bitrix\MobileApp\Designer\Manager::getConfigJSON("kizlyar", $platform);
die();