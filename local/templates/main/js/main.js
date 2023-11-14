$(document).ready(function(){
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
});