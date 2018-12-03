<?php


foreach($arResult["ITEMS"] as &$arItem)
{
	$arPropsRes = CIBlockElement::GetProperty($arItem["IBLOCK_ID"], $arItem["ID"]);

	while($row = $arPropsRes->Fetch())
	{
		$arItem[ "PROP_".$row["CODE"] ] = (is_array($row["VALUE"]) ? $row["VALUE"]["TEXT"] : $row["VALUE"]);
	}
}