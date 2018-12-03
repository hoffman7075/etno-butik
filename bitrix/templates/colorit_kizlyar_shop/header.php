<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
<?/*?>
<base href="https://www.etno-butik.com/" />	

<base href="http://dev2489.golden-sites.ru/" />
<?*/?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?$APPLICATION->ShowTitle(false);?></title>

<meta name="viewport" content="width=device-width, initial-scale=0.5, user-scalable=no" />
<link rel="shortcut icon" href="/assets/templates/images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" media="screen" href="/min/?g=css" />
<link href='https://fonts.googleapis.com/css?family=PT+Serif:400,400italic,700,700italic|Open+Sans:400,300italic,300,400italic,700,600,700italic&subset=latin,cyrillic' rel='stylesheet' type='text/css' />
<!-- Стили меню -->
<link rel="stylesheet" href="menu-styles.css">
<link href="/assets/templates/css/bootstrap-glyphicons.css" rel="stylesheet">
         <meta name="mailru-domain" content="smwsVjbPVUebNpMM" />
	<link rel="stylesheet" href="https://www.etno-butik.com/assets/components/minishop2/css/web/custom.css?v=5784beb5e7" type="text/css" />
<script type="text/javascript">miniShop2Config = {"cssUrl":"\/assets\/components\/minishop2\/css\/web\/","jsUrl":"\/assets\/components\/minishop2\/js\/web\/","actionUrl":"\/assets\/components\/minishop2\/action.php","ctx":"web","close_all_message":"\u0437\u0430\u043a\u0440\u044b\u0442\u044c \u0432\u0441\u0435","price_format":[2,"."," "],"price_format_no_zeros":true,"weight_format":[3,"."," "],"weight_format_no_zeros":true};</script>
<link rel="stylesheet" href="https://www.etno-butik.com/assets/components/msearch2/css/web/default.css" type="text/css" />

	<script type="text/javascript">
		if (typeof mse2Config == "undefined") {mse2Config = {"cssUrl":"\/assets\/components\/msearch2\/css\/web\/","jsUrl":"\/assets\/components\/msearch2\/js\/web\/","actionUrl":"\/assets\/components\/msearch2\/action.php"};}
		if (typeof mse2FormConfig == "undefined") {mse2FormConfig = {};}
		mse2FormConfig["3f36c0262b0c68b4253cb58a1a4f45d775fdba50"] = {"autocomplete":"results","queryVar":"query","minQuery":3,"pageId":647};
	</script>
<script type="text/javascript">msfavoritesConfig={"actionUrl":"\/assets\/components\/msfavorites\/action.php","assetsBaseUrl":"\/assets\/"}</script>
<link rel="stylesheet" href="https://www.etno-butik.com/assets/components/msfavorites/css/web/default.css" type="text/css" />
<link rel="stylesheet" href="https://www.etno-butik.com/assets/components/yandexmaps/css/web/default.css" type="text/css" />
	<?$APPLICATION->ShowHead();?>

<style>
#wrapper.inner {
    padding-top: 20px !important;
}
#wrapper-header {
    width: 100%;
    position: relative !important;
    background: #000;
    height: 180px;
    font-family: 'Open Sans',sans-serif;
		
}
</style>
</head>
	<body>

    <div id="panel">
        <?$APPLICATION->ShowPanel();?>
    </div>

		<div id="wrapper-header">
	<div id="wrapper-header-top">
		<div id="header-top">
			<div class="left">
				 <!--
				 <a href="https://www.etno-butik.com/en/" class="en lang">en</a>


				 -->
				<span class="phone">8 800 250 01 71</span>
			</div>


		<?$APPLICATION->IncludeComponent("bitrix:menu", "top_content_row", Array(
			"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
				"MENU_CACHE_TYPE" => "A",	// Тип кеширования
				"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
				"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
				"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
				"MAX_LEVEL" => "4",	// Уровень вложенности меню
				"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
				"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
				"DELAY" => "N",	// Откладывать выполнение шаблона меню
				"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
				"COMPONENT_TEMPLATE" => ".default",
				"MENU_THEME" => "site"
			),
			false
		);?>






		</div>
	</div>
	<div id="wrapper-header-middle">
		<div id="header-middle">
			
			<a href="/" class="logo">Этно-бутик "ГОРЕЦ"</a>
			<!-- <a href="http://www.kizlyar-shop.ru" target="_blank" rel="nofollow" class="friends">Наши друзья</a>  -->

				<a href="/" class="orel">
					<img src="https://www.etno-butik.com/assets/templates/images/logo-orel.png"><br>
				Украшения & Сувениры
<span>из Дагестана</span></a>

			<a href="/catalog/" class="link catalog">Каталог изделий<span></span></a>
			<!-- <a href="narodnyie-promyislyi/" class="link hobby">Народные промыслы<span></span></a> -->
			<div class="search">
				<form data-key="3f36c0262b0c68b4253cb58a1a4f45d775fdba50" action="/search/" method="get" class="msearch2 search-block" id="mse2_form">
	<input type="text" name="query" value="" class="input search-input" placeholder="Поиск по сайту..." />
	<button type="submit" name="submit" class="submit" value="mse2_tab_search_btn" /></button>
	<span class="search-dot"></span>
	<div class="clear"></div>
</form>
			</div>

<?$APPLICATION->IncludeComponent(
	"bitrix:sale.basket.basket.line",
	"",
	Array(
		"HIDE_ON_BASKET_PAGES" => "Y",
		"PATH_TO_AUTHORIZE" => "",
		"PATH_TO_BASKET" => SITE_DIR."personal/cart/",
		"PATH_TO_ORDER" => SITE_DIR."personal/order/make/",
		"PATH_TO_PERSONAL" => SITE_DIR."personal/",
		"PATH_TO_PROFILE" => SITE_DIR."personal/",
		"PATH_TO_REGISTER" => SITE_DIR."login/",
		"POSITION_FIXED" => "N",
		"SHOW_AUTHOR" => "N",
		"SHOW_EMPTY_VALUES" => "Y",
		"SHOW_NUM_PRODUCTS" => "Y",
		"SHOW_PERSONAL_LINK" => "N",
		"SHOW_PRODUCTS" => "N",
		"SHOW_TOTAL_PRICE" => "Y"
	)
);?>




		</div>
	</div>
	<div id="wrapper-header-bottom">
		<div id="header-bottom">
			<ul class="new-nav"><li  class="first" id="menuid-8">
<a href="/catalog/?SECTION_ID=64">Украшения</a><ul class="">
<li  class="first">
	<a href="/catalog/?SECTION_ID=65">
		<div class="link-title">Кольца и перстни</div>
		<div class="menu-pic">
			<div>
				<img src="https://www.etno-butik.com/assets/images/products/360/3-kop56iya.jpg" height="100%">
			</div>
		</div>
	</a>
</li>

<li >
	<a href="/catalog/?SECTION_ID=70">
		<div class="link-title">Серьги и комплекты</div>
		<div class="menu-pic">
			<div>
				<img src="https://www.etno-butik.com/assets/images/products/698/yuveli5434rka-28.1-kopiya.jpg" height="100%">
			</div>
		</div>
	</a>
</li>

<li >
	<a href="/catalog/?SECTION_ID=75/">
		<div class="link-title">Кулоны и колье</div>
		<div class="menu-pic">
			<div>
				<img src="https://www.etno-butik.com/assets/images/products/373/4.jpg" height="100%">
			</div>
		</div>
	</a>
</li>

<li  class="last">
	<a href="/catalog/?SECTION_ID=76">
		<div class="link-title">Браслеты</div>
		<div class="menu-pic">
			<div>
				<img src="https://www.etno-butik.com/assets/images/products/670/yuveli5rka-106-kopiya.jpg" height="100%">
			</div>
		</div>
	</a>
</li>
</ul></li><li  id="menuid-10">
<a href="/catalog/?SECTION_ID=77">Керамика</a></li>
<li  id="menuid-11"><a href="/catalog/?SECTION_ID=78">
Изделия из дерева</a></li><li  id="menuid-12">
<a href="/catalog/?SECTION_ID=79">Антиквариат</a></li>
<li  id="menuid-72"><a href="/catalog/?SECTION_ID=80">Оружие</a>
<ul class="">
<li  class="first">
	<a href="/catalog/?SECTION_ID=81">
		<div class="link-title">Ножи</div>
		<div class="menu-pic">
			<div>
				<img src="https://www.etno-butik.com/assets/images/products/562/img-8252.jpg" height="100%">
			</div>
		</div>
	</a>
</li>

<li >
	<a href="/catalog/?SECTION_ID=85">
		<div class="link-title">Кинжалы</div>
		<div class="menu-pic">
			<div>
				<img src="https://www.etno-butik.com/assets/images/products/450/avtorskij-kinzhal-zhemchuzhina.jpg" height="100%">
			</div>
		</div>
	</a>
</li>

<li  class="last">
	<a href="/catalog/?SECTION_ID=88">
		<div class="link-title">Шашки и Сабли</div>
		<div class="menu-pic">
			<div>
				<img src="https://www.etno-butik.com/assets/images/products/449/shashka-iz-zolota-saladin.jpg" height="100%">
			</div>
		</div>
	</a>
</li>
</ul></li><li  id="menuid-9">

<a href="/catalog/?SECTION_ID=89">Посуда</a><ul class="">
<li  class="first">

<a href="/catalog/?SECTION_ID=90">
		<div class="link-title">Рюмки, бокалы, стаканы</div>
		<div class="menu-pic">
			<div>
				<img src="https://www.etno-butik.com/116.jpg" height="100%">
			</div>
		</div>
	</a>
</li>

<li >
	<a href="/catalog/?SECTION_ID=94">
		<div class="link-title">Кувшины и наборы</div>
		<div class="menu-pic">
			<div>
				<img src="https://www.etno-butik.com/assets/images/products/95/250x250/87.jpg" height="100%">
			</div>
		</div>
	</a>
</li>

<li >
	<a href="/catalog/?SECTION_ID=95">
		<div class="link-title">Конфетницы и кофейники</div>
		<div class="menu-pic">
			<div>
				<img src="https://www.etno-butik.com/assets/images/products/355/250x250/16-kopiya.jpg" height="100%">
			</div>
		</div>
	</a>
</li>

<li  class="last">
	<a href="/catalog/?SECTION_ID=96">
		<div class="link-title">Ложки и вилки</div>
		<div class="menu-pic">
			<div>
				<img src="https://www.etno-butik.com/assets/images/products/103/150.jpg" height="100%">
			</div>
		</div>
	</a>
</li>
</ul></li><li  id="menuid-425">
<a href="/catalog/?SECTION_ID=97">Национальная одежда</a><ul class="">
<li  class="first">
	<a href="/catalog/?SECTION_ID=98">
		<div class="link-title">Одежда</div>
		<div class="menu-pic">
			<div>
				<img src="https://www.etno-butik.com/assets/images/products/585/115-kopiya.jpg" height="100%">
			</div>
		</div>
	</a>
</li>

<li >
	<a href="/catalog/?SECTION_ID=99">
		<div class="link-title">Папахи и шапки</div>
		<div class="menu-pic">
			<div>
				<img src="https://www.etno-butik.com/assets/images/products/489/107-kopiya.jpg" height="100%">
			</div>
		</div>
	</a>
</li>

<li >
	<a href="/catalog/?SECTION_ID=100">
		<div class="link-title">Бурки</div>
		<div class="menu-pic">
			<div>
				<img src="https://www.etno-butik.com/assets/images/products/584/124-kopiya-kopiya.jpg" height="100%">
			</div>
		</div>
	</a>
</li>

<li >
	<a href="/catalog/?SECTION_ID=101">
		<div class="link-title">Газыри</div>
		<div class="menu-pic">
			<div>
				<img src="https://www.etno-butik.com/assets/images/products/463/197-kopiya.jpg" height="100%">
			</div>
		</div>
	</a>
</li>

<li  class="last">
	<a href="/catalog/?SECTION_ID=102">
		<div class="link-title">Пояса и нагрудники</div>
		<div class="menu-pic">
			<div>
				<img src="https://www.etno-butik.com/assets/images/products/874/yuvelirka-205-kopiya.jpg" height="100%">
			</div>
		</div>
	</a>
</li>
</ul></li><li  class="last" id="menuid-154">
<a href="/catalog/?SECTION_ID=103">Сувениры</a><ul class="">
<li  class="first">
	<a href="/catalog/?SECTION_ID=104">
		<div class="link-title">Шкуры и ковры</div>
		<div class="menu-pic">
			<div>
				<img src="https://www.etno-butik.com/assets/images/products/499/206-kopiya.jpg" height="100%">
			</div>
		</div>
	</a>
</li>

<li >
	<a href="/catalog/?SECTION_ID=105">
		<div class="link-title">Картины</div>
		<div class="menu-pic">
			<div>
				<img src="https://www.etno-butik.com/assets/images/products/507/219-kopiya.jpg" height="100%">
			</div>
		</div>
	</a>
</li>

<li >
	<a href="/catalog/?SECTION_ID=106">
		<div class="link-title">Рога</div>
		<div class="menu-pic">
			<div>
				<img src="https://www.etno-butik.com/assets/images/products/127/142.jpg" height="100%">
			</div>
		</div>
	</a>
</li>

<li >
	<a href="/catalog/?SECTION_ID=107">
		<div class="link-title">Куклы</div>
		<div class="menu-pic">
			<div>
				<img src="https://www.etno-butik.com/assets/images/products/277/111-kopiya.jpg" height="100%">
			</div>
		</div>
	</a>
</li>

<li >
	<a href="/catalog/?SECTION_ID=108">
		<div class="link-title">Магниты и Статуэтки</div>
		<div class="menu-pic">
			<div>
				<img src="https://www.etno-butik.com/assets/images/products/856/oslik.jpg" height="100%">
			</div>
		</div>
	</a>
</li>

<li >
	<a href="/catalog/?SECTION_ID=109">
		<div class="link-title">Подарки</div>
		<div class="menu-pic">
			<div>
				<img src="https://www.etno-butik.com/assets/images/products/123/127.jpg" height="100%">
			</div>
		</div>
	</a>
</li>

<li  class="last">
	<a href="/catalog/?SECTION_ID=110">
		<div class="link-title">Книги</div>
		<div class="menu-pic">
			<div>
				<img src="https://www.etno-butik.com/assets/images/products/98/63.jpg" height="100%">
			</div>
		</div>
	</a>
</li>
</ul></li></ul>
		</div>
	</div>
</div>

<?
global $APPLICATION;
$dir = $APPLICATION->GetCurDir();
if($dir!="/")
{
?>
<div id="wrapper" class="inner">
<div id="wrapper-content">



				<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "mshop", array(
					"START_FROM" => "0",
					"PATH" => "",
					"SITE_ID" => "-",
					"SHOW_SUBSECTIONS" => "N"
					),
					false
				);?>


<?
}
?>
