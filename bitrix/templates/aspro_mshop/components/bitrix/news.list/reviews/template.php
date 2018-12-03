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
<div class="feedbacks-area">

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="feedback-item " id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="feedback-baloon ">
			<div class="feedback-author">
				<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
				<div class="feedback-img">
				<img
					class="preview_picture"
					border="0"
					src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
					alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
					title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
					style="float:left"
					/>
				</div>
				<?endif?>
				
				<p class="feedback-name">
					<?echo $arItem["NAME"]?>
				</p>
			</div>
			<?if($arItem["DISPLAY_PROPERTIES"]["TEXT"]["~VALUE"] != ""):?>
			<p class="feedback-text">
				<?=$arItem["DISPLAY_PROPERTIES"]["TEXT"]["~VALUE"] ;?> 
			</p>
			<?endif;?>
			<?if(isset($arItem["DISPLAY_PROPERTIES"]["LINK"]["VALUE"]) && ($arItem["DISPLAY_PROPERTIES"]["LINK"]["VALUE"] != "")):?>
			
			<ul class="soc">
				<li><a class="soc-fb" href="<?=$arItem["DISPLAY_PROPERTIES"]["LINK"]["VALUE"];?>" target="_blank"></a></li>
				<li><a class="soc-tw" href="<?=$arItem["DISPLAY_PROPERTIES"]["LINK"]["VALUE"];?>" target="_blank"></a></li>
			</ul>
			<?endif;?>
		</div>
	</div>
<?endforeach;?>
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>

