<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
	$APPLICATION->SetTitle("История заказов");
	$_REQUEST["filter_history"] = "Y";
	if(!$USER->isAuthorized()){LocalRedirect(SITE_DIR.'auth');} else {
?><div class="personal">
<div class="left_block">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"left_menu",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "Y"
	)
);?>
</div>
<div class="right_block">
	
		 <?$APPLICATION->IncludeComponent(
	"bitrix:sale.personal.order",
	"orders",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "orders",
		"CUSTOM_SELECT_PROPS" => array(),
		"HISTORIC_STATUSES" => array(0=>"N",1=>"P",2=>"F",),
		"NAV_TEMPLATE" => "",
		"ORDERS_PER_PAGE" => "20",
		"PATH_TO_BASKET" => "/basket/",
		"PATH_TO_PAYMENT" => "/order/payment/",
		"PROP_1" => array(),
		"PROP_2" => array(),
		"PROP_3" => "",
		"PROP_4" => "",
		"SAVE_IN_SESSION" => "Y",
		"SEF_FOLDER" => "/personal/history-of-orders/",
		"SEF_MODE" => "Y",
		"SEF_URL_TEMPLATES" => array("list"=>"","detail"=>"order_detail.php?ID=#ID#","cancel"=>"order_cancel.php?ID=#ID#",),
		"SET_TITLE" => "N",
		"VARIABLE_ALIASES" => array("detail"=>array("ID"=>"ID",),"cancel"=>array("ID"=>"ID",),)
	)
);?>
</div>
</div>
<?}?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>