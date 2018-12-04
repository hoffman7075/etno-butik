<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<?
if ($_REQUEST["basket_action"] == "add") {
  if (CModule::IncludeModule("catalog")) {
    $res = Add2BasketByProductID( $_REQUEST["id"], 1, array(), $arProductParams = false);
  }
}
elseif ($_REQUEST["basket_action"] == "remove") {
  if (CModule::IncludeModule("sale")) {
    CSaleBasket::Delete($_REQUEST["id"]);
  }
}
?>
