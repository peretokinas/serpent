<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<?php
  //Корзина
  $APPLICATION->IncludeComponent(
    "swf:catalog.cart",
    "cart_1",
    [
      "TEST_PARAM"=>"TEST",
    ],
  );
?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>