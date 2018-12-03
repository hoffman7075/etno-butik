BX.ready(function(){
	
	function supportCSS(prop) {
		var yes = false; // по умолчанию ставим ложь
		if('Moz'+prop in document.body.style) {
			yes = true; // если FF поддерживает, то правда
		}
		if('webkit'+prop in document.body.style) {
			yes = true; // если Webkit поддерживает, то правда
		}
		if('ms'+prop in document.body.style) {
			yes = true; // если IE поддерживает, то правда
		}
		if(prop in document.body.style) {
			yes = true; // если поддерживает по умолчанию, то правда
		}
		return yes; // возращаем ответ
	}
	
	function init() {
		if (supportCSS('flex')) {
			jQuery('.happynewyearForm .inputRange input').on('input change',function(e){
				jQuery(this).closest('.inputRange').find('.val').html(jQuery(this).val());
			});
		} else {
			jQuery('.happynewyearForm').addClass('oldBrowser');
			var val = jQuery('.happynewyearForm .inputRange input').val();
			jQuery('.happynewyearForm .inputRange input').attr('type','text').val(val);
		}

	}
	
	//Проверим jQuery
	if(typeof jQuery=='undefined') {
		var headTag = document.getElementsByTagName("head")[0];
		var jqTag = document.createElement('script');
		jqTag.type = 'text/javascript';
		jqTag.src = '/bitrix/js/bfg_happynewyear/jquery.js';
		jqTag.onload = init;
		headTag.appendChild(jqTag);
	} else {
		init();
	}
});

function bfg_happynewyearColorPicker(color, objColorPicker) {
	var id = '#bx_colorpicker_'+objColorPicker.oPar.id;
	jQuery(id).closest('td').find('input').val(color);
}