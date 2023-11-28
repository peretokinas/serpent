$(document).ready(function(){
  //Выбор типа авторизации (вход, регистрация)
  $("body").on("click",".select_type_event_auth_action",function(){
    var obj_type_event=$(this).parent().parent().find("input[name='f_type_event']");
    
    obj_type_event.val($(this).attr("type-event"));
  });
  
  //Клик по кнопке отправки кода подтверждения авторизации
  $("body").on("click",".auth_btn_send_auth_code_action",function(){
    event.preventDefault();
    event.stopPropagation();
    
    var but_obj=$(this);
    
    //Анбиндим событие, для предотвращения дабл-кликов
    but_obj.removeClass("auth_btn_send_auth_code_action");
    
    var form_obj=$(this).parent();
    
    var form_data=form_obj.serialize();
    
    form_data=form_data+"&type=send_code";
    
    $.ajax({
      type: 'POST',
      url: "/local/ajax/auth.php",
      async: false,
      data: form_data,
      success: function(data) {
        var obj_json=$.parseJSON(data);
        
        if (obj_json["status"]=="1") {
          alert(obj_json["text"]);
          location.reload();
        } else {
          alert(obj_json["error"]);
        }
        
        //Биндим событие обратно
        but_obj.addClass("auth_btn_send_auth_code_action");
      },
    });
  });
  
  //Клик по кнопке "Продолжить" в форме авторизации
  $("body").on("click",".auth_btn_send_auth_form_action",function(){
    event.preventDefault();
    event.stopPropagation();
    
    var but_obj=$(this);
    
    //Анбиндим событие, для предотвращения дабл-кликов
    but_obj.removeClass("auth_btn_send_auth_form_action");
    
    var form_obj=$(this).parent();
    
    var form_data=form_obj.serialize();
    
    form_data=form_data+"&type=send_phone";
    
    $.ajax({
      type: 'POST',
      url: "/local/ajax/auth.php",
      async: false,
      data: form_data,
      success: function(data) {
        var obj_json=$.parseJSON(data);
        if (obj_json["status"]=="1") {
          $(".auth-modal__reg-code").addClass("active");
        } else {
          alert(obj_json["error"]);
        }
        
        //Биндим событие обратно
        but_obj.addClass("auth_btn_send_auth_form_action");
      },
    });
  });
});