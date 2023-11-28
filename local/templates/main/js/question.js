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
        console.log(response)
        if (response.success ) {
          alert('Спасибо! С вами свяжутся в ближайшее время!');
        }else {
          alert(response.success);
        }
      },
      error: function (jqXHR, text, error) {
      }
    });

  });
});