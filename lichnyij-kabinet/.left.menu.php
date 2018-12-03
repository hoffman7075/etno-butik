<?
$aMenuLinks = Array(
	Array(
		"Мой кабинет", 
		"/personal/index.php", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"Личные данные", 
		"/personal/profiles/", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"Сменить пароль", 
		"/personal/change-password/", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"История заказов", 
		"/personal/orders/?filter_history=Y", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"Подписки", 
		"/personal/subscribe/", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"Выйти", 
		"?logout=yes&login=yes", 
		Array(), 
		Array("class"=>"exit"), 
		"\$GLOBALS[\"USER\"]->isAuthorized()" 
	)
);
?>