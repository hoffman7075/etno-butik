<div class="feedback">
    <a class="b-block-header b-block-header_center" href="/reviews/">
        <h2 class="b-block-header__text">Отзывы</h2>
    </a>
    <div class="row feedback-list">
        <? foreach($arResult["ITEMS"] as $arItem): ?>
            <?php
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="col-md-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="feedback-popup"><?=$arItem["PROPERTIES"]["TEXT"]["VALUE"]?></div>
                <span class="feedback-author"><?=$arItem["PROP_NAME"]?><? if($arItem["PROPERTIES"]["CITY"]["VALUE"]): ?>, <?=$arItem["PROPERTIES"]["CITY"]["VALUE"]?><? endif; ?>
                </span>
				<span class="feedback-date"><?=$arItem["DISPLAY_ACTIVE_FROM"]?></span>
            </div>
        <? endforeach; ?>
    </div>
</div>