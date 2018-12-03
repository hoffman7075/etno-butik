<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/bitrix/services/ymarket/([\\w\\d\\-]+)?(/)?(([\\w\\d\\-]+)(/)?)?#",
		"RULE" => "REQUEST_OBJECT=\$1&METHOD=\$4",
		"ID" => "",
		"PATH" => "/bitrix/services/ymarket/index.php",
	),
	array(
		"CONDITION" => "#^/personal/history-of-orders/#",
		"RULE" => "",
		"ID" => "bitrix:sale.personal.order",
		"PATH" => "/personal/history-of-orders/index.php",
	),
	array(
		"CONDITION" => "#^/bitrix/services/ymarket/#",
		"RULE" => "",
		"ID" => "",
		"PATH" => "/bitrix/services/ymarket/index.php",
	),
	array(
		"CONDITION" => "#^/popular/(.+?)/\\??(.*)#",
		"RULE" => "SMART_FILTER_PATH=\$1&\$2",
		"ID" => "bitrix:catalog.smart.filter",
		"PATH" => "/popular/index.php",
	),
	array(
		"CONDITION" => "#^/contacts/stores/#",
		"RULE" => "",
		"ID" => "bitrix:catalog.store",
		"PATH" => "/contacts/stores/index.php",
	),
	array(
		"CONDITION" => "#^/personal/order/#",
		"RULE" => "",
		"ID" => "bitrix:sale.personal.order",
		"PATH" => "/personal/order/index.php",
	),
	array(
		"CONDITION" => "#^/info/articles/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/info/articles/index.php",
	),
	array(
		"CONDITION" => "#^/info/brands/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/info/brands/index.php",
	),
	array(
		"CONDITION" => "#^/info/brand/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/info/brand/index.php",
	),
	array(
		"CONDITION" => "#^/personal/#",
		"RULE" => "",
		"ID" => "bitrix:sale.personal.section",
		"PATH" => "/personal/index.php",
	),
	array(
		"CONDITION" => "#^/services/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/services/index.php",
	),
	array(
		"CONDITION" => "#^/stati/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/stati/index.php",
	),
);

?>