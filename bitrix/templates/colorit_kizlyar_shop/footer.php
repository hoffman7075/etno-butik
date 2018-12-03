<?
global $APPLICATION;
$dir = $APPLICATION->GetCurDir();
if($dir!="/")
{
?>

</div>
</div>

<?
}
?>


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
	<div id="wrapper-footer-top">
		<div id="footer-top">
			<div class="list column-1">
				<p class="title"><a href="/katalog-izdelij/">Каталог изделий</a></p>

		<?$APPLICATION->IncludeComponent("bitrix:menu", "bottom_main", Array(
			"ROOT_MENU_TYPE" => "bottom_catalog",	// Тип меню для первого уровня
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
			<div class="list column-2">
				<p class="title"><a href="/o-nas/">Компания</a></p>

		<?$APPLICATION->IncludeComponent("bitrix:menu", "bottom_main", Array(
			"ROOT_MENU_TYPE" => "bottom_company",	// Тип меню для первого уровня
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
			<div class="list column-3">
				<p class="title"><a href="/klientskaya-sluzhba/">Клиентская служба</a></p>

		<?$APPLICATION->IncludeComponent("bitrix:menu", "bottom_main", Array(
			"ROOT_MENU_TYPE" => "bottom_info",	// Тип меню для первого уровня
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
			<div class="contacts">
				<p class="title"><a href="kontaktyi/">Контакты</a></p>
				<p class="phone">8 928 570 55 77</p>
				<p>г. Махачкала, пр. Петра 1, д. 29в</p>
				<p class="email"><a href="mailto:info@etno-butik.com" onclick="yaCounter37519630.reachGoal('MAIL'); return true;">info@etno-butik.com</a></p>
				<p class="email"><a href="kontaktyi/">Написать нам</a></p>
				<p class="email"><a href="politika/">Политика конфиденциальности</a></p>
			</div>
			<div class="social">
				<a href="https://vk.com/gorec_etnobutic" class="vk" target="_blank" rel="nofollow"></a>
				<a href="https://www.instagram.com/etno_butik_gorec/" class="inst" target="_blank" rel="nofollow"></a>
				<a href="https://www.facebook.com/gorec.etno.butik/" class="fb" target="_blank" rel="nofollow"></a>
			</div>
			<div class="right-column">
				<div class="subscribe">
					<p class="title">Узнавайте об акциях первыми!</p>
					<form action="https://www.etno-butik.com/" method="post" class="styled-form">
<input type="email" style="width: 0px; height: 0px; border: 0px; visibility: hidden;" placeholder="E-mail адрес" value="mail@etno-butik.com" name="email">
<input type="email" placeholder="E-mail адрес" class="input input-text required-entry validate-email" id="newsletter1" name="subscriber">

<button class="subscribe submit btn-gold" type="submit"><span>Подписаться на рассылку</span></button>
<input type="hidden" name="sx_action" value="subscribe">

</form>
				</div>
			</div>
			<div class="money">
				<span class="visa"></span>
				<span class="qiwi"></span>
				<div class="clear"></div>
				<span class="mastercard"></span>
				<span class="yandex"></span>
				<div class="clear"></div>
				<span class="robokassa"></span>
			</div>
			<!--<div class="contacts">
				<p class="title"><a href="kontaktyi/">Контакты</a></p>
				<p class="phone">8 800 250 01 71</p>
				<p class="email"><a href="mailto:info@etno-butik.com" onclick="yaCounter37519630.reachGoal('MAIL'); return true;">info@etno-butik.com</a></p>
			</div>
			<div class="list column-1">
				<p class="title"><a href="o-nas/">Компания</a></p>
				<ul>
					<li><a href="o-nas/">О нас</a></li>
					<li><a href="klientskaya-sluzhba/oplata/">Оплата</a></li>
					<li><a href="klientskaya-sluzhba/dostavka/">Доставка</a></li>
					<li><a href="klientskaya-sluzhba/garantiya/">Гарантия</a></li>
				</ul>
			</div>
			<div class="list column-2">
				<p class="title"><a href="narodnyie-promyislyi/">Народные промыслы</a></p>
				<ul>
					<li><a href="akczii/">Акции</a></li>
					<li><a href="otzyivyi/">Отзывы</a></li>
				</ul>
			</div>
			<div class="social">
				<a href="https://vk.com/gorec_etnobutic" class="vk" target="_blank" rel="nofollow"></a>
				<a href="https://www.instagram.com/gorec_etnobutik/" class="inst" target="_blank" rel="nofollow"></a>
				<a href="https://www.facebook.com/profile.php?id=100011835858956" class="fb" target="_blank" rel="nofollow"></a>
			</div>
			<div class="right-column">
				<div class="subscribe">
					<p class="title">Узнавайте об акциях первыми!</p>
					<form action="https://www.etno-butik.com/" method="post" class="styled-form">
<input type="email" style="width: 0px; height: 0px; border: 0px; visibility: hidden;" placeholder="E-mail адрес" value="mail@etno-butik.com" name="email">
<input type="email" placeholder="E-mail адрес" class="input input-text required-entry validate-email" id="newsletter1" name="subscriber">

<button class="subscribe submit btn-gold" type="submit"><span>Подписаться на рассылку</span></button>
<input type="hidden" name="sx_action" value="subscribe">

</form>
				</div>
			</div>
			<div class="clear"></div>
			<div class="money">
				<span class="mastercard"></span>
				<span class="visa"></span>
				<span class="qiwi"></span>
				<div class="clear"></div>
				<span class="robokassa"></span>
			</div>
			<span class="copyright">Copyright @ 2018<br /><a href="karta-sajta/">Карта сайта</a></span>-->
			<div class="clear"></div>
		</div>
	</div>
	<div id="wrapper-footer-bottom">
		<div id="footer-bottom">
			<span class="copyright">Copyright @ 2018 <a href="karta-sajta/">Карта сайта</a></span>
			<a href="http://www.golden-studio.ru/" id="golden_studio_logo" target="_blank">Продвижение и создание сайтов</a>
		</div>
	</div>
</div>

<div id="popups">
	<div id="popup-club-cart">
		<a href="#" class="close"></a>
		<p class="title">Клубная карта в подарок!</p>
		<p class="img"><img src="/assets/templates/images/popup-club-cart.jpg" alt="Клубная карта в подарок" /></p>
		<p class="text">Совершите покупку и получите 5% скидочную карту в подарок*<br />Карта действует в фирменных магазинах «Горец» <a href="/">www.etno-butik.com</a> и «Кизляр» <a href="http://www.kizlyar-shop.ru" target="_blank" rel="nofollow">www.kizlyar-shop.ru</a></p>
		<p>* Карта выдается в подарок с заказом, при условии покупки, без скидки по карте.</p>
		<p class="button"><a href="">Подробнее</a></p>
	</div>
</div>

<div id="popup-pre-order">
	<a href="#" class="close"></a>
	
	<form action="https://www.etno-butik.com/" method="post" id="form-pre-order">
		<p class="title">Оставьте контактные данные,<br />мы свяжемся с Вами в ближайшее время</p>
		<input type="hidden" name="pre-order" value="1" />
		<input type="hidden" name="product" value="" />
		<input type="hidden" name="link" value="0" />
		<input type="hidden" name="nospam:blank" value="" />
 		<input type="hidden" name="work-email" value="" />
		
		<div class="form-group">
			<label>Ваше имя*</label>
			<input type="text" name="name" value="" />
			<div class="clear"></div>
		</div>
		
		<div class="form-group">
			<label>Телефон*</label>
			<input type="text" name="phone" value="" />
			<div class="clear"></div>
		</div>
		
		<div class="form-group">
			<label>Email</label>
			<input type="text" name="email" value="" />
			<div class="clear"></div>
		</div>
		
		<div class="form-group">
			<label></label>
			<input type="submit" name="submit" value="Отправить" />
			<div class="clear"></div>
		</div>
	</form>
	<p class="warning">* – поля обязательные для ввода</p>
</div>

<a href="#" class="btn-top hidden">&#8963;</a>

<script type="text/javascript" src="/assets/templates/js/jquery.min.js"></script>
<script src="/assets/components/msminicartdynamic/js/web/msminicartdynamic.js"></script>

<script>
$(document).ready(function() {
	$('.open-all-left-catalog').click(function(){
		if ( $(this).hasClass('active') ) {
			$('#left-catalog ul li + li + li + li + li + li').hide('fast');
			$(this).removeClass('active');
			$(this).text('Смотреть все');
		}
		else {
			$('#left-catalog ul li + li + li + li + li + li').show('fast');
			$(this).addClass('active');
			$(this).text('Свернуть');
		}
		return false;
	});
	
	$(window).scroll(function(){
		if($(window).scrollTop() > 500)
		{
			$('.btn-top').removeClass('hidden');
		} else {
			$('.btn-top').addClass('hidden');
		}
	});
	
	$('.btn-top').click(function() {
		$('html, body').animate({ scrollTop: 0 }, '500');
		return false;
	});
	
	check_slideupdown = true;
	$('.minicart-hover').mouseover(
		function(){
			if (check_slideupdown) {
				check_slideupdown = false;
				$('.cart-product-list').stop();
				$('.cart-product-list').slideDown('fast', function() {check_slideupdown = true});
			}
		});
		
	$('.minicart-hover').mouseleave (
		function(){
			if (check_slideupdown) {
				check_slideupdown = false;
				$('.cart-product-list').stop();
				$('.cart-product-list').slideUp('fast', function() {check_slideupdown = true});
			}
		}
	);
	
	$('.to-cart').on('click', function() {
		if ($('.cart-product-list').css('display') != 'block') {
			setTimeout(function() {check_slideupdown = false; $('.cart-product-list').stop(true, false).slideDown('fast', function() {check_slideupdown = true});}, 1000);
			setTimeout(function() {check_slideupdown = false; $('.cart-product-list').stop(true, false).slideUp('fast', function() {check_slideupdown = true});}, 3500);
		}
		return false;
	});
});


//Что бы работала сортировка на мобильных устройствах
$('.sort-btn').click(function() {});
</script>


<script type="text/javascript" src="/min/?g=js"></script>

<!-- change prewieImage in topMenu -->
<script type="text/javascript">
	

$('#menu-8.first>ul').css('width','700px');
$('#menu-52.first>ul').css('width','700px');
//hidden not function. function hide() is working
//$('#prewieImage img').hidden();
$('#prewieImage img').attr('src','https://www.etno-butik.com/assets/images/products/373/250x250/28-kopiya.jpg');

</script>
<!--  -->

<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'jbljfkKy4V';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66786775-51', 'auto');
  ga('send', 'pageview');

</script>
<!-- Yandex.Metrika counter -->
<script src="https://mc.yandex.ru/metrika/watch.js" type="text/javascript"></script>
<script type="text/javascript">
try {
    var yaCounter37519630 = new Ya.Metrika({
        id:37519630,
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
    });
} catch(e) { }
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/37519630" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
	<script type="text/javascript" src="https://www.etno-butik.com/assets/components/minishop2/js/web/custom.js?v=5784beb5e7"></script>
<script type="text/javascript" src="https://www.etno-butik.com/assets/components/msearch2/js/web/default.js"></script>

	<script type="text/javascript">
		if ($("form.msearch2").length) {
			mSearch2.Form.initialize("form.msearch2");
		}
	</script>
<script type="text/javascript" src="https://www.etno-butik.com/assets/components/msfavorites/js/web/default.js"></script>
<script type="text/javascript">msfavorites.initialize();</script>
</body>
</html>