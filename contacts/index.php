<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<?php
  //Конструктор страниц
  $APPLICATION->IncludeComponent(
    "swf:designer",
    "page_contacts",
    [
      "IB"=>$arSettings["IB"]["contacts"],
      "ALL_RECORDS"=>"Y",
      "LINK_LIST_PAGE"=>$arSettings["LINK_STATIC"]["articles_list"]
    ],
  );
?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>