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
          <a href="https://dot-serpent-tech-domain.swforge.ru/upload/medialibrary/363/09flalvitlj0dxm1tzsr1fmn26hhh50i.doc" class="props-download">Скачать</a>
        </div>
<div class="props-item">
          <div class="props-item__label">наименование организации</div>
          <div class="props-item__value">Индивидуальный предприниматель Чеклова Вероника Андреевна</div>
        </div>
        <div class="props-item">
          <div class="props-item__label">Юридический адрес</div>
          <div class="props-item__value">693013 г. Южно-Сахалинск, ул. Комсомольская д. 280, кв. 11</div>
        </div>
        
        <div class="props-item__flex">
          <div class="props-item">
            <div class="props-item__label">инн</div>
            <div class="props-item__value">650117995444</div>
          </div>
          <div class="props-item">
            <div class="props-item__label">бик</div>
            <div class="props-item__value">044525974</div>
          </div>
          <div class="props-item">
            <div class="props-item__label">ОКТМО</div>
            <div class="props-item__value">64701000001</div>
          </div>
        </div>
        <div class="props-item">
          <div class="props-item__label">ОКАТО</div>
          <div class="props-item__value">64401000000</div>
        </div> 

	<!-- <div class="props-item">
            <div class="props-item__label">ОКПО</div>
            <div class="props-item__value">2016117923</div>
        </div>
	<div class="props-item">
            <div class="props-item__label">ОКВЭД</div>
            <div class="props-item__value">62.01</div>
        </div>
	<div class="props-item">
            <div class="props-item__label">ОКФС</div>
            <div class="props-item__value">16</div>
        </div>
	<div class="props-item">
            <div class="props-item__label">ОКОПФ</div>
            <div class="props-item__value">50102</div>
        </div> -->
	<div class="props-item">
            <div class="props-item__label">Корреспондентский счет</div>
            <div class="props-item__value">30101810145250000974</div>
        </div>
	<div class="props-item">
            <div class="props-item__label">Расчетный счет</div>
            <div class="props-item__value">40802810800003391715</div>
        </div>
	
	<div class="props-item">
            <div class="props-item__label">ОГРН</div>
            <div class="props-item__value">322650000012481</div>
        </div>
	<div class="props-item">
            <div class="props-item__label">Банк</div>
            <div class="props-item__value">АО «Тинькофф Банк» г. Москва</div>
        </div>
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