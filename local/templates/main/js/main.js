$(document).ready(function(){
  //Клик по фото в срезе каталога (Переход на деталку)
  $("body").on("click",".link_detail_on_click_photo_section_action",function(){
    location.href=$(this).attr("link-detail");
  });
  
  //Применение фильтров в срезе каталога
  $("body").on("click",".btn_final",function(){
    //Получаем данные с фильтровых модалок
    var filter_ar=[];
    
    //Цена
    filter_ar["price_start"]=$(".filter-price__input_start").val();
    filter_ar["price_end"]=$(".filter-price__input_end").val();
    //Размер
    filter_ar["size"]=[];
    $.each($(".filter_size_class"), function(key,val) {
      if ($(this).is(":checked")) {
        filter_ar["size"].push($(this).attr("size-val"));
      }
    });
    //Цвет
    filter_ar["color"]=[];
    $.each($(".filter_color_class"), function(key,val) {
      if ($(this).is(":checked")) {
        filter_ar["color"].push($(this).attr("color-val"));
      }
    });
    //Коллекция
    filter_ar["collect"]=[];
    $.each($(".filter_collect_class"), function(key,val) {
      if ($(this).is(":checked")) {
        filter_ar["collect"].push($(this).attr("collect-val"));
      }
    });
    
    var filter_obj=Object.assign({}, filter_ar);
    
    //Применяем фильтры
    $.ajax({
      type: 'POST',
      url: "/local/ajax/catalog.php",
      async: false,
      data: {
        "type":"filter_add",
        "data": filter_obj,
      },
      success: function(data) {
        location.reload();
      },
    });
  });
  
  //Открытие / закрытие спойлера "подробнее о заказе" в ЛК в прошлых заказах
  $("body").on("click",".order-event__link",function(){
    var itemParent=$(this).parent().parent();
    var itemContainerHidden=itemParent.find(".order-list");
    var itemContainerHiddenHeight=itemContainerHidden.find('.order-list__container').height();
    var btnRew=itemParent.find(".order-event__btn");
    
    if (itemParent.hasClass("active")) {
      itemParent.removeClass("active");
      $(this).html("Состав заказа");
      itemContainerHidden.css("height","0px");
      btnRew.css("margin-top","0px");
    } else {
      itemParent.addClass("active");
      $(this).html("Скрыть состав заказа");
      var nHeight=itemContainerHiddenHeight+20+"px";
      itemContainerHidden.css("height",nHeight);
      btnRew.css("margin-top","20px");
    }
  });
  
  //Закрытие отбивки с перезагрузкой страницы
  $("body").on("click",".swf-modal-1-reload-page", function(){
    event.preventDefault();
    event.stopPropagation();
    
    location.reload();
  });
  //Закрытие отбивки с переходом в ЛК
  $("body").on("click",".swf-modal-1-goto-cabinet", function(){
    event.preventDefault();
    event.stopPropagation();
    
    location.href="/cabinet/page_order/";
  });
  
  //Переход по ссылке подобного по цвету из модалки поиска
  $('body').on("click",".cast_goto_link_podob_in_slider_2_action",function(){
    event.preventDefault();
    event.stopPropagation();
    
    location.href=$(this).attr("href");
  });
  
  //Кнопка очистки фильтров
  $('body').on("click",".filter-reset",function(){
    event.preventDefault();
    event.stopPropagation();
    
    //Применяем фильтры
    $.ajax({
      type: 'POST',
      url: "/local/ajax/catalog.php",
      async: false,
      data: {
        "type":"filter_add",
        "data": {},
      },
      success: function(data) {
        location.reload();
      },
    });
  });
  
  //Плавный переход по якорям
  $('body').on("click",'a[href*=\\#]:not([href=\\#])',function(){
    event.preventDefault();
    event.stopPropagation();
    var el_id=$(this).attr('href');
    if (el_id[0]=="/") {
      location.href=el_id;
    } else {
      $("html").animate({scrollTop: $(el_id).offset().top}, 2000);
    }
  });
  
  //Заглушка
  $("body").on("click",".cast_js_in_progress",function(){
    event.preventDefault();
    event.stopPropagation();
    
    swf_modal_1("Интеграция в процессе","","");
  });
  
  //Форма подписаться на рассылку
  $("body").on("submit",".sale-form",function(){
    event.preventDefault();
    event.stopPropagation();
    
    swf_modal_1("Интеграция в процессе","","");
  });
  
  //Добавление в избранное с карточки - секции каталога
  $("body").on("click",".product-favorite",function(){
    event.preventDefault();
    event.stopPropagation();
    
    var obj_check=$(this).find("input");
    var obj_path=$(this).find(".product-favorite-svg").find("path");
    
    var id_prod=$(this).attr("id-prod");
    
    //Добавляем / удаляем из избранного
    $.ajax({
      type: 'POST',
      url: "/local/ajax/catalog.php",
      async: false,
      data: {
        "type":"favorites_add_del",
        "id_prod":id_prod,
      },
      success: function(data) {
        if (data=="true") {
          obj_check.attr("checked",true);
          obj_check.addClass("checked");
          obj_path.attr("stroke","#e5918a");
          obj_path.attr("fill","#e5918a");
        } else {
          obj_check.removeAttr("checked");
          obj_check.removeClass("checked");
          obj_path.attr("stroke","rgb(38, 55, 64)");
          obj_path.attr("fill","transparent");
        }
        location.reload();
      },
    });
  });
  
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
    //Заработало без данного кода, видимо перекрылась какая-то ошибка в js-ах от версталы, скорее всего после того как я убрал дубль common.js коммент в хедере
    
    // event.preventDefault();
    // event.stopPropagation();
    
    // var parent=$(this).parent();
    
    // console.log(parent.attr("class"));
    
    // if (parent.hasClass("active")) {
      // parent.removeClass("active");
    // } else {
      // parent.addClass("active");
    // }
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
  
  //Отправка отзыва о товаре
  $(".but_otziv_prod_send_action").click(function(){
    event.preventDefault();
    event.stopPropagation();
    
    var form_id=$(this).attr("form-id");
    var form_obj=$("#"+form_id);
    var form_data=form_obj.serialize();
    
    form_data=form_data+"&type=send_review_prod";

    // console.log(form_data);
    $.ajax({
      type: 'POST',
      url: "/local/ajax/forms.php",
      async: false,
      data: form_data,
      success: function(data) {
        var obj_json=$.parseJSON(data);
        //Отбивка
        if (obj_json["status"]=="1") {
          swf_modal_1(obj_json["text"],"reload_page","");
        } else {
          alert(obj_json["text"]);
          //swf_modal_1(obj_json["text"],"","");
        }
      },
    });
  });
  
  //Отправка отзыва о заказе
  $(".but_otziv_order_send_action").click(function(){
    event.preventDefault();
    event.stopPropagation();
    
    var form_id=$(this).attr("form-id");
    var form_obj=$("#"+form_id);
    var form_data=form_obj.serialize();
    
    form_data=form_data+"&type=send_review_order";
    
    $.ajax({
      type: 'POST',
      url: "/local/ajax/forms.php",
      async: false,
      data: form_data,
      success: function(data) {
        var obj_json=$.parseJSON(data);
        //Отбивка
        if (obj_json["status"]=="1") {
          swf_modal_1(obj_json["text"],"reload_page","");
        } else {
          swf_modal_1(obj_json["text"],"","");
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

    var text_success_add=$(this).attr("text-success-add");

    var obj_but=obj_cont.find(".add_to_cart_action");
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
        obj_but.removeClass("add_to_cart_action");
        obj_but.addClass("product-detail__added");
        if (text_success_add!="") {
          swf_modal_1(text_success_add,"","");
          obj_but.html("Добавлено");
          location.reload();
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
        
        //На странице корзины - релодим корзину
        var path=window.location.pathname;
        if (path=="/cart/") {
          location.reload();
        } else {
          //Получаем кол-во в корзине
          $.ajax({
            type: 'POST',
            url: "/local/ajax/catalog.php",
            async: false,
            data: {
              "type":"get_num_pos_in_cart",
            },
            success: function(data) {
              if (data!="0") {
                //Динамически изменяем кол-во товаров в корзине в шапке
                var obj_cart_icon=$("#id_icon_head_cart");
                var obj_span=obj_cart_icon.find("span");
                
                if (obj_span.length==0) {
                  //Добавляем блок с кол-вом
                  obj_cart_icon.append("<span class='header-event__count'>"+data+"</span>");
                } else {
                  //Обновляем блок с кол-вом
                  obj_span.html(data);
                }
              }
            }
          });
        }
        
      },
    }); 
  });
  
  //Удаление товара из корзины
  $("body").on("click",".shop_cart_position_delete_action",function(){
    event.preventDefault();
    event.stopPropagation();
    
    //Отключаем событие
    $(this).removeClass("shop_cart_position_delete_action");
    
    var num_obj=$(this).parent().parent().find(".shop_cart_num_input");
    var prod_id=num_obj.attr("prod-id");
    var item_id=num_obj.attr("item-id");
    var type_exec="del_item";
    var item_obj=$(this).parent().parent().parent();
    
    $.ajax({
      type: 'POST',
      url: "/local/ajax/catalog.php",
      async: false,
      data: {
        "type":"cart_num_change",
        "prod_id":prod_id,
        "item_id":item_id,
        "prod_qua":1,
        "type_exec":type_exec,
      },
      success: function(data) {
        //Релодим корзину
        location.reload();
      },
    });
  });
  
  //Изменение кол-ва товара в корзине
  $("body").on("click",".shop_cart_num_change_action",function(){
    var num_obj=$(this).parent().find(".shop_cart_num_input");
    var prod_id=num_obj.attr("prod-id");
    var item_id=num_obj.attr("item-id");
    var type_exec=$(this).attr("type-exec");
    
    $.ajax({
      type: 'POST',
      url: "/local/ajax/catalog.php",
      async: false,
      data: {
        "type":"cart_num_change",
        "prod_id":prod_id,
        "item_id":item_id,
        "prod_qua":1,
        "type_exec":type_exec,
      },
      success: function(data) {
        var obj_json=$.parseJSON(data);
    
        //Обновляем кол-во итема
        num_obj.val(obj_json["new_qua"]);
        //Обновляем общую сумму
        $(".shop_cart_summ_input").html(obj_json["cart_summ"]);
      },
    });
  });
  
  //Оформление заказа
  $("body").on("click",".basket_form_submit_action",function(){
    event.preventDefault();
    event.stopPropagation();
    
    var obj_this=$(this);
    
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
        var obj_json=$.parseJSON(data);
        
        //Скрываем все ошибочные поля
        $("."+class_err).addClass("cast_hide");
        //Очищаем все ошибочные поля
        $("."+class_err).html("");
        
        if (obj_json["status"]=="1") {
          swf_modal_1(obj_json["text"],"goto_cabinet","");
        } else {
          if (obj_json["status"]=="0") {
            //Ошибки валидации
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
          } else {
            //Ошибка авторизации
            swf_modal_1(obj_json["text"],"reload_page","");
          }
        }
      },
    });
  });
});