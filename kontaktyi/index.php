<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?><div id="client-service">
					<ul class="tabs"><li class="first"><a href="/klientskaya-sluzhba/oformlenie-zakaza/">Оформление заказа</a></li><li><a href="/klientskaya-sluzhba/oplata/">Оплата</a></li><li><a href="/klientskaya-sluzhba/dostavka/">Доставка</a></li><li class="last"><a href="/klientskaya-sluzhba/garantiya/">Гарантия</a></li></ul>
					<div class="contact-info">
						<div class="left">
							<p><span>Адрес:</span>г. Махачкала, пр. Петра 1, д. 29в</p>
							<p><span>Телефон:</span>
							8 800 250 01 71<br>
							8 928 570 55 77
							</p>
							<p><span>E-mail:</span><a href="mailto:info@etno-butik.com">info@etno-butik.com</a></p>
						</div>
						<div class="right">
							<img src="assets/resize/b/d/bd3a2530_692abaff.jpg" alt="">
							<div class="map">
								<script type="text/javascript">
if(typeof jQuery == "undefined"){
	document.write('<script type="text/javascript" src="//yandex.st/jquery/2.1.1/jquery.min.js" ></'+'script>');
}

if(typeof ymaps == "undefined"){
	//document.write('<script type="text/javascript" src="//api-maps.yandex.ru/2.1/?lang=ru_RU" ></'+'script>');
	document.write('<script type="text/javascript" src="//api-maps.yandex.ru/2.1/?lang=ru_RU&load=Map,Placemark,GeoObjectCollection,map.addon.balloon,geoObject.addon.balloon,package.controls,templateLayoutFactory,overlay.html.Placemark" ></'+'script>');
}
</script><script type="text/javascript" src="//yandex.st/jquery/2.1.1/jquery.min.js"></script><script type="text/javascript" src="//api-maps.yandex.ru/2.1/?lang=ru_RU&amp;load=Map,Placemark,GeoObjectCollection,map.addon.balloon,geoObject.addon.balloon,package.controls,templateLayoutFactory,overlay.html.Placemark"></script>


<div id="yandexMap" style="width:100%;height:100%;" class="ymBlock"></div>



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
							</div>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
						<p class="center"><a href="#" class="toggle-feedback btn-gold">Написать нам сообщение</a></p>
						<div id="feedback">
							
							<form action="kontaktyi/" method="post" id="feedback-form" class="styled-form" novalidate="novalidate">
								<div class="row">
									<label>Фамилия/имя/отчество</label>
									<input type="text" name="name" class="input">
									<div class="clear"></div>
								</div>
								<div class="row">
									<label>Телефон</label>
									<input type="text" name="phone" class="input">
									<div class="clear"></div>
								</div>
								<div class="row">
									<label>E-mail</label>
									<input type="text" name="email" class="input">
									<div class="clear"></div>
								</div>
								<div class="row">
									<label>Сообщение</label>
									<textarea name="text"></textarea>
									<div class="clear"></div>
								</div>
								<!-- <div class="row policy-box" style="margin: 35px 0 10px 0;">
									<input name="policy" value="1" id="policy" class="checkbox policy" type="checkbox" checked="checked">
									<label for="policy" class="for-checkbox">Согласен с <a href="politika/" target="_blank">политикой конфиденциальности</a></label>
									<div class="clear"></div>
								</div> -->
								<div class="white-background"><input type="submit" name="submit" class="submit btn-gold" value="Отправить"></div>
							</form>
						</div>
					</div>
				</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>