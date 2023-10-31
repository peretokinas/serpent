<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
  session_start();
  
  $arDеsignerSett=[];
  foreach ($arResult["arEl"]["arProps"] AS $key=>$val) {
    $value="";
    if ($val["PROPERTY_TYPE"]=="S") {
      $value=$val["VALUE"];
    }
    if ($val["PROPERTY_TYPE"]=="F") {
      $value=CFile::GetPath($val["VALUE"]);
    }
    $arDеsignerSett[$key]=$value;
  }
  
  $_SESSION["arDеsignerSett"]=$arDеsignerSett;
?>