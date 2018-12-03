<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$dbUserProps = CSaleOrderUserProps::GetList(
				array(),
				array(
					"USER_ID" => (int)($USER->GetID())
				)
			);
if ($arUserProps = $dbUserProps->Fetch())
{
	LocalRedirect('/personal/profiles/'.$arUserProps["ID"]);
	//print_r($arUserProps);
}
?>