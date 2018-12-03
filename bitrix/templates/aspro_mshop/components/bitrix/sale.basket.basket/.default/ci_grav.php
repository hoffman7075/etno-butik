<?php
if(!defined("B_PROLOG_INCLUDED")) exit;
function colorit_etch_count($arItems)
{
	$arGravs = array();

	foreach($arItems as &$arItem)
	{
		if($arItem["PRODUCT_ID"] == 910)
		{
			foreach($arItem["PROPS"] as $arProp)
			{
				if($arProp["CODE"] != "CI_ETCH_TO") continue;

				$parentName = $arProp["VALUE"];
				break;
			}

			$parentID = 0;
			foreach($arItems as $arItemTemp)
			{
				if( $arItemTemp["NAME"] != $parentName ) continue;

				$parentID = $arItemTemp["ID"];
			}

			$arItem["GR_PARENT_ID"] = $parentID;

			$arGravs[] = $arItem;
			continue;
		}

		$arItem["MAX_ETCH_COUNT"] = $arItem["QUANTITY"];
	}
	unset($arItem);

	foreach($arGravs as $arGrav)
	{
		$arItems[ $arGrav["GR_PARENT_ID"] ]["MAX_ETCH_COUNT"] -= $arGrav["QUANTITY"];
	}

	return $arItems;
}
?>