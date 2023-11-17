<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="lk-content lk-content__flex lk-favorites">
  <?php foreach($arResult["ITEMS"] AS $key=>$val):?>
    <?php
    //Обнуляем подобные 1
    $tmpArPodob_1=[];
    $ex_name=explode($arParams["GROUP_PODOB_1_RAZD"],$val["arFields"]["NAME"]);
    $tmpArPodob_1=$arResult["ITEMS_PODOB_1"][$ex_name[0]];

    //Грузим карточку
    $APPLICATION->IncludeComponent(
      "swf:catalog.card",
      "card_1",
      [
        "arParamsDef"=>$arParams,
        "tmpArPodob_1"=>$tmpArPodob_1,
        "val"=>$val,
        "HIDE_PODOB_CLASS"=>"",
      ],
            );

    //Грузим карточки подобных
    foreach ($tmpArPodob_1 AS $key_p1=>$val_p1) {
      $APPLICATION->IncludeComponent(
        "swf:catalog.card",
        "card_1",
        [
          "arParamsDef"=>$arParams,
          "tmpArPodob_1"=>$tmpArPodob_1,
          "val"=>$val_p1,
          "HIDE_PODOB_CLASS"=>"cast_hide",
          "val_general"=>$val
        ],
              );
    }
    ?>
  <?php endforeach;?>
</div>