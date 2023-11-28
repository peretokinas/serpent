<?php
  require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
  
  use Bitrix\Main\Localization\Loc;
  
  CModule::IncludeModule("iblock");

  if (trim($_POST["name"])!="" AND trim($_POST["phone"])!="") {
    $result['name'] = $_POST['name'];
    $result['phone'] = $_POST['phone'];
    $result['success'] = true;
  }
  else
  {
    $result['success'] = false;
  }
    
  $result_js=json_encode($result);
  echo $result_js;
?>