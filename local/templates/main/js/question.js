$(document).ready(function(){
  //Клик по кнопке "Перезвонить мне" на странице контакты и шоурум
  $("body").on("click",".question_btn_send_form_action",function(){
    event.preventDefault();
    event.stopPropagation();

    var form_obj=$(this).parent();
    var form_data=form_obj.serialize();
    
    $.ajax({
      type: "POST",
      url: '/local/ajax/question.php',
      async: false,
      data: form_data,
      success: function (data) {
        let response = JSON.parse(data);
        // console.log(response)
        if (response.success ) {
          swf_modal_1('Спасибо! С вами свяжутся в ближайшее время!', "reload_page", "");
        }else {
          swf_modal_1('Необходимо заполнить все поля', "", "");
        }
      },
      error: function (jqXHR, text, error) {
      }
    });

  });
});