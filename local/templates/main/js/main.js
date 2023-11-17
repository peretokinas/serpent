$(document).ready(function(){
  //Выбор размера в карточке секции каталога
  $("body").on("click",".product-slide__size-items",function(){
    var prod_id=$(this).find(".product-slide__size-item.active").attr("prod-id");
    var obj_cont=$(this).parent().parent().parent();
    var obj_but=obj_cont.find(".product-basket");
    
    //Проверяем наличие текущего товара в корзине
    $.ajax({
      type: 'POST',
      url: "/local/ajax/catalog.php",
      async: false,
      data: {
        "type":"test_in_cart",
        "prod_id":prod_id,
      },
      success: function(data) {
        if (data=="1") {
          obj_but.removeClass("add_to_cart_section_action");
          obj_but.addClass("product-basket__added");
        } else {
          obj_but.removeClass("product-basket__added");
          obj_but.addClass("add_to_cart_section_action");
        }
      },
    });
  });
  
  //Клик по выбору размера в карточке секции каталога
  $("body").on("click",".product-slide__size-default",function(){
    event.preventDefault();
    event.stopPropagation();
    
    var parent=$(this).parent();
    
    if (parent.hasClass("active")) {
      parent.removeClass("active");
    } else {
      parent.addClass("active");
    }
  });
  
  //Клик по подобному 1 в карточке секции каталога
  $("body").on("click",".cast_card_prod_podob_1_action",function(){
    var code_card=$(this).attr("code-card");
    
    //Скрываем текущую карточку
    var obj_card_old=$(this).parent().parent().parent().parent();
    obj_card_old.addClass("cast_hide");
    
    //Отображаем ту, на которую кликнули
    var slide_cont=obj_card_old.parent().parent().parent().parent();
    var obj_card_new=slide_cont.find(".cast_card_"+code_card);
    obj_card_new.removeClass("cast_hide");
  });
  
  //Отправка отзыва
  $(".but_otziv_prod_send_action").click(function(){
    event.preventDefault();
    event.stopPropagation();
    
    var form_id=$(this).attr("form-id");
    var form_obj=$("#"+form_id);
    var form_data=form_obj.serialize();
    
    form_data=form_data+"&type=send_review_prod";
    
    $.ajax({
      type: 'POST',
      url: "/local/ajax/forms.php",
      async: false,
      data: form_data,
      success: function(data) {
        var obj_json=$.parseJSON(data);
        alert(obj_json["text"]);
        if (obj_json["status"]=="1") {
          location.reload();
        }
      },
    });
  });
  
  //Переход по ссылке подобного в детальной карточке
  $("body").on("click",".catalog_go_to_page_action",function(){
    location.href=$(this).attr("href");
  });
  
  //Добавление товара в корзину из детальной карточки товара
  $("body").on("click",".add_to_cart_action",function(){
    event.preventDefault();
    event.stopPropagation();
    
    var obj_cont=$(this).parent().parent().parent();
    var obj_sku=obj_cont.find(".product-size__items");
    var obj_input_sku=obj_sku.find("input:checked");
    
    var text_success_add=$(this).attr("text-success-add")
    
    var prod_id=obj_input_sku.attr("prod-id");
    
    $.ajax({
      type: 'POST',
      url: "/local/ajax/catalog.php",
      async: false,
      data: {
        "type":"add_to_cart",
        "prod_id":prod_id,
        "prod_qua":1,
      },
      success: function(data) {
        if (text_success_add!="") {
          alert(text_success_add);
        }
      },
    }); 
  });
  
  //Добавление товара в корзину из карточки товара в секции каталога
  $("body").on("click",".add_to_cart_section_action",function(){
    event.preventDefault();
    event.stopPropagation();
    
    var obj_cont=$(this).parent().parent();
    var obj_sku=obj_cont.find(".product-slide__size-item.active");
    var obj_but=obj_cont.find(".product-basket");
    
    var prod_id=obj_sku.attr("prod-id");
    
    $.ajax({
      type: 'POST',
      url: "/local/ajax/catalog.php",
      async: false,
      data: {
        "type":"add_to_cart",
        "prod_id":prod_id,
        "prod_qua":1,
      },
      success: function(data) {
        obj_but.removeClass("add_to_cart_section_action");
        obj_but.addClass("product-basket__added");
      },
    }); 
  });
  
  //Оформление заказа
  $("body").on("click",".basket_form_submit_action",function(){
    event.preventDefault();
    event.stopPropagation();
    
    //Класс поля ошибки
    var class_err="cast_error_text_1";
    
    //Получаем дату
    var form_data=$(".basket_form_action").serialize();
    
    form_data=form_data+"&type=order_create";
    
    $.ajax({
      type: 'POST',
      url: "/local/ajax/catalog.php",
      async: false,
      data: form_data,
      success: function(data) {
        console.log(data);
        var obj_json=$.parseJSON(data);
        
        //Скрываем все ошибочные поля
        $("."+class_err).addClass("cast_hide");
        //Очищаем все ошибочные поля
        $("."+class_err).html("");
        
        if (obj_json["status"]=="1") {
          alert(obj_json["text"]);
          location.href="/cabinet/";
        } else {
          $.each(obj_json["error"], function(key,val){
            //Находим нужное поле для вывода ошибки
            var obj_err=$("[name='"+key+"'").parent().find("."+class_err);
            obj_err.html(val);
            obj_err.removeClass("cast_hide");
            //Скролим вверх
            $([document.documentElement, document.body]).animate({
              scrollTop: $("body").offset().top
            }, 1000);
          });
        }
      },
    });
  });
});