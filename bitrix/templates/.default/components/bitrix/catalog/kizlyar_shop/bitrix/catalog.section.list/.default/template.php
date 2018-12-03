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
$this->setFrameMode(true);?>
<div class="row" style="margin-left: -15px;margin-right: -10px;">
	<div id="topCategory">
		<ul class="">
<? foreach ($arResult['SECTIONS'] as &$arSection)
{
	$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
	$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);?>
	
	<div id="<? echo $this->GetEditAreaId($arSection['ID']); ?>" class="col-md-4">
		<a href="<?=$arSection['SECTION_PAGE_URL']; ?>">
			<span><?=$arSection["NAME"]?></span>
			<img src="<?=$arSection['PICTURE']['SRC']; ?>">
		</a>
	</div>
	<?
}
?>
		</ul>
	</div>
</div>
<div class="clear">&nbsp;</div>
