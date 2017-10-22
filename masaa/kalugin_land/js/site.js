$(document).ready(function(){
  $('.open_modal').click(function() {
    $('.modal_bg').fadeIn(300);
    return false;
  });

  $('.close, .overlay').click(function () {
    $('.modal_bg').fadeOut(300);$("body").css({"overflow":"auto"});
  });
});
