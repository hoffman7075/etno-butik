<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Купить ножи в фирменном интернет-магазине \"Кизляр\". Каталог, цена, фото, отзывы на официальном сайте. Доставка по России. Холодное оружие на любой вкус, клинки, шашки, аксессуары, ножи для обихода");
$APPLICATION->SetPageProperty("title", "Купить ножи в фирменном интернет-магазине \"Кизляр\", Россия. Каталог");
$APPLICATION->SetTitle("Купить ножи «Кизляр» в фирменном интернет-магазине");
?>


<?/*?>
<div id="wrapper">

			<div id="wrapper-new-slider">
	<div id="new-slider">
		<div class="box" style="background: url('https://www.etno-butik.com/assets/resize/b/7/b73a0858_5063ba7c.jpg') no-repeat center center;"><a href="klientskaya-sluzhba/dostavka/"></a></div><div class="box" style="background: url('https://www.etno-butik.com/assets/resize/b/c/bc74c531_5063ba7c.jpg') no-repeat center center;"><a href="katalog-izdelij/ukrashenija/sergi-i-komplektyi/avtorskie/"></a></div><div class="box" style="background: url('https://www.etno-butik.com/assets/resize/8/1/81e68b87_5063ba7c.jpg') no-repeat center center;"><a href="katalog-izdelij/suveniryi/"></a></div><div class="box" style="background: url('https://www.etno-butik.com/assets/resize/c/c/ccbc5165_5063ba7c.jpg') no-repeat center center;"><a href="katalog-izdelij/suveniryi/kartinyi/"></a></div><div class="box" style="background: url('https://www.etno-butik.com/assets/resize/d/b/dbc269d8_5063ba7c.jpg') no-repeat center center;"><a href="katalog-izdelij/oruzhie/"></a></div><div class="box" style="background: url('https://www.etno-butik.com/assets/resize/6/8/682d371b_5063ba7c.jpg') no-repeat center center;"><a href="katalog-izdelij/antikvariat/"></a></div><div class="box" style="background: url('https://www.etno-butik.com/assets/resize/d/2/d2268736_5063ba7c.jpg') no-repeat center center;"><a href="katalog-izdelij/suveniryi/roga/rog-tura-s-serebrom/"></a></div><div class="box" style="background: url('https://www.etno-butik.com/assets/resize/a/d/ad8a0995_5063ba7c.jpg') no-repeat center center;"><a href="katalog-izdelij/ukrashenija/"></a></div><div class="box" style="background: url('https://www.etno-butik.com/assets/resize/0/b/0bfd0221_5063ba7c.jpg') no-repeat center center;"><a href="katalog-izdelij/izdelia-iz-dereva/"></a></div><div class="box" style="background: url('https://www.etno-butik.com/assets/resize/f/b/fb26d8e7_5063ba7c.jpg') no-repeat center center;"><a href="katalog-izdelij/keramika/"></a></div>
	</div>
	<div class="arrows">
		<a href="#" onclick="return false;" class="prev"></a>
		<a href="#" onclick="return false;" class="next"></a>
	</div>
	<div class="pager"></div>
</div>

<?*/?>
			<div id="wrapper-content">
				<!-- SUBSCRIBE COMMENT


				-->

<div id="new-foods" class="catalog">
					<div class="title">
						<h2>Новые поступления</h2>
					</div>
					<div class="hidden">
				<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section",
	"list",
	Array(
		"ACTION_VARIABLE" => "action",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"ADD_TO_BASKET_ACTION" => "ADD",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BACKGROUND_IMAGE" => "-",
		"BASKET_URL" => "/personal/basket.php",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPATIBLE_MODE" => "Y",
		"CONVERT_CURRENCY" => "N",
		"CUSTOM_FILTER" => "",
		"DETAIL_URL" => "",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_COMPARE" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_FIELD2" => "RAND",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"ENLARGE_PRODUCT" => "STRICT",
		"FILTER_NAME" => "arrFilter",
		"HIDE_NOT_AVAILABLE" => "N",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"IBLOCK_ID" => "17",
		"IBLOCK_TYPE" => "aspro_mshop_catalog",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LABEL_PROP" => array(),
		"LAZY_LOAD" => "N",
		"LINE_ELEMENT_COUNT" => "3",
		"LOAD_ON_SCROLL" => "N",
		"MESSAGE_404" => "",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"OFFERS_LIMIT" => "5",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "12",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array("BASE"),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons,compare",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPERTIES" => array(),
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
		"PRODUCT_SUBSCRIPTION" => "Y",
		"PROPERTY_CODE" => array("",""),
		"PROPERTY_CODE_MOBILE" => array(),
		"RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
		"RCM_TYPE" => "personal",
		"SECTION_CODE" => "",
		"SECTION_ID" => "",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array("",""),
		"SEF_MODE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SHOW_ALL_WO_SECTION" => "Y",
		"SHOW_CLOSE_POPUP" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_FROM_SECTION" => "N",
		"SHOW_MAX_QUANTITY" => "N",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_SLIDER" => "Y",
		"SLIDER_INTERVAL" => "3000",
		"SLIDER_PROGRESS" => "N",
		"TEMPLATE_THEME" => "blue",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N"
	)
);?>


</div>
	<div class="clear"></div>
</div>
				<div id="pluses">
					<div class="hidden">
						<div class="box box-1">
							<div class="inner">
								<span class="icon"></span>
								<p class="title">Бесплатная доставка</p>
								<p class="podtitle">по России</p>
								<p class="bottom">При заказе <strong>от 10 000 руб.</strong></p>
							</div>
						</div>
						<div class="box box-2">
							<div class="inner">
								<span class="icon"></span>
								<p class="title">Гарантия качества</p>
								<p class="podtitle">всех изделий</p>
							</div>
						</div>
						<div class="box box-3">
							<div class="inner">
								<span class="icon"></span>
								<p class="title">При поддержке</p>
								<p class="podtitle">народных промыслов РД</p>
							</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>

				<div id="catalog" class="index">
					<div class="custom-title title">
						<h2>Каталог изделий</h2>
					</div>
					<div class="categories">
							<a href="katalog-izdelij/ukrashenija/" class=" " style="background: url('https://www.etno-butik.com/assets/images/categories/category-1.png') no-repeat right center;">
	Украшения
</a>
<a href="katalog-izdelij/keramika/" class=" xs-mr-0" style="background: url('https://www.etno-butik.com/assets/images/categories/category-2.png') no-repeat right center;">
	Керамика
</a>
<a href="katalog-izdelij/izdelia-iz-dereva/" class="md-mr-0 " style="background: url('https://www.etno-butik.com/assets/images/categories/category-3.png') no-repeat right center;">
	Изделия из дерева
</a>
<a href="katalog-izdelij/antikvariat/" class=" xs-mr-0" style="background: url('https://www.etno-butik.com/assets/images/categories/category-4.png') no-repeat right center;">
	Антиквариат
</a>
<a href="katalog-izdelij/oruzhie/" class=" " style="background: url('https://www.etno-butik.com/assets/images/categories/category-5.png') no-repeat right center;">
	Оружие
</a>
<a href="katalog-izdelij/ukrashenija/posuda-i-stolovoe-serebro/" class="md-mr-0 xs-mr-0" style="background: url('https://www.etno-butik.com/assets/images/categories/category-9.png') no-repeat right center;">
	Посуда
</a>
<a href="katalog-izdelij/naczionalnaya-odezhda/" class=" " style="background: url('') no-repeat right center;">
	Национальная одежда
</a>
<a href="katalog-izdelij/suveniryi/" class=" xs-mr-0" style="background: url('https://www.etno-butik.com/assets/images/categories/category-8.png') no-repeat right center;">
	Сувениры
</a>
						<div class="clear"></div>
					</div>
				</div>
			</div>
			<div class="gold-bg">
				<div class="wrapper-content pt-50">
					<div id="last-reviews">
						<div class="custom-title title">
							<a href="otzyivyi/"><h2>Отзывы о нас</h2></a>
						</div>
						<div class="reviewses">

						</div>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
			</div>

				<div class="wrapper-content pt-50">
					<div id="text-page">
						<div class="clear">&nbsp;</div>
						<p>Магазин сувениров ручной работы &laquo;Этно Бутик Горец&raquo; - кладезь оригинальных изделий и украшений. Выполненные руками потомственных мастеров, они, как говорят, с душой. И эту душу сможет почувствовать каждый, кто только на них взглянет.</p>
<p><a class="spoiler-btn" href="#">Читать далее...</a></p>
<div class="spoiler-block">
<p>На своих страницах мы собрали большой каталог различных товаров:</p>
<ul class="markered">
<li>антиквариат;</li>
<li>изделия из дерева;</li>
<li>керамические изделия;</li>
<li>оружие;</li>
<li>предметы интерьера;</li>
<li>сувениры;</li>
<li>ювелирные украшения и посуда из серебра.</li>
</ul>
<p>Сегодня изделия мастеров Кавказа получили такое распространение, что магазинов с подобной продукцией не перечесть. Мы позаботились о том, чтобы покупки у нас были приятными.</p>
<h2>Ну очень впечатляющий ассортимент</h2>
<p>У нас представлена не стандартная сувенирная продукция, которую конвейером выпускают с заводов. Все делается вручную. Это не только звучит круто, но и выглядит роскошно.</p>
<p>Все изделия изготавливаются потомственными мастерами. Они придерживаются 2 принципов &ndash; соблюдение традиций и работа с душой.</p>
<p>Да, ручная работа занимает больше времени, но результат действительно впечатляет. В нашем каталоге вы не найдете ни одного идентичного изделия! Даже один и тот же бокал или браслет имеет небольшие отличия в узоре. А уж об изделиях из дерева и говорить не стоит &ndash; природный рисунок каждого поистине уникален.</p>
<p>На страницах нашего сайта собраны изделия народного промысла различных мастеров Дагестана:</p>
<ul class="markered">
<li>из села Унцукуль;</li>
<li>из аула Кубачи;</li>
<li>из села Балхар;</li>
<li>из села Сулевкент;</li>
<li>из города Кизляр;</li>
<li>из провинции Табасаран.</li>
</ul>
<p>Больше никаких метаний в поисках наиболее удобного варианта приобретения. Все можно купить в одном месте и за один раз.</p>
<h2>Сувениры для любого случая</h2>
<p>Большой ассортимент нашего интернет-магазина позволяет выбрать сувенирную продукцию для любого человека. Мужчин не оставят равнодушными модели традиционного холодного оружия. Женщины придут в восторг от ярких, причем не по цвету, а по создаваемому настроению, ювелирных изделий. Для детей можно приобрести фигурки с животными и людьми, хотя и их можно назвать произведением искусства.</p>
<p>Хотите удивить коллег или деловых партнеров? Что может быть лучше, чем сувенир этнической направленности! Подобные изделия всегда обладали особым шармом, и даже самый небольшой из них лучше любых доказательств расскажет о внимании к оппоненту и вашей состоятельности.</p>
<p>А может быть, ваша цель &ndash; красиво обустроить комнаты? Продукция кавказских умельцев универсальна в этом плане. Она одинаково хорошо смотрится в классическом интерьере, сочетается со стилем минимализм. Да даже &laquo;сборная солянка&raquo; различных стилей выглядит гораздо интереснее и гармоничнее, если дополнить ее традиционными изделиями Дагестана.</p>
<p>И все эти сувениры, изготовленные вручную по вековым традициям, можно купить в нашем интернет-магазине. За счет тесного сотрудничества с мастерами мы предоставляем не только большой ассортимент, но и разумные цены.</p>
</div>
					</div>
				</div>

			<div class="footer-map">
				<script type="text/javascript">
if(typeof jQuery == "undefined"){
	document.write('<script type="text/javascript" src="//yandex.st/jquery/2.1.1/jquery.min.js" ></'+'script>');
}

if(typeof ymaps == "undefined"){
	//document.write('<script type="text/javascript" src="//api-maps.yandex.ru/2.1/?lang=ru_RU" ></'+'script>');
	document.write('<script type="text/javascript" src="//api-maps.yandex.ru/2.1/?lang=ru_RU&load=Map,Placemark,GeoObjectCollection,map.addon.balloon,geoObject.addon.balloon,package.controls,templateLayoutFactory,overlay.html.Placemark" ></'+'script>');
}
</script>


<div id="yandexMap" style="width:100%;height:500px;" class="ymBlock"></div>



<div style="clear:both"></div>


<style>
.search-map-result-view {
display: inline-block;
white-space: nowrap;
position: relative;
top: -13.5px;
left: -13.5px;
height: 27px;
}
.search-map-result-view._active {
top: -42px;
}

.search-map-result-view__overlay {
position: absolute;
width: 100%;
height: 100%;
z-index: 3;
cursor: pointer;
}

.search-map-result-view__icon {
background: url("//yastatic.net/maps-beta/_/QGuTq1D4vadJPJijE7xfGoI0UBY.svg");
width: 27px;
height: 27px;
}
.search-map-result-view__icon {
display: inline-block;
position: relative;
vertical-align: middle;
z-index: 2;
}
.search-map-result-view._active .search-map-result-view__icon {
background: url("//yastatic.net/maps-beta/_/ZDo_aSO8szfWh3gPYVWHwgyDa_E.svg");
width: 34px;
height: 42px;
}
.search-map-result-view__title {
height: 27px;
line-height: 27px;
}
.search-map-result-view__title {
background: rgba(255,255,255,.89);
display: inline-block;
vertical-align: top;
z-index: 1;
padding: 0 5px 0 19px;
margin-left: -14px;
border-radius: 5px;
border:1px solid #ddd;
max-width: none;
text-overflow: ellipsis;
overflow: hidden;
font-size:13px;
}
.search-map-result-view._active .search-map-result-view__title:not(:empty) {
display: inline-block;
margin-left: -21px;
}
</style>

<script type="text/javascript">
var ymFormId = '#ymFiltersForm';
var ymFormAction = $(ymFormId).attr('action');

ymaps.ready()
	.done(function (ymaps) {
		var mapCenteryandexMap = [55.753565715196416,37.62001016381833],
			myMapyandexMap = new ymaps.Map('yandexMap', {
				center: mapCenteryandexMap,
				zoom: 7,
				controls: ['zoomControl']
			});
		myMapyandexMap.behaviors.disable('scrollZoom');
		myMapyandexMap.behaviors.disable('drag');
		myMapyandexMap.controls.add(new ymaps.control.TypeSelector({options: { position: { left: 10, top: 10 }}}));


		$.getJSON( ymFormAction , "ymJSON=1" ).done( function (json) {
			window.geoObjects = ymaps.geoQuery(json);

			window.clusters = geoObjects.search("geometry.type == 'Point'").clusterize({preset: 'islands#invertedVioletClusterIcons'});
			myMapyandexMap.geoObjects.add(clusters);


				geoObjects.applyBoundsToMap(myMapyandexMap, {
					checkZoomRange: true
				});

		});


		// >> Обработка события клика на маркере
		myMapyandexMap.geoObjects.events.add('click', function (e)
		{
			var object = e.get('target');
			var goToRes = 0;
			var goToResBlank = 1;
			var goToJS = '';

			if( goToRes !== 'undefined' && goToRes !== 'null' && goToRes !== '' && goToRes !== 0 )
			{
				if( typeof object.properties.get(0).modx_id !== 'undefined'
					&& object.properties.get(0).modx_id !== 'null' )
				{
					var modx_id = object.properties.get(0).modx_id;
					//console.log( modx_id );

					if( goToJS !== 'undefined' && goToJS !== 'null' && goToJS !== '' && goToJS !== 0 )
					{

					}
					else if( goToResBlank !== 'undefined' && goToResBlank !== 'null' && goToResBlank !== '' && goToResBlank !== 0 )
					{
						window.open( 'https://www.etno-butik.com/index.php?id=' + modx_id );
					}
					else
					{
						window.location.href = 'https://www.etno-butik.com/index.php?id=' + modx_id;
					}

					e.preventDefault(); // остановим открытие балуна
				}
			}
		});
		// << Обработка события клика на маркере



	});
</script>
				<div class="address-block">
					<div class="address">
						<div class="map-title">Адрес:</div>
						<div class="map-text mb-25">г. Махачкала, пр. Петра 1, д. 29в</div>

						<div class="map-title">Телефон</div>
						<div class="map-text">
							8 800 250 01 71<br>
							8 928 570 55 77
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div id="wrapper-footer">
	<div class="visible-xs mobile-footer-block">
		<div class="mobile-footer-block-content">
			<div class="bs-row">
				<div class="col-md-6">
					<p class="title"><a href="kontaktyi/">Контакты</a></p>
					<a class="phone" href="tel:88002500171">8 800 250 01 71</a>
					<a class="phone" href="tel:89285705577">8 928 570 55 77</a>
					<p class="title">Адрес</p></p>
					г. Махачкала, пр. Петра 1, д. 29в
				</div>
				<div class="col-md-6">
					<p class="title"><a href="klientskaya-sluzhba/">Клиентская служба</a></p>
					<ul>
						<li><a href="klientskaya-sluzhba/oplata/">Оплата</a></li>
						<li><a href="klientskaya-sluzhba/dostavka/">Доставка</a></li>
						<li><a href="klientskaya-sluzhba/garantiya/">Гарантия</a></li>
					</ul>
				</div>
			</div>
			<div class="clear clearfix"></div>
		</div>
	</div>

<?/*?>    <div class="wrapper_inner no-padding">
        <?$APPLICATION->IncludeComponent("aspro:com.banners.mshop", "top_slider_banners_new", Array(
	"IBLOCK_TYPE" => "aspro_mshop_adv",	// Тип информационного блока (используется только для проверки)
		"IBLOCK_ID" => "2",	// Код информационного баннеров
		"TYPE_BANNERS_IBLOCK_ID" => "1",	// Код информационного блока типов баннеров
		"SET_BANNER_TYPE_FROM_THEME" => "N",	// Устанавливать тип баннера в соответствие с цветовой схемой
		"NEWS_COUNT" => "10",	// Количество баннеров на странице
		"SORT_BY1" => "SORT",	// Поле для первой сортировки баннеров
		"SORT_ORDER1" => "ASC",	// Направление для первой сортировки баннеров
		"SORT_BY2" => "ID",	// Поле для второй сортировки баннеров
		"SORT_ORDER2" => "DESC",	// Направление для второй сортировки баннеров
		"PROPERTY_CODE" => array(	// Свойства
			0 => "TEXT_POSITION",
			1 => "TARGETS",
			2 => "TEXTCOLOR",
			3 => "URL_STRING",
			4 => "BUTTON1TEXT",
			5 => "BUTTON1LINK",
			6 => "BUTTON2TEXT",
			7 => "BUTTON2LINK",
			8 => "",
		),
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"SITE_THEME" => $SITE_THEME,
		"BANNER_TYPE_THEME" => "TOP",
		"COMPONENT_TEMPLATE" => "top_slider_banners"
	),
	false
);?>
                    <script>
                        $(document).ready(function(){
                    setTimeout(function(){
                    $f = $(".flexslider");
                    $slides = $f.find(".flex-viewport li").not(".clone");
                    $list = $f.find(".flex-control-paging li");
                    i = 0;
                    while( $slides[i] )
                    {
														 var $slide = $($slides[i]);
                        var $a = $($list[i]).find('a');

						 $a.css("background", $slide.css("background")).css("background-size", "100%");

                        i++;
                    }}, 100);});
                    </script>
    </div>
    <div class="wrapper_inner">
        <?$APPLICATION->IncludeComponent("bitrix:news.list", "mshop", array(
        "IBLOCK_TYPE" => "aspro_mshop_content",
        "IBLOCK_ID" => "3",
        "NEWS_COUNT" => "5",
        "SORT_BY1" => "SORT",
        "SORT_ORDER1" => "ASC",
        "SORT_BY2" => "ID",
        "SORT_ORDER2" => "DESC",
        "FILTER_NAME" => "",
        "FIELD_CODE" => array(
            0 => "",
            1 => "",
        ),
        "PROPERTY_CODE" => array(
            0 => "LINK",
            1 => "",
        ),
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "36000000",
        "CACHE_FILTER" => "Y",
        "CACHE_GROUPS" => "N",
        "PREVIEW_TRUNCATE_LEN" => "",
        "ACTIVE_DATE_FORMAT" => "j F Y",
        "SET_TITLE" => "N",
        "SET_STATUS_404" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "INCLUDE_SUBSECTIONS" => "Y",
        "PAGER_TEMPLATE" => "",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "PAGER_TITLE" => "",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "AJAX_OPTION_ADDITIONAL" => ""
        ),
        false
    );?>
    </div>
    <div class="container">
        <div class="row">
            <?$APPLICATION->IncludeComponent(
                "bitrix:catalog.section.list",
                "indexpage",
                array(
                    "IBLOCK_TYPE" => "aspro_mshop_catalog",
                    "IBLOCK_ID" => "13",
                    "COMPONENT_TEMPLATE" => "indexpage"
                ),
                false
            );?>

            <?php
                $GLOBALS["colorit_filter_popular"]=array("PROPERTY_HIT_VALUE" => array("Хит"));
            ?>
            <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.top",
	"indexpage",
	array(
		"ACTION_VARIABLE" => "action",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_TO_BASKET_ACTION" => "ADD",
		"BASKET_URL" => "/basket/",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"CONVERT_CURRENCY" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_COMPARE" => "N",
		"ELEMENT_COUNT" => "6",
		"ELEMENT_SORT_FIELD" => "timestamp_x",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_NAME" => "colorit_filter_popular",
		"HIDE_NOT_AVAILABLE" => "N",
		"IBLOCK_ID" => "13",
		"IBLOCK_TYPE" => "aspro_mshop_catalog",
		"LABEL_PROP" => "-",
		"LINE_ELEMENT_COUNT" => "3",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_COMPARE" => "Сравнить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"OFFERS_CART_PROPERTIES" => array(
		),
		"OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"OFFERS_LIMIT" => "0",
		"OFFERS_PROPERTY_CODE" => array(
			0 => "COLOR_REF",
			1 => "",
		),
		"OFFERS_SORT_FIELD" => "timestamp_x",
		"OFFERS_SORT_FIELD2" => "id",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_ORDER2" => "desc",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_DISPLAY_MODE" => "N",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPERTIES" => array(
		),
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_URL" => "",
		"SEF_MODE" => "N",
		"SHOW_CLOSE_POPUP" => "N",
		"SHOW_DISCOUNT_PERCENT" => "Y",
		"SHOW_OLD_PRICE" => "Y",
		"SHOW_PRICE_COUNT" => "0",
		"TEMPLATE_THEME" => "blue",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"VIEW_MODE" => "SECTION",
		"COMPONENT_TEMPLATE" => "indexpage",
		"SELECTING" => array(
			0 => "27",
		),
		"HEAD_TEXT" => "Популярные модели",
		"HEAD_COUNTER" => "Y",
		"HEAD_TEXT_ITEMS" => "",
		"HEAD_TEXT_URL" => "/products/?set_filter=y&colorit_filter_new_45_2788221432=Y",
		"CURRENCY_ID" => "RUB",
		"CUSTOM_FILTER" => "",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"COMPATIBLE_MODE" => "Y"
	),
	false
);?>
        </div>
        <div class="row l-voffset_55">
            <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"indexpage",
	array(
		"COMPONENT_TEMPLATE" => "indexpage",
		"IBLOCK_TYPE" => "aspro_mshop_content",
		"IBLOCK_ID" => "9",
		"NEWS_COUNT" => "3",
		"USE_SEARCH" => "N",
		"USE_RSS" => "N",
		"USE_RATING" => "N",
		"USE_CATEGORIES" => "N",
		"USE_REVIEW" => "N",
		"USE_FILTER" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"CHECK_DATES" => "Y",
		"SEF_MODE" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_TITLE" => "Y",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"ADD_ELEMENT_CHAIN" => "N",
		"USE_PERMISSIONS" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"USE_SHARE" => "N",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"PREVIEW_TRUNCATE_LEN" => "",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"DISPLAY_NAME" => "Y",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_URL" => "/info/articles/#YEAR#/#ELEMENT_CODE#/",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y"
	),
	false
);?>
            <?php
            $GLOBALS["colorit_filter_indexpage"]=array("PROPERTY_HIT_VALUE" => array("Новинка"));
            ?>
            <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.top",
	"indexpage",
	array(
		"ACTION_VARIABLE" => "action",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_TO_BASKET_ACTION" => "ADD",
		"BASKET_URL" => "/basket/",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"CONVERT_CURRENCY" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_COMPARE" => "N",
		"ELEMENT_COUNT" => "6",
		"ELEMENT_SORT_FIELD" => "timestamp_x",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_NAME" => "colorit_filter_indexpage",
		"HIDE_NOT_AVAILABLE" => "N",
		"IBLOCK_ID" => "13",
		"IBLOCK_TYPE" => "aspro_mshop_catalog",
		"LABEL_PROP" => "-",
		"LINE_ELEMENT_COUNT" => "3",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_COMPARE" => "Сравнить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"OFFERS_CART_PROPERTIES" => array(
		),
		"OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"OFFERS_LIMIT" => "0",
		"OFFERS_PROPERTY_CODE" => array(
			0 => "COLOR_REF",
			1 => "",
		),
		"OFFERS_SORT_FIELD" => "sort",
		"OFFERS_SORT_FIELD2" => "id",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_ORDER2" => "desc",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_DISPLAY_MODE" => "N",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPERTIES" => array(
		),
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "",
		"PROPERTY_CODE" => array(
			0 => "MINIMUM_PRICE",
			1 => "MAXIMUM_PRICE",
			2 => "",
		),
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_URL" => "",
		"SEF_MODE" => "N",
		"SHOW_CLOSE_POPUP" => "N",
		"SHOW_DISCOUNT_PERCENT" => "Y",
		"SHOW_OLD_PRICE" => "Y",
		"SHOW_PRICE_COUNT" => "0",
		"TEMPLATE_THEME" => "blue",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"VIEW_MODE" => "SECTION",
		"COMPONENT_TEMPLATE" => "indexpage",
		"SELECTING" => array(
			0 => "27",
		),
		"HEAD_TEXT" => "Новинка",
		"HEAD_COUNTER" => "Y",
		"HEAD_TEXT_ITEMS" => "",
		"HEAD_TEXT_URL" => "/products/?set_filter=y&colorit_filter_new_45_1212055764=Y",
		"CURRENCY_ID" => "RUB",
		"CUSTOM_FILTER" => "",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"COMPATIBLE_MODE" => "Y"
	),
	false
);?>
        </div>
    </div>
    <div class="kinzhal-wrapper">
        <div class="kinzhal kinzhal-left"></div>
        <div class="kinzhal kinzhal-right"></div>
    </div>


    <div class="grey_bg-custom l-voffset_55">
        <div class="container l-position_relative">
            <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"indexpage_reviews",
	array(
		"ACTIVE_DATE_FORMAT" => "j F Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"ALL_URL" => "company/news/",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "DATE_ACTIVE_FROM",
			1 => "ACTIVE_FROM",
			2 => "DATE_ACTIVE_TO",
			3 => "ACTIVE_TO",
			4 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "15",
		"IBLOCK_TYPE" => "aspro_mshop_content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "3",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "main",
		"PAGER_TITLE" => "",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "NAME",
			1 => "TEXT",
			2 => "LINK",
			3 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ID",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"TITLE_BLOCK" => "",
		"COMPONENT_TEMPLATE" => "indexpage_reviews",
		"STRICT_SECTION_CHECK" => "N"
	),
	false
);?>
            <div class="row">
                <div class="col-md-8">
                    <div class="about-us-block">
                        <a class="b-block-header l-padding-top_0" href="/company/">
                            <h2 class="b-block-header__text">Фирменный интернет-магазин «Кизляр»</h2>
                        </a>
                        <div class="about-us-text">
                            <p>«Кизляр» – самый узнаваемый производитель ножей и кинжалов в России. Более двадцати лет бренд радует ценителей холодного оружия по всему миру.</p>
                            <p>В ассортименте кизлярских ножей представлены разные модели: от агрессивных «Милитари» в черном покрытии, до художественных клинков в орнаменте и серебре. Такое разнообразие изделий делает их популярными в самых разных кругах: среди туристов, охотников, сотрудников правоохранительных органов, военных и коллекционеров.</p>
                        </div>
                        <a href="/company/" class="about-us-detailed">Подробнее</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:subscribe.form",
                        "indexpage",
                        array(
                            "AJAX_MODE" => "N",
                            "SHOW_HIDDEN" => "N",
                            "ALLOW_ANONYMOUS" => "Y",
                            "SHOW_AUTH_LINKS" => "N",
                            "CACHE_TYPE" => "A",
                            "CACHE_TIME" => "86400",
                            "CACHE_NOTES" => "",
                            "SET_TITLE" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "LK" => "Y",
                            "COMPONENT_TEMPLATE" => "mshop",
                            "USE_PERSONALIZATION" => "Y",
                            "PAGE" => SITE_DIR."personal/subscribe/",
                        ),
                        false
                    );?>
                </div>
            </div>
			<div class="knives"><a href="/proizvodstvo/"></a></div>
        </div>
    </div>
    <style>
    	.flexslider {
    		z-index:auto;
    	}
    </style>

<?*/?>
<? $APPLICATION->SetTitle("Купить нож «Кизляр» в фирменном интернет-магазине"); ?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
