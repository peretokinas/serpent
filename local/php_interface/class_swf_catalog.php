<?php
  use Bitrix\Sale;
  
  Bitrix\Main\Loader::includeModule("sale");
  Bitrix\Main\Loader::includeModule("catalog");

  class swf_catalog {
    //Получение корзины текущего пользователя
    public static function get_cart(){
      $basket=Sale\Basket::loadItemsForFUser(Sale\Fuser::getId(), Bitrix\Main\Context::getCurrent()->getSite());
      
      $basketItems=$basket->getBasketItems();
      
      $arResult=[];
      foreach ($basketItems as $item) {
        $arResult[$item->getProductId()]=[
          "ID"=>$item->getId(),
          "PROD_ID"=>$item->getProductId(),
          "PROD_QUA"=>$item->getQuantity(),
          "PROD_PRICE"=>$item->getPrice(),
          "PROD_SUM"=>$item->getFinalPrice(),
        ];
      }
      
      return $arResult;
    }
    
    //Фото авто-ресайзер
    public static function resize_photo(){
      $catalog=$_SERVER["DOCUMENT_ROOT"]."/img/catalog/";
      $catalog_resize=$_SERVER["DOCUMENT_ROOT"]."/img/catalog_resize/";
      
      $scan_dir=scandir($catalog);
      
      for ($i=0;$i<count($scan_dir);$i++) {
        if ($scan_dir[$i]!="." AND $scan_dir[$i]!="..") {
          $file_old=$catalog.$scan_dir[$i];
          $file_new=$catalog_resize.$scan_dir[$i];
          
          CFile::ResizeImageFile(
            $file_old, 
            $file_new, 
            array('width'=>500,'height'=>700), 
            BX_RESIZE_IMAGE_EXACT
          );
        }
      }
    }
    
    //Получение массива приложенных фоток
    public static function get_photo_1($art) {
      $catalog=$_SERVER["DOCUMENT_ROOT"]."/img/catalog_resize/";
      $catalog_ext="https://".$_SERVER["SERVER_NAME"]."/img/catalog_resize/";
      $scan_dir=scandir($catalog);
      $arResult=[];
      for ($i=0;$i<count($scan_dir);$i++) {
        if ($scan_dir[$i]!="." AND $scan_dir[$i]!="..") {
          $tmp_ex=explode("_",$scan_dir[$i]);
          $postfix_num=$tmp_ex[count($tmp_ex)-1];
          
          $str_sravn=str_replace("_".$postfix_num,"",$scan_dir[$i]);
          
          if ($str_sravn==$art) {
            $rand_hash=swf_util::rand_hash_1();
            $arResult[]=$catalog_ext.$scan_dir[$i]."?".$rand_hash;
          }
        }
      }
      
      return $arResult;
    }
  }
?>