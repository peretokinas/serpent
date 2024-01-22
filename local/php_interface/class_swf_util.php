<?php
  class swf_util {
    //Определение русского языка
    public static function isRus($text) {
      return preg_match('/[А-Яа-яЁё]/u', $text);
    }
    //Перевод в транслит
    public static function translit($value) {
      $converter = array(
        'кс' => 'x',   'а' => 'a',    'б' => 'b',    'в' => 'v',    'г' => 'g',    'д' => 'd',
        'е' => 'e',    'ё' => 'e',    'ж' => 'zh',   'з' => 'z',    'и' => 'i',
        'й' => 'y',    'к' => 'k',    'л' => 'l',    'м' => 'm',    'н' => 'n',
        'о' => 'o',    'п' => 'p',    'р' => 'r',    'с' => 's',    'т' => 't',
        'у' => 'u',    'ф' => 'f',    'х' => 'h',    'ц' => 'c',    'ч' => 'ch',
        'ш' => 'sh',   'щ' => 'sch',  'ь' => '',     'ы' => 'y',    'ъ' => '',
        'э' => 'e',    'ю' => 'yu',   'я' => 'ya',
     
        'КС' => 'x',   'А' => 'A',    'Б' => 'B',    'В' => 'V',    'Г' => 'G',    'Д' => 'D',
        'Е' => 'E',    'Ё' => 'E',    'Ж' => 'Zh',   'З' => 'Z',    'И' => 'I',
        'Й' => 'Y',    'К' => 'K',    'Л' => 'L',    'М' => 'M',    'Н' => 'N',
        'О' => 'O',    'П' => 'P',    'Р' => 'R',    'С' => 'S',    'Т' => 'T',
        'У' => 'U',    'Ф' => 'F',    'Х' => 'H',    'Ц' => 'C',    'Ч' => 'Ch',
        'Ш' => 'Sh',   'Щ' => 'Sch',  'Ь' => '',     'Ы' => 'Y',    'Ъ' => '',
        'Э' => 'E',    'Ю' => 'Yu',   'Я' => 'Ya',
      );
     
      $value = strtr($value, $converter);
      return $value;
    }
    
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
    //Определение браузера пользователя
    public static function get_brow(){
      $user_agent=$_SERVER["HTTP_USER_AGENT"];
      if (strpos($user_agent, "Firefox")!==false) $browser = "Firefox";
      elseif (strpos($user_agent, "Opera")!==false) $browser = "Opera";
      elseif (strpos($user_agent, "Chrome")!==false) $browser = "Chrome";
      elseif (strpos($user_agent, "MSIE")!==false) $browser = "Internet Explorer";
      elseif (strpos($user_agent, "Safari")!==false) $browser = "Safari";
      else $browser="Неизвестный";
      
      return $browser;
    }
  }
?>