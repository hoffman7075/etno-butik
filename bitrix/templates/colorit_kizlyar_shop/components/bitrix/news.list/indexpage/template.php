<div class="col-md-4">
    <a class="b-block-header b-block-header_icon b-block-header_icon_articles" href="/info/articles/">
        <h2 class="b-block-header__text">Статьи</h2>
    </a>
    <? foreach($arResult["ITEMS"] as $arItem): ?>
    <a class="b-article" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
      <div class="b-article__image-wrapper">
        <img class="b-article__image img-responsive" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>" title="<?=$arItem["NAME"]?>">
      </div>
      <h3 class="b-article__title"><?=$arItem["NAME"]?></h3>
    </a>
    <? endforeach; ?>
</div>