<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<?php
  if ($_GET["ELEMENT_CODE"]!="") {
    //Конструктор страниц
    $APPLICATION->IncludeComponent(
      "swf:designer",
      "page_detail_1",
      [
        "IB"=>$arSettings["IB"]["articles_1"],
        "ELEMENT_CODE"=>$_GET["ELEMENT_CODE"],
        "LINK_LIST_PAGE"=>$arSettings["LINK_STATIC"]["articles_list"],
      ],
    );
  } else {
    //Конструктор страниц
    $APPLICATION->IncludeComponent(
      "swf:designer",
      "page_list_1",
      [
        "IB"=>$arSettings["IB"]["articles_1"],
        "COUNT_OBJ_PAGE"=>2,
        "ALL_RECORDS"=>"Y",
        "LINK_LIST_PAGE"=>$arSettings["LINK_STATIC"]["articles_list"],
      ],
    );
  }
?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>