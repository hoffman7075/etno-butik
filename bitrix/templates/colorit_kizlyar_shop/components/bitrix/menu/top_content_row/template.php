<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<? $this->setFrameMode( true ); ?>
<?if( !empty( $arResult ) ){?>


<div class="right">
				<ul>

		<?foreach( $arResult as $key => $arItem ){?>
			<li <?if( $arItem["SELECTED"] ):?> class="current"<?endif?> >
				<a  href="http://dev2489.golden-sites.ru<?=$arItem["LINK"]?>">
					<?=$arItem["TEXT"]?>

				</a>
			</li>
		<?}?>
	</ul>
				<div class="registration">
					<a href="/lichnyij-kabinet/">Личный кабинет</a>
				</div>
			</div>
<?}?>