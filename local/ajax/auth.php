<?php
  require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
  
  use Bitrix\Main\Localization\Loc;
  
  //Авторизация
  
  //Получение запроса на авторизацию / регистрацию
  if ($_POST["type"]=="send_phone") {
    $tmpArParam=$_POST;
    $tmpArParam["arSettings"]=$arSettings;
    $result=swf_auth::auth_enter_regiter($tmpArParam);
    
    print_r($result);
  }
  
  //Отправка кода подтверждения
  if ($_POST["type"]=="send_code") {
    $tmpArParam=$_POST;
    $tmpArParam["arSettings"]=$arSettings;
    $result=swf_auth::send_code_auth_user($tmpArParam);
    
    print_r($result);
  } 
?>