

<div class="feedback-form-block">
	<form action="" method="post" class="feedback-form">
	  <? if($arResult["ALLRIGHT"]): ?>
	    <?=$arParams["MSG_SEND_OK"]?>
	  <? else: ?>
		  <? if($arParams["BIG_TEXT"]): ?>
		  <h2><?=$arParams["BIG_TEXT"]?></h2>
		  <? endif ?>

		  <? if($arParams["SMALL_TEXT"]): ?>
			  <div class="form-sub-header"><?=$arParams["SMALL_TEXT"]?></div>
		  <? endif ?>

		  <input class="form-input-name" type="text" value="<?=$arResult["FIELDS"]["NAME"]["VALUE"]?>" name="<?=$arResult["FIELDS"]["NAME"]["NAME"]?>" id="<?=$arResult["FIELDS"]["NAME"]["HTML_ID"]?>" placeholder="<?=$arResult["FIELDS"]["NAME"]["LABEL"]?>">

		  <div class="city-number">
			<input class="form-input-city" type="text" value="<?=$arResult["FIELDS"]["CITY"]["VALUE"]?>" name="<?=$arResult["FIELDS"]["CITY"]["NAME"]?>" id="<?=$arResult["FIELDS"]["CITY"]["HTML_ID"]?>" placeholder="<?=$arResult["FIELDS"]["CITY"]["LABEL"]?>">
			<input class="form-input-number" type="text" value="<?=$arResult["FIELDS"]["ORDER"]["VALUE"]?>" name="<?=$arResult["FIELDS"]["ORDER"]["NAME"]?>" id="<?=$arResult["FIELDS"]["ORDER"]["HTML_ID"]?>" placeholder="<?=$arResult["FIELDS"]["ORDER"]["LABEL"]?>">
		  </div>
		  <textarea class="form-textarea-feed" name="<?=$arResult["FIELDS"]["TEXT"]["NAME"]?>" id="<?=$arResult["FIELDS"]["TEXT"]["HTML_ID"]?>" placeholder="<?=$arResult["FIELDS"]["TEXT"]["LABEL"]?>"><?=$arResult["FIELDS"]["TEXT"]["VALUE"]?></textarea>
		  <div class="submit-block">
		  	<? if($arParams["USE_CAPTCHA"] == "Y"): ?>
				<div class="captcha">
					<input type="hidden" name="captcha_sid" value="<?=$arResult["CAPTCHA_SID"];?>" />
					<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA_SID"];?>" alt="CAPTCHA" /> <Br>
					<input type="text" name="captcha">
				</div>
			<? endif ?>
			<input type="submit" value="<?=$arParams["MSG_SEND"]?>" name="<?=$arResult["FORM_NAME"]?>_send" style='cursor:pointer;'>
		  </div>
		  <div>
		  	<? if($arResult["ERROR_MSG"]): ?>
		  		<? foreach($arResult["ERROR_MSG"] as $strErrorMsg): ?>
		  			<span><?=$strErrorMsg?></span> <br>
			  	<? endforeach ?>
			<? endif ?>
		  </div>

		  <input type="hidden" name="token" value="<?=$arResult["FORM_TOKEN"]?>">
	  <? endif ?>
	</form>
</div>