<div class="col-md-4">
    <a class="b-block-header b-block-header_icon b-block-header_icon_catalog" href="/catalog/">
        <h2 class="b-block-header__text">Каталог</h2>
    </a>
    <ul class="b-catalog-menu">
        <? foreach($arResult["SECTIONS"] as $arSection): ?>
            <? if($arSection["DEPTH_LEVEL"]!=1) continue; ?>
            <li class="b-catalog-list__item b-catalog-item b-catalog-item_<?=$arSection["CODE"]?>">
                <a class="b-catalog-item__link" href="<?=$arSection["SECTION_PAGE_URL"]?>">
                    <b class="b-catalog-item__name"><?=$arSection["NAME"]?></b>
                    <span class="b-catalog-item__count"><?=$arSection["ELEMENT_CNT"]?></span>
                </a>
            </li>
        <? endforeach; ?>
    </ul>
</div>