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
    //Получение форматированного числа (цена) вид 1
    public static function get_num_form_1($num){
      return number_format($num,1,'.','');
    }
    //Получение форматированного числа (цена) вид 1
    public static function get_num_form_2($num){
      return number_format($num,0,'.',' ');
    }
    //Склонение числительных
    public static function num_word($value, $words, $show = true) {
      $num = $value % 100;
      if ($num > 19) { 
        $num = $num % 10; 
      }
      
      $out = ($show) ?  $value . ' ' : '';
      switch ($num) {
        case 1:  $out .= $words[0]; break;
        case 2: 
        case 3: 
        case 4:  $out .= $words[1]; break;
        default: $out .= $words[2]; break;
      }
      
      return $out;
    }
  }
?>