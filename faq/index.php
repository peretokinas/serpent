<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<?php
//Конструктор страниц
$APPLICATION->IncludeComponent(
  "swf:designer",
  "page_faq",
    [
      "IB"=>$arSettings["IB"]["faq"],
      "ALL_RECORDS"=>"Y"
    ],
  );
?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>