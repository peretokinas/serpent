<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<?php include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');?>
<main>
  <div class="not-found">
    <div class="container">
      <div class="not-found-container">
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
                "NAME"=>"404",
                "LINK"=>"",
              ]
            ],
          ],
          );
        ?>
        <div class="not-found__title">404</div>
        <div class="not-found__content">Страница не найдена</div>
        <a href="/" class="btn">
          Вернуться на главную
        </a>
      </div>
    </div>
  </div>
  <div class="container">
    Место каталога новинки
  </div>
</main>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>