// JavaScript Document

$(document).ready(function() {
	
	//$("input[name='phone']").mask("+7-999-999-99-99");
	
	/*$('.open-all-left-catalog').click(function(){
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
	});*/
	
	$('.pre-order').click(function(){
		$('#popup-pre-order').arcticmodal();
		$('#popup-pre-order').show();
		$('#popup-pre-order input[name="product"]').val( $(this).attr('title') );
		$('#popup-pre-order input[name="link"]').val( $(this).attr('rel') );
		return false;
	});
	
	$('#popup-pre-order .close').click(function(){
		$('#popup-pre-order').arcticmodal('close');
		$('#popup-pre-order').hide();
		return false;
	});
	
	$('#header-bottom ul.new-nav').slicknav({
		label: 'КАТАЛОГ',
		prependTo: '#header-bottom'
	});
	
	$('#new-slider').cycle({
		fx: 'fade',
		timeout: 6000,
		pager: '#wrapper-new-slider .pager',
		next: '#wrapper-new-slider .arrows .next',
		prev: '#wrapper-new-slider .arrows .prev',
	});
	
	$('.toggle-feedback').click(function(){
		$(this).hide('slow');
		$('#feedback').show('slow');
		return false;
	});
	
	/*jQuery('#latest-list').jcarousel({
    	wrap: 'circular',
		scroll: 1,
		auto: 3,
		size: 5
    });*/
	
	$('.promisli .read-more').click(function(){
		$('.promisli .dspnone').show('fast');
		$(this).hide('fast');
		return false;
	});
	
	jQuery("#feedback-form").validate({   
		ignore: ".ignore",
		rules:{ 
			name:{
				required: true
			},
			email:{
				required: true,
				email: true
			},
			text:{
				required: true,
			},
			policy:{
				required: false,
			},
			/*"hiddenRecaptcha": {
     			required: function() {
         			if(grecaptcha.getResponse() == '') {
             			return true;
         			} 
					else {
             			return false;
         			}
     			}
			}*/
		}
	});
	
	jQuery(".comment-form").validate({   
		ignore: ".ignore",
		rules:{ 
			email:{
				required: true,
				email: true
			},
			name:{
				required: true,
			},
			comment:{
				required: true,
			},
			policy:{
				required: true,
			}
		}
	});
	
	jQuery("#form-pre-order").validate({   
		ignore: ".ignore",
		rules:{ 
			name:{
				required: true,
			},
			phone:{
				required: true,
			},
		}
	});
	
	jQuery("#msOrder").validate({   
		ignore: ".ignore",
		rules:{ 
			receiver:{
				required: true
			},
			phone:{
				required: true
			},
			email:{
				required: true,
				email: true
			},
			/*index:{
				required: true
			},
			region:{
				required: true
			},*/
			city:{
				required: true
			},
			policy:{
				required: true
			},
			/*street:{
				required: true
			},
			building:{
				required: true
			}*/
		}
	});
		
});

$(function() {
    $("#subscribe").button();
	$(".delivery").button();
	$(".payment").button();
	$(".policy").button();
})

$(function() {
    $( "#popup-club-cart" ).dialog({
	autoOpen: false,
	resizable: false,
	modal: true,
	width: 800,
	show: {
        	effect: "fade",
        	duration: 1000
     	 },
     	 hide: {
        	effect: "fade",
        	duration: 1000
	}
    });
    $( ".open-popup-club-cart" ).click(function() {
		$( "#popup-club-cart" ).dialog( "open" );
		return false;
	});
	$( ".close" ).click(function() {
      	$( "#popup-club-cart" ).dialog( "close" );
		return false;
    });
});

$(window).load(function() {
	// $('.catalog .box').equalHeight();
	// $('.catalog .box .name').equalHeight();
});

window.onload = function() {
	$('.catalog .box').equalHeight();
	$('.catalog .box .name').equalHeight();
	$('.catalog .n3-elems').equalHeight();
}

$(document).on('click', '.btn_more', function() {
	setTimeout(function() {
		$('.catalog .box').equalHeight();
		$('.catalog .box .name').equalHeight();
	}, 1000);
});



$('.spoiler-btn').click(function() {
	$(this).closest('div').find('.spoiler-block').toggleClass('toggle');
	$(this).toggleClass('toggle');
	$(this).text($(this).hasClass('toggle') ? 'Скрыть' : 'Читать далее...');
	return false;
});

$('.toggle-text').click(function() {
	if ($(this).hasClass('toggle')) {
		$(this).text('Читать далее');
	} else {
		$(this).text('Скрыть');
	}
	$(this).toggleClass('toggle');
	$(this).parent().find('.hidden-block').toggleClass('hidden-block-hidden');
	return false;
});

$('.sort-btn-price').click(function() {
	$('.sort-btn-reset').removeClass('d-none');
});

$('.sort-btn-reset a').click(function() {
	$('.sort-btn-reset').addClass('d-none');
});
