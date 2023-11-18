$(document).ready(function(){
  //Клик по кнопке "Продолжить" в форме авторизации
  $("body").on("click",".auth_btn_send_auth_form_action",function(){
    event.preventDefault();
    event.stopPropagation();
    
    alert("Интеграция в процессе");
  });
});