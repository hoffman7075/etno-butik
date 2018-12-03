<?
AddEventHandler("sale", "OnOrderNewSendEmail", "bxModifySaleMails");


//изменяем почтовое сообщение о новом заказе для администратора
function bxModifySaleMails($orderID, &$eventName, &$arFields)
{
  $arOrder = CSaleOrder::GetByID($orderID);
  
  //-- получаем телефоны и адрес
  $order_props = CSaleOrderPropsValue::GetOrderProps($orderID);
  $phone="";
  $fio="";
  $email=""; 
  $address = "";
  while ($arProps = $order_props->Fetch())
  {
    if ($arProps["CODE"] == "PHONE")
    {
       $phone = htmlspecialchars($arProps["VALUE"]);
    }
    if ($arProps["CODE"] == "FIO")
    {
       $fio = $arProps["VALUE"];
    }
    if ($arProps["CODE"] == "EMAIL")
    {
       $email = htmlspecialchars($arProps["VALUE"]);
    }
   

    if ($arProps["CODE"] == "ADDRESS")
    {
      $address = $arProps["VALUE"];
    }
  }

 

  //-- получаем название службы доставки
  $arDeliv = CSaleDelivery::GetByID($arOrder["DELIVERY_ID"]);
  $delivery_name = "";
  if ($arDeliv)
  {
    $delivery_name = $arDeliv["NAME"];
  }

  //-- получаем название платежной системы   
  $arPaySystem = CSalePaySystem::GetByID($arOrder["PAY_SYSTEM_ID"]);
  $pay_system_name = "";
  if ($arPaySystem)
  {
    $pay_system_name = $arPaySystem["NAME"];
  }



  //-- добавляем новые поля в массив результатов
  $arFields["ORDER_DESCRIPTION"] = $arOrder["USER_DESCRIPTION"]; 
  $arFields["FIO"] =  $fio;
  $arFields["PHONE"] =  $phone;
  $arFields["EMAIL"] =  $email;
  $arFields["DELIVERY_NAME"] =  $delivery_name;
  $arFields["PAY_SYSTEM_NAME"] =  $pay_system_name;
  $arFields["DELIVERY_PAY"] =  CurrencyFormat($arOrder["PRICE_DELIVERY"], "RUB");
  $arFields["ADDRESS"] = $address;   
}


?>