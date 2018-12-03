
<div class="subscribe">
    <div class="subscribe-block">
        <h3>Подпишитесь!</h3>
        <p>и получайте информацию об акциях первыми!</p>
        <form action="<?=$arResult["FORM_ACTION"];?>" style="width:100%;">
	        <input type="email" name="sf_EMAIL" value="<?=$arResult["EMAIL"]?>" placeholder="Введите ваш e-mail">
	        <button type="submit" name="OK">Подписаться</button>
	    </form>
    </div>
</div>

<script>
    $(document).ready(function(){
        $("form.sform_footer").validate({
            rules:{ "sf_EMAIL": {email: true} }
        });
    })
</script>