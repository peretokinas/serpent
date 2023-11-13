<?php
  class swf_util {
    //Генерация рандомного хэша 1
    public static function rand_hash_1() {
      $rand1=rand(0,9999);
      $rand2=rand(10000,99999);
      $randPostfix=rand($rand1,$rand2);
      $randPostfix.=date("dmYHis");
      $randPostfix=md5($randPostfix);
      
      return $randPostfix;
    }
  }
?>