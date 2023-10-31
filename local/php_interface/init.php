<?php
  use Bitrix\Main\Localization\Loc;
  //Грузим глобальные переменные
  include_once($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/global_var.php");
  //Грузим общий языковой файл
  Loc::loadMessages(__FILE__);
?>