$(function() {
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    console.log(scroll);
     //>=, not <=
    if (scroll >= 60) {
        //clearHeader, not clearheader - caps H
        $('header').addClass('scroll');
    } else {
      if(scroll <60) {
        $('header').removeClass('scroll')
      }
    }
    if (scroll >= 570) {
        //clearHeader, not clearheader - caps H
        $('.video').addClass('li_up');
        var x = setTimeout(function(){
            $('.gallery').addClass('li_up')
        }, 500);
    }
    if (scroll >= 1000) {
        //clearHeader, not clearheader - caps H
        $('.videos').find('.videos-element').each(function(n) {
            var i = n;
            var $this = $(this);
            var t = setTimeout(function(){
                $this.addClass('li_up')
            }, 250 * n+1)
        });
    }
    if (scroll >= 1670) {
        //clearHeader, not clearheader - caps H
        $('.select').find('.select-element').each(function(n) {
            var i = n;
            var $this = $(this);
            var t = setTimeout(function(){
                $this.addClass('li_left')
            }, 250 * n+1)
        });
    }
}); //missing );
	$('#nav-icon1').click(function(){
		$('nav').toggleClass('open');
    $(this).toggleClass('open');
	});

});

$( document ).ready(function() {
      var x = setTimeout(function(){
          $('header').addClass('li_up_header')
      }, 500);
      var y = setTimeout(function(){
        $('.main').find('.bullets-element').each(function(n) {
            var i = n;
            var $this = $(this);
            var t = setTimeout(function(){
                $this.addClass('li_left')
            }, 250 * n+1)
        });

      }, 1020);

      var t = setTimeout(function(){
          $('.main').find('.table').addClass("li_up")
      }, 1020);
});
