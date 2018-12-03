<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="detail-block" itemscope itemtype="http://schema.org/Product">
					<!-- top block -->

					<h1 itemprop="name" style="display:none;"><?=$arResult['NAME']?></h1>

					<div class="top-block">
						<div class="left-img">
						<?
						$image_resize = CFile::ResizeImageGet(intval($arResult["PICTURE"]["ID"]), array('width'=>220, 'height'=>220), BX_RESIZE_IMAGE_PROPORTIONAL, true);
						?>
							<img src="<?=$image_resize["src"]?>" alt="<?=$arResult["NAME"]?>" itemprop="image">
							<div class="resize-link">
								<a href="<?=$arResult["PICTURE"]["SRC"]?>" class="fancybox">Увеличить изображение</a>
							</div>
							<div style="padding-top:10px;">

<?$APPLICATION->IncludeComponent(
	"bitrix:asd.share.buttons",
	"",
	Array(
		"ASD_ID" => $arResult["ID"],
		"ASD_TITLE" => $arResult["NAME"],
		"ASD_URL" => $APPLICATION->GetCurPage(),
		"ASD_PICTURE" => "http://".SITE_SERVER_NAME.$arResult["PICTURE"]["SRC"],
		"ASD_TEXT" => strip_tags($arResult["DESCRIPTION"]),
		"ASD_LINK_TITLE" => "Расшарить в #SERVICE#",
		"ASD_SITE_NAME" => "wikselen",
		"ASD_INCLUDE_SCRIPTS" => array("FB_LIKE", "VK_LIKE", "TWITTER"),
		"LIKE_TYPE" => "LIKE",
		"VK_API_ID" => "4187786",
		"VK_LIKE_VIEW" => "mini",
		"TW_DATA_VIA" => "wikselen",
		"SCRIPT_IN_HEAD" => "N"
	),
false
);?> 




</div>
						</div>
						<div class="right-info" itemprop="description">
							<?
							echo $arResult["DESCRIPTION"];
							?>
							
							
						</div>
					</div>
					<!-- end top block -->

					<!-- social block -->
					<div class="social-block" style="margin-top:2em;">
						<h2>Основные технические характеристики:</h2>
					</div>
					<!-- end social block -->

					<!-- table block -->
					<div class="table-block">
        <?if(count($arResult["ITEMS"]) > 0):
        /*echo "<pre>";
        print_r($arResult["ITEMS"][0]["DISPLAY_PROPERTIES"]);
        echo "</pre>";
        echo "<pre>";
        print_r($arResult["SHOW_PROPS"]);
        echo "</pre>";*/
        ?>
            

                                                <table cellpadding="0" cellspacing="0" border="0">
                                                        <tr>
                                                            <td class="column1">Арт. №</td>
                                                            <?$i=1;?>
                                 <?if ($arResult['SHOW_PLASTINA']):?>
                                 <td class="column2">Пластина</td>
								 	<?$i=2;?>
                                 <?endif;?>                        

                                                        <?foreach($arResult['srt'] as $key=>$sort):
                                                        $arProperty=$arResult["ZAG"][$key];
                                                        ?>
                                                        <?if(strpos($arProperty["CODE"], "S_")!==false && $arResult["SHOW_PROPS"][$arProperty["CODE"]]):?><?$i++;?>
                                                            <td class="column<?=$i?>"><?=$arProperty["NAME"]?></td>
                                                        <?endif;?>
                                                        <?endforeach; ?>   
                                                            <?$i++;?>
                                                            <td class="column<?=$i?>">Кол-во:</td>
                                                            <?$i++;?>
                                                            <td class="column<?=$i?>">Цена с НДС</td>
                                                            <?$i++;?>
                                                            <td class="column<?=$i?>"></td>
                                                        </tr>
    <?foreach($arResult["ITEMS"] as $arElement):?><?$j++;?>
    <?
    //if(!$arResult["SALE"] || $arElement["CATALOG_QUANTITY"]>0)
                 {
    
    //$arElement["CATALOG_QUANTITY"];
   // print_r($arElement["PRICES"]);

   
    $this->AddEditAction($arElement['ID'], $arElement['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arElement['ID'], $arElement['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCS_ELEMENT_DELETE_CONFIRM')));
    ?>
                                                        <tr<?if ($j/2==intval($j/2)):?> class="grey"<?endif;?> id="<?=$this->GetEditAreaId($arElement['ID']);?>">
                                                                <td class="column1"><span data-element-art="<?=$arElement["DISPLAY_PROPERTIES"]["art"]["VALUE"]?>" class="<?=($arElement["DISPLAY_PROPERTIES"]["ARTICUL"]["VALUE"]!=""?' vsg':"")?>">

                                                                <?/*<a href="<? echo $arElement['DETAIL_PAGE_URL']; ?>">*/?>
                                                                <?=$arElement["DISPLAY_PROPERTIES"]["art"]["VALUE"]?>
                                                                
                                                                </span></td>
 <?if ($arResult['SHOW_PLASTINA']):?>
<td class="column2">
<?
	if ((strlen($arElement['DISPLAY_PROPERTIES']['PLASTINA']['VALUE'])>0) && (strlen($arElement['DISPLAY_PROPERTIES']['PLASTINA']['DESCRIPTION'])>0)):?>
		<a href="<?=$arElement['DISPLAY_PROPERTIES']['PLASTINA']['VALUE']?>"><?=$arElement['DISPLAY_PROPERTIES']['PLASTINA']['DESCRIPTION']?></a>	
	<?endif;
?>

</td>
         <?endif;?>
                                                        <?foreach($arResult['srt'] as $key=>$sort):
                                                        
                                                        $arProperty=$arResult["ZAG"][$key];
                                                        ?>
                                                        <?if(strpos($arProperty["CODE"], "S_")!==false && $arResult["SHOW_PROPS"][$arProperty["CODE"]]):?><?$i++;?>
                                                                <td class="column<?=$i?>"><?=$arElement["DISPLAY_PROPERTIES"][$key]["VALUE"];?></td>
                                                        <?endif;?>
                                                        <?endforeach?>
                                                                <form action="<?=POST_FORM_ACTION_URI?>" method="post" enctype="multipart/form-data" id="form<?=$j?>">
                                                                <input type="hidden" name="<?echo $arParams["ACTION_VARIABLE"]?>" value="ADD2BASKET">
                                                                <input type="hidden" name="<?echo $arParams["PRODUCT_ID_VARIABLE"]?>" value="<?echo $arElement["ID"]?>">
                                                                <input type="hidden" name="<?echo $arParams["ACTION_VARIABLE"]."ADD2BASKET"?>" value="<?echo GetMessage("CATALOG_ADD")?>">
                                                                <?$i++;?>
                                                                <td class="column<?=$i?>">
                                                                <?
                                                                
                                                                ?>
                                                                <input type="text" name="<?echo $arParams["PRODUCT_QUANTITY_VARIABLE"]?>" value="1" />
                                                                
                                                                </td>
                                                                <?$i++;?>
                                                               
                                                               <td class="column<?=$i?>">
                                                                	
        
                                                                <?
                                                               if(!empty($arElement["DISPLAY_PROPERTIES"]["PRICESK"]["VALUE"]))
                                                               {
                                                               	?>
                                                               <div class="old_price"><?=CurrencyFormat($arElement["DISPLAY_PROPERTIES"]["PRICESK"]["VALUE"],"RUB")?></div>
                                                               	<?
                                                               }
                                                                if($arElement["PRICES"]["BASE"]["DISCOUNT_VALUE"]<$arElement["PRICES"]["BASE"]["VALUE"])
                                                                {
                                                                	$arElement["PRICES"]["BASE"]["PRINT_VALUE"]=$arElement["PRICES"]["BASE"]["PRINT_DISCOUNT_VALUE"];
                                                                }
                                                                
                                                                
                                                                
                                                                
                                                               echo  $arElement["PRICES"]["BASE"]["PRINT_VALUE"]?>
                                                               
                                                               <?if (isset($arElement['IS_SMALLEST_PRICE'])):?>
									<div itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer">
                                                               	    <meta itemprop="lowPrice" content="<?=$arElement["PRICES"]["BASE"]["PRINT_VALUE"]?>">
																	<meta itemprop="priceCurrency" content="RUB">
																	<link itemprop="availability" href="http://schema.org/InStock">
                                                               </div>
                                                               <?endif;?>



																<?//echo $flag;?>
																<?if($flag!=1):$tmp_price=$arElement["PRICES"]["BASE"]["PRINT_VALUE"];$flag=1;
																elseif($tmp_price>$arElement["PRICES"]["BASE"]["PRINT_VALUE"]):$tmp_price=$arElement["PRICES"]["BASE"]["PRINT_VALUE"];endif;?>
																
																


																</td>
                                                                <?$i++;?>
                                                                <td class="column<?=$i?>">
                                                                
                                                                    <?if($arElement["CAN_BUY"]):?>
                                                                    <a href="<?echo $arElement["ADD_URL"]?>" onclick="$('form#form<?=$j?>').submit(); return false;"  onmousedown="_gaq.push(['_trackEvent', 'zakaz', 'button_buy']);" title="Купить" class="inbasket"></a>
                                                                    <?endif;?>
                                                                    
                                                                    
                                                                    
                                                                    <!--a href="<?echo $arElement["ADD_URL"]?>" rel="nofollow"><?echo GetMessage("CATALOG_ADD")?></a-->
                                                                </td>
                                                                </form>
                                                        </tr>
    <?
                 }
    endforeach;?>                                                 
                                                </table>
                                                
                    <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
                    <br />
                        <p><?=$arResult["NAV_STRING"]?></p>
                    <?endif?>
                                                
                     <?endif;?>
                                        </div>
                                        <!-- end table block -->
					<!-- end table block -->
				</div>
