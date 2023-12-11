$(document).ready(function(){

  //Скрипт для перемещения между ячейками
  var codeInput = document.querySelector(".code-input");

  codeInput.addEventListener('keyup', function (event) {
    var target = event.srcElement;

    var maxLength = parseInt(target.attributes["maxlength"].value, 10);
    var myLength = target.value.length;

    if (myLength >= maxLength) {
      var next = target;
      while (next = next.nextElementSibling) {
        if (next == null) break;
        if (next.tagName.toLowerCase() == "input") {
          next.focus();
          break;
        }
      }
    }

    if (myLength === 0) {
      var next = target;
      while (next = next.previousElementSibling) {
        if (next == null) break;
        if (next.tagName.toLowerCase() == "input") {
          next.focus();
          break;
        }
      }
    }
  }, false);


  codeInput.addEventListener('keydown', function (event) {
    var target = event.srcElement;
    target.value = "";
  }, false);


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
          location.href="/cabinet/";
        } else {
          swf_modal_1(obj_json["error"],"","");
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
          $(".code-timer-action").attr("time-now","90");
          $(".code-timer-action").find("span").html("1:30");
          timer_1("code-timer-action");
        } else {
          swf_modal_1(obj_json["error"],"","");
        }
        
        //Биндим событие обратно
        but_obj.addClass("auth_btn_send_auth_form_action");
      },
    });
  });
});