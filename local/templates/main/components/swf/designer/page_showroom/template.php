<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
  session_start();
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
              "NAME"=>"Магазин",
              "LINK"=>"",
            ],
          ],
        ],
      );
    ?>
  </div>
  <div class="article-content cast_p_interval_1">
    <div class="container">
      <div class="h1">Магазин</div>
      <p>
        Уважаемые клиенты, добро пожаловать в премиальный мир купальников The Serpent! Приглашаем вас в мир пляжной моды, где качество и изысканный стиль создают ваш идеальный образ.
      </p>
      <div class="cast-gal-photo-1">
        <div class="cast-gal-photo-1-col cast-gal-photo-1-col-1">
          <img class="" src="<?php echo SITE_TEMPLATE_PATH;?>/img/articles/showroom-1.jpg" alt="">
        </div>
        <div class="cast-gal-photo-1-col cast-gal-photo-1-col-2">
          <img class="cast-gal-photo-1-col-2-row-1" src="<?php echo SITE_TEMPLATE_PATH;?>/img/articles/showroom-2.jpg" alt="">
          <img class="cast-gal-photo-1-col-2-row-2" src="<?php echo SITE_TEMPLATE_PATH;?>/img/articles/showroom-3.jpg" alt="">
        </div>
      </div>
      <h2>Помощь в выборе</h2>
      <p>
        Консультанты The Serpent помогут подобрать самую подходящую модель, подчеркивающую достоинства фигуры и гармонирующую с цветом глаз.
      </p>
      <p>
        А чтобы пляжный ансамбль впечатлял ещё сильнее, воспользуйтесь профессиональным изданием lookbook с примерами фотографий по идеальному сочетанию наших купальников с различными видами одежды.
      </p>
      <div class="showroom-flex">
        <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/articles/showroom-4.jpg" alt="">
        <div class="showroom-content">
          <h2>Примерка</h2>
          <p>
            Каждую выбранную модель можно примерить в уютных кабинках с мягким освещением. Большие зеркала позволят оценить посадку купальника по фигуре.
          </p>
          <p>
            Бокал искрящегося Prosecco превратит выбор модели и примерку в приятное приключение! А если дела пока этого не позволяют – есть сок, кофе и конфеты.
          </p>
        </div>
      </div>
      <h2>Где мы находимся</h2>
      <p>
        Наш стильный шоурум приглашает в гости по адресу: Москва, ул. Усачева, 11ж.
      </p>
      <p>
        Уютно оформленный зал с нежными световыми акцентами, расслабленная и непринужденная атмосфера — каждая деталь обновки салона подчеркивает премиальность наших коллекций.
      </p>
      <p>
        Ждем вас каждый день с 10:00 до 22:00.
      </p>
      <p>
        Наш магазин удобно расположен рядом со станциями метро «Спортивная» и «Фрунзенская». Платная городская парковка на улице Усачева и дополнительная парковка у «Усачевского рынка» обеспечат комфорт вашего визита.
      </p>
      <div class="showroom-slider__container">
        <div class="swiper-button-prev swiper-arrow">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 32 31" fill="none">
            <path d="M2.82874 16.0006L32.0002 16.002" stroke="#263740" stroke-linejoin="round"/>
            <path d="M8.10234 9.88823L2.00018 15.963L8.10076 22.0393" stroke="#263740" stroke-width="2"/>
          </svg>
        </div>
        <?php
          $APPLICATION->IncludeComponent(
            "swf:galery",
            "gal_1",
            [
              "arGal"=>$_SESSION["arDеsignerSett"]["SETT_SHOWROOM_GAL"],
            ],
          );
        ?>
        <div class="swiper-button-next swiper-arrow">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 32 31" fill="none">
            <path d="M29.1713 16.0006L-0.000242786 16.002" stroke="#263740" stroke-linejoin="round"/>
            <path d="M23.8977 9.88823L29.9998 15.963L23.8992 22.0393" stroke="#263740" stroke-width="2"/>
          </svg>
        </div>
      </div>
    </div>
    <div class="showroom-contact">
      <?php
        $APPLICATION->IncludeComponent(
          "swf:other",
          "yandexmap",
          [
          ],
        );
      ?>
      <div class="showroom-block">
        <a href="#" class="showroom-block__link">Как добраться?</a>
        <div class="showroom-block__line">
          <div class="showroom-block__label_main">адрес</div>
          <div class="showroom-block__value">Москва, ул. Усачева, 11ж</div>
        </div>
        <div class="showroom-block__line">
          <div class="showroom-block__label">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16" fill="none">
              <path d="M21.681 13.7648L16.2421 0L11.6414 8.04656L7.05937 0L1.60186 13.7648H0V15.851H8.23283V13.7648H7.00349L8.19557 10.3376L11.6414 16L15.0873 10.3376L16.2794 13.7648H15.0501V15.851H23.2829V13.7648H21.681Z" fill="#B3A8A4"/>
            </svg>
            Спортивная
          </div>
          <div class="showroom-block__value"></div>
        </div>
        <div class="showroom-block__line">
          <div class="showroom-block__label">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16" fill="none">
              <path d="M21.681 13.7648L16.2421 0L11.6414 8.04656L7.05937 0L1.60186 13.7648H0V15.851H8.23283V13.7648H7.00349L8.19557 10.3376L11.6414 16L15.0873 10.3376L16.2794 13.7648H15.0501V15.851H23.2829V13.7648H21.681Z" fill="#B3A8A4"/>
            </svg>
            Фрунзенская
          </div>
          <div class="showroom-block__value"></div>
        </div>
        
<div class="showroom-block__line">
          <div class="showroom-block__label">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16" fill="none">
              <path d="M21.681 13.7648L16.2421 0L11.6414 8.04656L7.05937 0L1.60186 13.7648H0V15.851H8.23283V13.7648H7.00349L8.19557 10.3376L11.6414 16L15.0873 10.3376L16.2794 13.7648H15.0501V15.851H23.2829V13.7648H21.681Z" fill="#B3A8A4"/>
            </svg>
            Лужники
          </div>
          <div class="showroom-block__value"></div>
        </div>
        <div class="showroom-contact__flex">
          <div class="showroom-contact__time">
            <div class="showroom-contact__time-line">
              <span>ПН-ВС</span> 11:00–20:00
            </div>
            
          </div>
          <a href="#" class="btn btn_white" data-modal-trigger="modal-callback">Остались вопросы?</a>
        </div>
      </div>
    </div>
  </div>
</main>
<?php
$APPLICATION->IncludeComponent(
  "swf:forms",
  "form_2",
  [
  ],
);
?>