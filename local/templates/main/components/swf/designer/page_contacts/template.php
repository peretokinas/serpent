<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
  session_start();

  $PREVIEW_PICTURE = CFile::GetPath($val["arFields"]["PREVIEW_PICTURE"]);

?>
<main>
  <div class="container">
    <?php
    //Хлебные крошки
    $APPLICATION->IncludeComponent(
      "swf:breadcrumbs",
      "main_1",
      [
        "ITEMS"=>[
          [
            "NAME"=>"Главная",
            "LINK"=>"/",
          ],
          [
            "NAME"=>"Контакты",
            "LINK"=>"",
          ]
         ],
      ],
     );
    ?>
  </div>
 
<div class="container">
    <h1>Контакты</h1>
    <div class="contact-container">
      <div class="contact-block">
        <?php if(count($arResult["arEl"])>0):?>
          <?php foreach($arResult["arEl"] AS $key=>$val):?>
            <?php
              $item_active = "";
              if($key == 0)
                $item_active = "contact-item__active";
            ?>
            <div class="contact-item <?php echo $item_active;?>">
              <div class="contact-item__position"><?php echo $val["arProps"]["position"]["VALUE"];?></div>
              <div class="contact-item__name"><?php echo $val["arFields"]["NAME"];?></div>
              <a href="tel:<?php echo $val["arProps"]["contact_phone"]["VALUE"];?>" class="contact-item__link"><?php echo $val["arProps"]["phone"]["VALUE"];?></a>
              <a href="mailto:<?php echo $val["arProps"]["email"]["VALUE"];?>" class="contact-item__link"><?php echo $val["arProps"]["email"]["VALUE"];?></a>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
      <div class="contact-props">
        <div class="contact-props__head">
          <div class="h33">Реквизиты</div>
          <!-- <a href="#" class="props-download">Скачать</a> -->
        </div>
        <div class="props-item">
          <div class="props-item__label">адрес</div>
          <div class="props-item__value"> 392036, г. Тамбов, ул. Коммунальная, д. 18</div>
        </div>
        <!-- <div class="props-item">
          <div class="props-item__label">Расчетный счет</div>
          <div class="props-item__value">40702810432000009840 в Филиале «Центральный» Банка ВТБ (ПАО) в г. Москве</div>
        </div> -->
        <div class="props-item__flex">
          <div class="props-item">
            <div class="props-item__label">инн</div>
            <div class="props-item__value">650117995444</div>
          </div>
          <div class="props-item">
            <div class="props-item__label">огрн</div>
            <div class="props-item__value">322650000012481</div>
          </div>
          <!-- <div class="props-item">
            <div class="props-item__label">бик</div>
            <div class="props-item__value">044525411</div>
          </div> -->
        </div>
        <!-- <div class="props-item">
          <div class="props-item__label">Корреспондентский счет</div>
          <div class="props-item__value">30101810145250000411</div>
        </div> -->
      </div>
    </div>
  </div>

  <?php
  $APPLICATION->IncludeComponent(
    "swf:other",
    "yandexmap",
      [
      ],
    );
  ?>
  <?php
  $APPLICATION->IncludeComponent(
    "swf:forms",
    "form_1",
    [
    ],
    );
  ?>
</main>