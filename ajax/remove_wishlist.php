<?
//Подключаем ядро Битрикс и главный модуль
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
use Bitrix\Main\Loader;

//Подключаем модуль sale
Loader::includeModule("sale");
if (CSaleBasket::Delete($_POST['p_id']))
  echo "Запись успешно удалена";

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>
