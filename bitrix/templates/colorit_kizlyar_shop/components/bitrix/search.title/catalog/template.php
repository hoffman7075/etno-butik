<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<? $this->setFrameMode( true ); ?>
<?
$INPUT_ID = trim($arParams["~INPUT_ID"]);
if(strlen($INPUT_ID) <= 0)
	$INPUT_ID = "title-search-input";
$INPUT_ID = CUtil::JSEscape($INPUT_ID);

$CONTAINER_ID = trim($arParams["~CONTAINER_ID"]);
if(strlen($CONTAINER_ID) <= 0)
	$CONTAINER_ID = "title-search";
$CONTAINER_ID = CUtil::JSEscape($CONTAINER_ID);

if($arParams["SHOW_INPUT"] !== "N"):?>
	<div id="<?echo $CONTAINER_ID?>" class="stitle_form">
		<form action="<?echo $arResult["FORM_ACTION"]?>">
			<div class="form-control1 bg">
				<input id="<?echo $INPUT_ID?>" type="text" name="q" value="" size="40" class="text small_block" maxlength="50" autocomplete="off" placeholder="Поиск" />
			</div>
		</form>
	</div>
<?endif?>
<script type="text/javascript">
var jsControl = new JCTitleSearch({
	//'WAIT_IMAGE': '/bitrix/themes/.default/images/wait.gif',
	'AJAX_PAGE' : '<?echo CUtil::JSEscape(POST_FORM_ACTION_URI)?>',
	'CONTAINER_ID': '<?echo $CONTAINER_ID?>',
	'INPUT_ID': '<?echo $INPUT_ID?>',
	'MIN_QUERY_LEN': 2
});
jsControl.onResult = function(){
	console.info(this);
};
jsControl.callbackOnResult = function(res){
	let objects = res.querySelectorAll("tr");
	console.info(objects);
	for( let i = 0; objects[i]; i++ ) {
		let object = objects[i];

		object.style.cursor = "pointer";
		object.addEventListener("click", function(){ 
			let a = this.querySelector("a");
			a.click();
		});
	}
};
$("#<?=$arParams["~INPUT_ID"]?>").focus(function() { $(this).parents("form").find("button[type='submit']").addClass("hover"); });
$("#<?=$arParams["~INPUT_ID"]?>").blur(function() { $(this).parents("form").find("button[type='submit']").removeClass("hover"); });
</script>
