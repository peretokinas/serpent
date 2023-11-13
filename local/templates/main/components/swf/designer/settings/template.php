<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
  session_start();

  $arDеsignerSett=[];
  foreach ($arResult["arEl"]["arProps"] AS $key=>$val) {
    $value="";
    if ($val["PROPERTY_TYPE"]=="S") {
      $value=$val["VALUE"];
    }
    if ($val["PROPERTY_TYPE"]=="F" && $val["MULTIPLE"]=="N") {
      $value=CFile::GetPath($val["VALUE"]);
    }

    if ($val["PROPERTY_TYPE"]=="F" && $val["MULTIPLE"]=="Y") {
      $arrayFiles = [];
      foreach ($arResult["arEl"]["arProps"]["SETT_SHOWROOM_GAL"]["VALUE"] as $key1 => $val1)
      {
        $arrayFiles[]=CFile::GetPath($val1);
      }
      $arDеsignerSett[$key]=$arrayFiles;
      continue;
    }

    $arDеsignerSett[$key]=$value;
  }

  $_SESSION["arDеsignerSett"]=$arDеsignerSett;
?>