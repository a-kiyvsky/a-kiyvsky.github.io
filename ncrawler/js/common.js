$(function() {

  $(window).scroll(function() {
    var scroll = $(window).scrollTop();

     //>=, not <=
    if (scroll >= 60) {
        //clearHeader, not clearheader - caps H
        $('header').addClass('scroll');
    } else {
      if(scroll <60) {
        $('header').removeClass('scroll')
      }
    }
}); //missing );
	$('#nav-icon1').click(function(){
		$('nav').toggleClass('open');
    $(this).toggleClass('open');
	});

});
