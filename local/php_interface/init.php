<?php
  use Bitrix\Main\Localization\Loc;
  //Грузим плагин вычленения корня Русского слова 
  include_once($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/plugins/LinguaStemRu/LinguaStemRu.php");
  
  //Грузим глобальные переменные
  include_once($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/global_var.php");
  //Грузим утилиты
  include_once($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/class_swf_util.php");
  //Грузим методы каталога
  include_once($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/class_swf_catalog.php");
  //Грузим методы доп утилиты каталога
  include_once($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/class_swf_catalog_util.php");
  //Грузим методы авторизации
  include_once($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/class_swf_auth.php");
  //Грузим общий языковой файл
  Loc::loadMessages(__FILE__);
?>