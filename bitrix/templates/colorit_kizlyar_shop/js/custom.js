//$(document).ready(function(){
//	$('.menu_item_l1.catalog>a').click(function(e){
//		if (window.innerWidth <= 600) {
			//$('#header .menu_item_l1 .child.cat_menu').slideDown();
//		}
//	})
//})

widnow = $;

$(document).ready(function() {
  // делаем активным родителя в каталоге
  if ($("ul.parent .active").length > 0) {
    $("ul.parent .active").parents("li.parent").addClass("active");
  }
});
