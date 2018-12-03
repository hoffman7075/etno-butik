<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Подписка на новости");
?>
<div class="personal">
<div class="left_block">
	<?$APPLICATION->IncludeComponent("bitrix:menu", "left_menu", array(
		"ROOT_MENU_TYPE" => "left",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "N",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
		),
		false
	);?>	
</div>
<div class="right_block catalog">
	<?$APPLICATION->IncludeComponent(
	"bitrix:subscribe.edit", 
	"main", 
	array(
		"AJAX_MODE" => "N",
		"SHOW_HIDDEN" => "N",
		"ALLOW_ANONYMOUS" => "Y",
		"SHOW_AUTH_LINKS" => "Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"SET_TITLE" => "N",
		"AJAX_OPTION_SHADOW" => "Y",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"COMPONENT_TEMPLATE" => "main",
		"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?>
	<?if($GLOBALS['USER']->isAuthorized()):?>
		<?$APPLICATION->IncludeComponent("bitrix:catalog.product.subscribe.list", "main", array(
	"PRICE_CODE" => array(
			0 => "BASE",
		),
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"CONVERT_CURRENCY" => "Y",
		"CURRENCY_ID" => "RUB",
		"SHOW_OLD_PRICE" => "Y",
		"OFFER_HIDE_NAME_PROPS" => "N",
		"SHOW_MEASURE" => "Y",
		"DISPLAY_COMPARE" => "Y"
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "N"
	)
);?>
	<?endif;?>
</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>