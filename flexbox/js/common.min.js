$(function() {
  $(document).ready(function(){
  	$('#nav-icon').click(function(){
  		$(this).toggleClass('open');
      $('.collapsed-mobile').toggleClass('collapse');
  	});
  });
  $(document).scroll(function() {
      var scroll = $(document).scrollTop();

      if( scroll >= 400 ) {
        $('.mouse_icon').addClass('black');
      }
      else if (scroll<400) {
        $('.mouse_icon').removeClass('black');
      }
  })
});
