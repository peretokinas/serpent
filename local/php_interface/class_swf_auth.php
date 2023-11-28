<?php
  use Bitrix\Sale;
  use Bitrix\Main\Localization\Loc;
  
  Bitrix\Main\Loader::includeModule("sale");
  Bitrix\Main\Loader::includeModule("catalog");
  
  //Методы авторизации

  class swf_auth {
    //Вход / Регистрация
    public static function auth_enter_regiter($arParam) {
      session_start();
      
      //Проверяем телефон на корректность
      $phone=$arParam["f_phone"];
      $phone=trim($phone);
      $phone=str_replace(" ","",$phone);
      $phone=str_replace("(","",$phone);
      $phone=str_replace(")","",$phone);
      $phone=str_replace("-","",$phone);
      
      $phone_num=str_replace("+","",$phone);
      
      if (strlen($phone)==12 AND is_numeric($phone_num)) {
        //Проверяем наличие пользователя
        $filter=[
          "PERSONAL_PHONE"=>$phone,
        ];
        $rsUsers=CUser::GetList(($by="ID"), ($order="asc"), $filter);
        $UserFind=[];
        while($arUser = $rsUsers->Fetch()){
          $UserFind[]=$arUser;
        };
        
        //Вход
        if ($arParam["f_type_event"]=="enter") {
          if (count($UserFind)>0) {
            //Пользователь найден - авторезируем через tmp код
            $result=[
              "status"=>1,
            ];
          } else {
            //Пользователя нету - выведем ошибку 
            $result=[
              "status"=>0,
              "error"=>Loc::getMessage("ERR_TXT_5"),
            ];
          }
        }
        
        //Регистрация
        if ($arParam["f_type_event"]=="register") {
          if (count($UserFind)>0) {
            //Пользователь найден - выдаем ошибку что уже зарегистрирован
            $result=[
              "status"=>0,
              "error"=>Loc::getMessage("ERR_TXT_6"),
            ];
          } else {
            //Пользователя нету - гуд, можно регистрировать 
            $result=[
              "status"=>1,
            ];
          }
        }
        
        //Если всё корректно для проверки - иницируем проверку телефона
        if ($result["status"]==1) {
          $_SESSION["SWF_AUTH_PHONE"]=$phone_num;
          $_SESSION["SWF_AUTH_TYPE"]=$arParam["f_type_event"];
          $result_send=self::send_code_auth($arParam);
          $result_send_ar=json_decode($result_send,true);
          if ($result_send_ar["result"]=="ok") {
            $_SESSION["SWF_AUTH_CODE"]=$result_send_ar["code"];
            $result=[
              "status"=>1,
            ];
          } else {
            $result=[
              "status"=>0,
              "error"=>Loc::getMessage("ERR_TXT_7"),
            ];
          }
        }
        
      } else {
        //Некорректная валидация
        $result=[
          "status"=>0,
          "error"=>Loc::getMessage("ERR_TXT_4"),
        ];
      }
      
      $result=json_encode($result);
      
      return $result;
    }
    
    //Отправка кода пользователем
    public static function send_code_auth_user($arParam) {
      session_start();
      global $USER;
      
      //Проверяем входящий код
      $code=$arParam["f_code_1"].$arParam["f_code_2"].$arParam["f_code_3"].$arParam["f_code_4"];
      
      if ($code==$_SESSION["SWF_AUTH_CODE"]) {
        //Проверяем тип
        $phone="+".$_SESSION["SWF_AUTH_PHONE"];
        
        if ($_SESSION["SWF_AUTH_TYPE"]=="enter") {
          //Дергаем пользователя
          $filter=[
            "PERSONAL_PHONE"=>$phone,
          ];
          $rsUsers=CUser::GetList(($by="ID"), ($order="asc"), $filter);
          $UserFind=[];
          while($arUser = $rsUsers->Fetch()){
            $UserFind[]=$arUser;
          };
          
          //Авторизируем
          $res_auth=$USER->Authorize($UserFind[0]["ID"]);
        } else {
          //Регистрируем
          $login=$phone;
          $pass="pass_".swf_util::rand_hash_1();
          $user=new CUser;
          $arFields=[
            "EMAIL"             => "",
            "LOGIN"             => $login,
            "ACTIVE"            => "Y",
            "GROUP_ID"          => array(6),
            "PASSWORD"          => $pass,
            "CONFIRM_PASSWORD"  => $pass,
            "NAME"              => "",
            "LAST_NAME"         => "",
            "SECOND_NAME"       => "",
            "PERSONAL_PHONE"    => $phone,
          ];

          $fuser=$user->Add($arFields);
          
          //Авторизируем
          $res_auth=$USER->Authorize($fuser);
        }
        
        if ($res_auth) {
          $result=[
            "status"=>1,
            "text"=>Loc::getMessage("SHOP_AUTH_GOOD_AUTH"),
          ];
        } else {
          $result=[
            "status"=>0,
            "error"=>Loc::getMessage("ERR_TXT_9"),
          ];
        }
      } else {
        $result=[
          "status"=>0,
          "error"=>Loc::getMessage("ERR_TXT_8"),
        ];
      }
      
      $result=json_encode($result);
      return $result;
    }
    
    //Отправка кода пользователю
    public static function send_code_auth($arParam) {
      session_start();
      
      $url="https://vp.voicepassword.ru/api/voice-password/send/";
      $apiKey=$arParam["arSettings"]["SHOP"]["API_KEY_PHONE_SENDER"];
      $data=[
        "security"=>[
          "apiKey"=>$apiKey,
        ],
        "number"=>$_SESSION["SWF_AUTH_PHONE"],
        "capacity"=>"4",
      ];
      $data_json=json_encode($data);
      $ch=curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
          "Content-Type: application/json",
          "Authorization: {$apiKey}",
        ]);
        $outData=curl_exec($ch);
      curl_close($ch);
      
      return $outData;
    }
  }
?>