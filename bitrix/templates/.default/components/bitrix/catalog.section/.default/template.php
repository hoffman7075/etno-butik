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
/*?>
<h1><?=$arResult["NAME"]?></h1>
<?*/?>
<div class="catalog">
						<div class="sort-block clear" style="width: 100%; clear: both; float: left;">
							<div class="sort-title">Сортировать по: </div>
							<div id="mse2_sort" role="group">
							<a type="button" style="display: inline-block; position: relative; z-index: 500;" data-sort="ms|price" data-dir="asc" data-default="asc" class="sort sort-btn sort-btn-price"> цене</a>
							</div>
							<div id="mse2_sort" role="group" class="sort-btn-reset d-none">
							<a type="button" style="margin-left: 10px; width: 30px; display: inline-block; position: relative; z-index: 500;" data-sort="" data-dir="" class="sort sort-btn"> x</a>
							</div>

	                        <!--<div class="btn-group" id="mse2_sort" role="group">
	                        <a type="button" style="display: inline-block; position: relative; z-index: 500;" data-sort="ms|price" data-dir="asc" data-default="asc" class="sort sort-btn"> цене</a>
	                        <a type="button" data-sort="resource|pagetitle" data-dir="asc" data-default="asc" class="sort sort-btn" > названию</a>
	                        </div>-->
                       	</div>


<div id="pdopage" style="float: left">

							<div class="rows">
								<div itemscope="" itemtype="http://schema.org/ItemList">
									<link itemprop="url" href="https://www.etno-butik.com/katalog-izdelij/ukrashenija/">
									<meta itemprop="numberOfItems" content="260">
									<div class="rows" id="mse2_results" style="display: block; float: left;">





	<?foreach($arResult["ITEMS"] as $arElement):?>
	<?
	$this->AddEditAction($arElement['ID'], $arElement['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arElement['ID'], $arElement['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCS_ELEMENT_DELETE_CONFIRM')));

?>

<div class="box ms2_product n3-elems " itemprop="itemListElement" itemscope="" itemtype="http://schema.org/Product">


	<div class="img">

<a href="<?=$arElement["DETAIL_PAGE_URL"]?>">
<img src="<?=$arElement["PREVIEW_PICTURE"]["SRC"]?>" width="100%" title="<?=$arElement["NAME"]?>" alt="<?=$arElement["NAME"]?>"></a>
	</div>
	<form method="post" class="ms2_form ms2_form_<?=$arElement['ID']?>">
		<p class="name">
<a href="<?=$arElement["DETAIL_PAGE_URL"]?>"><?=$arElement["NAME"]?></a>
			 <span>Арт.: <?=$arElement["PROPERTIES"]["ARTNUMBER"]["VALUE"]?></span>
		</p>

		<p class="price ">
<?foreach($arResult["PRICES"] as $code=>$arPrice):?>

			<?if($arPrice = $arElement["PRICES"][$code]):?>
				<?if($arPrice["DISCOUNT_VALUE"] < $arPrice["VALUE"]):?>
					<s><?=$arPrice["PRINT_VALUE"]?></s><br /><span class="catalog-price"><?=$arPrice["PRINT_DISCOUNT_VALUE"]?></span>
				<?else:?>
				<?=$arPrice["PRINT_VALUE"]?>
				<?endif?>
			<?else:?>

			<?endif;?>

		<?endforeach;?>
</p>
		<div class="cart">



<a href="#" class="to-cart" onclick="$('.ms2_form_<?=$arElement['ID']?>').submit(); return false;"><span onclick="yaCounter37519630.reachGoal('BUSKET'); return true;">купить</span></a>
			<input type="hidden" name="basket_action" value="add">
			<button class="btn btn-default" type="submit" name="ms2_action" value="add" style="display: none;"></button>
			<span class="divider">&nbsp;</span>
			<div class="msfavorites" style="float: left;" data-id="<?=$arElement['ID']?>" data-added="" data-list="like-ru" data-propkey="7ab1af95039ef98d2099cd5e3226fd1179711817">
	<a href="#" class="like no-active msfavorites-add msfavorites-link" data-text=""><span class="window">В список желаний</span></a>
	<a href="#" class="like active msfavorites-remove msfavorites-link" data-text=""><span class="window">Убрать из желаний</span></a>
</div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
		<input type="hidden" name="id" value="<?=$arElement['ID']?>">
		<input type="hidden" name="count" value="1">
		<input type="hidden" name="options" value="[]">
	</form>
</div>



	<?endforeach;?>
</div></div></div></div></div>
