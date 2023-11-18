<?php
  use Bitrix\Sale;
  use Bitrix\Main\Localization\Loc;
  
  Bitrix\Main\Loader::includeModule("sale");
  Bitrix\Main\Loader::includeModule("catalog");
  
  //Методы каталога

  class swf_catalog {
    //Создание заказа
    public static function order_create($arParams) {
      global $USER;
      
      $arSettings=$arParams["arSettings"];
      $arOrder=$arParams["arOrder"];
      
      $siteId="s1";
      if ($USER->IsAuthorized()) {
        $fuser=$USER->GetID();
      } else {
        $fuser=0;
      }
      $currencyCode=$arSettings["SHOP"]["BASE_CURR_CODE"];
      
      //Обязательность заполнения
      $arOb=[
        "f_name",
        "f_fam",
        "f_phone",
        "f_email",
      ];
      
      //Тример 1
      $arOrder=swf_catalog_util::trimer_1($arOrder);
      
      //Валидируем на обязательность заполнения
      unset($tmpArParam);
      $tmpArParam=[
        "arOrder"=>$arOrder,
        "arOb"=>$arOb,
      ];
      $arValid=swf_catalog_util::valid_null($tmpArParam);
      
      if ($fuser!=0) {
        if ($arValid["status"]==1) {
          //Создаем заказ
          $order=\Bitrix\Sale\Order::create($siteId,$fuser,$currencyCode);
          
          //Получаем корзину
          $basket=Sale\Basket::loadItemsForFUser(Sale\Fuser::getId(), Bitrix\Main\Context::getCurrent()->getSite());
          
          //Назначаем корзину заказу
          $order->setBasket($basket);
          //Устанавливаем тип плательщика
          $order->setField("PERSON_TYPE_ID",1);
          //Устанавливаем комментарий
          $order->setField("USER_DESCRIPTION",$arOrder["f_comment"]);
          //Устанавливаем службу доставки
            //Получаем коллекцию отгрузки из заказа
            $shipmentCollection=$order->getShipmentCollection();
            //Создаем итем
            $shipment=$shipmentCollection->createItem();
            //Получаем обьект службы доставки по id
            $service=\Bitrix\Sale\Delivery\Services\Manager::getById($arOrder["f_deliv"]);
            //Заливаем в созданный итем
            $deliveryData = [
              'DELIVERY_ID' => $service['ID'],
              'DELIVERY_NAME' => $service['NAME'],
              'ALLOW_DELIVERY' => 'Y',
              'PRICE_DELIVERY' => $service["CONFIG"]["MAIN"]['PRICE'],
              'CUSTOM_PRICE_DELIVERY' => 'Y'
            ];
            $shipment->setFields($deliveryData);
            //Добавляем в отгрузку корзину
            $shipmentItemCollection=$shipment->getShipmentItemCollection();
            foreach ($basket as $basketItem1) {
              $item1=$shipmentItemCollection->createItem($basketItem1);
              $item1->setQuantity($basketItem1->getQuantity());
            }
          //Устанавливаем платежную систему
          $paymentCollection=$order->getPaymentCollection();
          $payment=$paymentCollection->createItem(
            \Bitrix\Sale\PaySystem\Manager::getObjectById($arOrder["f_pay"])
          );
          $payment->setField("SUM", $order->getPrice());
          $payment->setField("CURRENCY", $order->getCurrency());
          //Устанавливаем свойства заказа
          $propertyCollection = $order->getPropertyCollection();
            //ФИО
            $phoneProp=$propertyCollection->getItemByOrderPropertyId(1);
            $phoneProp->setValue($arOrder["f_fam"]." ".$arOrder["f_nam"]);
            //Email
            $phoneProp=$propertyCollection->getItemByOrderPropertyId(2);
            $phoneProp->setValue($arOrder["f_email"]);
            //Телефон
            $phoneProp=$propertyCollection->getItemByOrderPropertyId(3);
            $phoneProp->setValue($arOrder["f_phone"]);
            
          //Сохраняем заказ
          $order->doFinalAction(true);
          $result_save=$order->save();
          
          if ($result_save->isSuccess()) {
            $result=[
              "status"=>1,
              "text"=>Loc::getMessage("SHOP_CART_ORDER_CREATE_SUCCESS"),
            ];
          } else {
            $result=[
              "status"=>1,
              "text"=>Loc::getMessage("ERR_TXT_2"),
            ];
          }
        } else {
          //Ошибка валидации
          $result=$arValid;
        }
      } else {
        //Пользователь не авторизован
        $result=[
          "status"=>2,
          "text"=>Loc::getMessage("ERR_TXT_3"),
        ];
      }
      
      $result=json_encode($result);
      
      return $result;
    }
    
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
    public static function resize_photo($arParams){
      $catalog=$_SERVER["DOCUMENT_ROOT"]."/img/catalog/";
      $catalog_resize=$_SERVER["DOCUMENT_ROOT"]."/img/catalog_resize/";
      
      $scan_dir=scandir($catalog);
      
      //Дернем id и артиклы всех товаров и ТП
      $arProd=[];
      //Товары
      $arFilter=[
        'IBLOCK_ID'=>$arParams["IB_CAT"],
        'ACTIVE'=>'Y',
      ];
      
      $res=CIBlockElement::GetList(["SORT"=>"ASC"], $arFilter);
      
      while ($ob=$res->GetNextElement()) {
        $arFields=$ob->GetFields();
        $arProps=$ob->GetProperties();
        
        $arProd[$arProps["CML2_ARTICLE"]["VALUE"]][]=$arFields["ID"];
      }
      
      //ТП
      $arFilter=[
        'IBLOCK_ID'=>$arParams["IB_SKU"],
        'ACTIVE'=>'Y',
      ];
      
      $res=CIBlockElement::GetList(["SORT"=>"ASC"], $arFilter);
      
      while ($ob=$res->GetNextElement()) {
        $arFields=$ob->GetFields();
        $arProps=$ob->GetProperties();
        
        $arProd[$arProps["CML2_ARTICLE"]["VALUE"]][]=$arFields["ID"];
      }
      
      $arAddDetail=[];
      //Заресайзим фотки
      for ($i=0;$i<count($scan_dir);$i++) {
        if ($scan_dir[$i]!="." AND $scan_dir[$i]!="..") {
          $file_old=$catalog.$scan_dir[$i];
          $file_new=$catalog_resize.$scan_dir[$i];
          
          //Удаляем старую
          unlink($file_new);
          
          //Ресайзим
          CFile::ResizeImageFile(
            $file_old, 
            $file_new, 
            array('width'=>500,'height'=>700), 
            BX_RESIZE_IMAGE_EXACT
          );
          
          //Сохраняем фотку как детальную для соответствующих товаров и предложений
          $tmp_ex=explode("_",$scan_dir[$i]);
          $prod_art="";
          for ($j=0;$j<count($tmp_ex)-1;$j++) {
            if ($prod_art!="") {
              $prod_art.="_";
            }
            $prod_art.=$tmp_ex[$j];
          }
          $prod_id=$arProd[$prod_art];
          
          if (is_array($prod_id)) {
            if (count($prod_id)>0) {
              foreach ($prod_id AS $key=>$val) {
                if (!in_array($val,$arAddDetail)) {
                  $el=new CIBlockElement;
                  $arFields=[
                    "PREVIEW_PICTURE"=>CFile::MakeFileArray($file_new),
                    "DETAIL_PICTURE"=>CFile::MakeFileArray($file_new),
                  ];
                  $res=$el->Update($val, $arFields);
                  $arAddDetail[]=$val;
                }
              }
            }
          }
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

    public static function get_names_ib($id)
    {
      $filter=['IBLOCK_ID'=>$id, 'ACTIVE'=>'Y'];

      $db_list=CIBlockSection::GetList([], $filter, false, ["UF_*"]);
      while ($arSect=$db_list->GetNext()){

        $arTree[$arSect["CODE"]]=$arSect["NAME"];
      }

      return $arTree;
    }
  }
?>