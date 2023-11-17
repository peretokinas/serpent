<?php
  use Bitrix\Main\Localization\Loc;

  //Различные вспомогательные методы для каталог
  
  class swf_catalog_util {
    //Тример 1
    public static function trimer_1($arParams) {
      $arResult=[];
      
      foreach ($arParams AS $key=>$val) {
        $arResult[$key]=trim($val);
      }
      
      return $arResult;
    }
    
    //Валидатор на пустоту
    public static function valid_null($arParams) {
      $result=[
        "status"=>1,
        "error"=>[],
      ];
      $arOrder=$arParams["arOrder"];
      $arOb=$arParams["arOb"];
      
      //Валидируем на пустоту
      foreach ($arOrder AS $key=>$val) {
        if ($val=="") {
          if (in_array($key,$arOb)) {
            $result["status"]=0;
            $result["error"][$key]=Loc::getMessage("ERR_TXT_1");
          }
        }
      }
      
      return $result;
    }
  }
?>