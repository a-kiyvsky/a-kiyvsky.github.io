$(function() {

  $(document).ready(function(){
	$('#nav-mobile').click(function(){
		$(this).toggleClass('open');
    $('nav').toggleClass('showed');
	});
});

});

$(window).scroll(function() {
    if ($(this).scrollTop() > 100) { // this refers to window
        $('header').addClass('fixed');
    } else {
      $('header').removeClass('fixed');
    }
});
