




<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="feedback-wrap">
<div class="feedbacks-area">

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="feedback-item " id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="feedback-popup">
			<?=$arItem["PROP_TEXT"]?>
		</div>
		<span class="feedback-author"><?=$arItem["PROP_NAME"]?><?=($arItem["PROP_CITY"] ? ", ".$arItem["PROP_CITY"] : "")?></span>
		<span class="feedback-date"><?=$arItem["DISPLAY_ACTIVE_FROM"]?></span>
		<?if($arItem["PROP_TEXT_ADMIN"] != ""):?>
		<div class="feedback-answer">
			<span>Ответ от администрации сайта: </span>
			<div class="feedback-answer-popup">
				<?=$arItem["PROP_TEXT_ADMIN"]?>
			</div>
		</div>
		<?endif;?>
	</div>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>


<?$res = $APPLICATION->IncludeComponent(
	"colorit:ciforms", 
	"review_add", 
	array(
		"ADDITIONAL_ATTRS_BUTTON" => "",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"ELEMENT_NAME_PATTERN" => "#PROPERTY_NAME#",
		"HIDDEN_FIELD_0" => "",
		"HIDDEN_FIELD_1" => "",
		"HIDDEN_FIELD_LIST" => array(
			0 => "83",
			1 => "103"
		),
		"IBLOCK_ID" => "15",
		"IBLOCK_TYPE" => "aspro_mshop_catalog",
		"MSG_SEND" => "Отправить",
		"MSG_SEND_OK" => "Спасибо! Сообщение отправлено.",
		"SEND_MAIL_0" => "",
		"COMPONENT_TEMPLATE" => "review_add",
		"BIG_TEXT" => "Оставьте отзыв!",
		"SMALL_TEXT" => "и получайте информацию об акциях первыми!",
		"HIDDEN_FIELD_USE" => "N",
		"ACTIVE" => "N",
		"USE_CAPTCHA" => "N",
		"FORM_SID" => "763e0b21645ef6bf17c8591ba93c6dd7"
	),
	false
);?>
</div>