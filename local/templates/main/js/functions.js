//Секунды в минуты и секунды
function secondsToMs(d) {
  d = Number(d);
  var m = Math.floor(d % 3600 / 60);
  var s = Math.floor(d % 3600 % 60);
  
  if (String(s).length==1) {
    s="0"+String(s);
  }
  
  return m+":"+s; 
}

//Таймер 1 (Обратный отчет времени ввода кода
function timer_1(class_timer) {
  var obj_timer=$("."+class_timer);
  var obj_timer_span=obj_timer.find("span");
  
  var refreshId=setInterval(function(){
    var time_now=obj_timer.attr("time-now");
    time_now=time_now-1;
    if (time_now>0) {
      obj_timer.attr("time-now",time_now);
      obj_timer_span.html(secondsToMs(time_now));
    } else {
      $(".auth-modal__reg-code").removeClass("active");
      clearInterval(refreshId);
    }
  },1000);
}

//Общая отбивка
function swf_modal_1(text, option_close_modal, dop_class) {
  var obj_modal_action=$(".swf-modal-1_action");
  var obj_modal=$(".swf-modal-1");
  var obj_modal_p=obj_modal.find("p");
  var obj_modal_close=obj_modal.find(".modal-close");

  console.log(obj_modal);
  //Ставим класс перезагрузки страницы, при определенной опции вызова модалки
  if (option_close_modal=="reload_page") {
    obj_modal_close.addClass("swf-modal-1-reload-page");
  }
  
  //Ставим класс перехода в ЛК, при определенной опции вызова модалки
  if (option_close_modal=="goto_cabinet") {
    obj_modal_close.addClass("swf-modal-1-goto-cabinet");
  }

  //Устанавливаем текст отбивки
  obj_modal_p.html(text);
  //Вызываем отбивку
  obj_modal_action.click();
}