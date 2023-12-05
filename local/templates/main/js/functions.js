//Общая отбивка
function swf_modal_1(text, option_close_modal, dop_class) {
  var obj_modal_action=$(".swf-modal-1_action");
  var obj_modal=$(".swf-modal-1");
  var obj_modal_p=obj_modal.find("p");
  var obj_modal_close=obj_modal.find(".modal-close");
  
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