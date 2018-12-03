<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<? $this->setFrameMode( true ); ?>
<div class="tizers_block">
	<? foreach($arResult["ITEMS"] as $arItem): ?>
		<?php
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		$name=strip_tags($arItem["~NAME"], "<br><br/>");
		$alt = strip_tags($name);
		?>

		<a href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>" id="<?=$this->GetEditAreaId($arItem["ID"]);?>" class="item">
			<div class="img">
	            <img class="onunhover" src="<?=$arItem["PROPERTIES"]["IMG"]["VALUE"]?>" alt="<?=$alt;?>" title="<?=$alt;?>" />
	            <img class="onhover" src="<?=$arItem["PROPERTIES"]["IMG_HOV"]["VALUE"]?>" alt="<?=$alt;?>" title="<?=$alt;?>" />
			</div>
			<div class="title">
				<span>
					<?=$name;?>
				</span>
			</div>
		</a>
	<? endforeach; ?>
</div>