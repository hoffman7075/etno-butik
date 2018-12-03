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

	<div class="catalog catalog-left-menu">
		<ul class="">
<?
$i = 0;
foreach ($arResult['SECTIONS'] as &$arSection)
{
	$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
	$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);?>

	<?
	$intCount = CIBlockSection::GetCount(array('IBLOCK_ID' => $arParams["IBLOCK_ID"],'SECTION_ID' => $arSection['ID']));
	$active = "";

	if ($_GET['SECTION_ID'] == $arSection['ID']) {
		$active = "active";
	}

	if ($intCount > 0): ?>
		<li id="<? echo $this->GetEditAreaId($arSection['ID']); ?>" class="parent <?=$active?>">
	<?php else: ?>
		<li id="<? echo $this->GetEditAreaId($arSection['ID']); ?>" class="<?=$active?>">
	<?php endif; ?>
		<a href="<?=$arSection['SECTION_PAGE_URL']; ?>"><?=$arSection["NAME"]?></a>
		<?php
			$rsParentSection = CIBlockSection::GetByID($arSection['ID']);
			if ($arParentSection = $rsParentSection->GetNext())
			{
			   $arFilter = array('IBLOCK_ID' => $arParentSection['IBLOCK_ID'],'>LEFT_MARGIN' => $arParentSection['LEFT_MARGIN'],'<RIGHT_MARGIN' => $arParentSection['RIGHT_MARGIN'],'DEPTH_LEVEL' => 2, "ACTIVE"=>"Y"); // выберет потомков без учета активности
			   $rsSect = CIBlockSection::GetList(array('left_margin' => 'asc'),$arFilter);?>
				 <ul class="parent">
				   <?while ($arSect = $rsSect->GetNext())
				   {?>
						 <?
						 $subActive = "";
						 if ($_GET['SECTION_ID'] == $arSect["ID"]) {
					 		$subActive = "active";
					 		}?>
							<li class="<?=$subActive?>">
								<a href="/catalog/?SECTION_ID=<?=$arSect["ID"]?>"><?=$arSect["NAME"]?></a>
							</li>
				   <? }?>
			 	</ul>
			<?}
		?>
	</li>
	<?
	$i++;
}
?>
</ul>
</div>
