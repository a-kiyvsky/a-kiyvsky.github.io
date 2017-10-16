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
    if (scroll >= 250) {
        //clearHeader, not clearheader - caps H
        $('.video').addClass('li_up');
        var x = setTimeout(function(){
            $('.gallery').addClass('li_up')
        }, 500);
    }
    if (scroll >= 720) {
        //clearHeader, not clearheader - caps H
        $('.videos').find('.videos-element').each(function(n) {
            var i = n;
            var $this = $(this);
            var t = setTimeout(function(){
                $this.addClass('li_up')
            }, 250 * n+1)
        });
    }
    if (scroll >= 1150) {
        //clearHeader, not clearheader - caps H
        $('.select').find('.select-element').each(function(n) {
            var i = n;
            var $this = $(this);
            var t = setTimeout(function(){
                $this.addClass('li_left')
            }, 250 * n+1)
        });
    }
    if (scroll >= 1860) {
        //clearHeader, not clearheader - caps H
        $('.benefit').find('.benefit-element').each(function(n) {
            var i = n;
            var $this = $(this);
            var t = setTimeout(function(){
                $this.addClass('li_left')
            }, 250 * n+1)
        });
        $('.benefit').find('.benefit-element__vs').each(function(n) {
            var i = n;
            var $this = $(this);
            var t = setTimeout(function(){
                $this.addClass('li_left')
            }, 350 * n+1)
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


var tag = document.createElement('script');
		tag.src = 'https://www.youtube.com/player_api';
var firstScriptTag = document.getElementsByTagName('script')[0];
		firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
var tv,
		playerDefaults = {autoplay: 0, autohide: 1, modestbranding: 0, rel: 0, showinfo: 0, controls: 0, disablekb: 1, enablejsapi: 0, iv_load_policy: 3};
var vid = [
			{'videoId': '84p_Kn1bb4g', 'startSeconds': 0, 'endSeconds': 30, 'suggestedQuality': 'hd720'},
			],
		randomVid = Math.floor(Math.random() * vid.length),
    currVid = randomVid;

function onYouTubePlayerAPIReady(){
  tv = new YT.Player('tv', {events: {'onReady': onPlayerReady, 'onStateChange': onPlayerStateChange}, playerVars: playerDefaults});
}

function onPlayerReady(){
  tv.loadVideoById(vid[currVid]);
  tv.mute();
}

function onPlayerStateChange(e) {
  if (e.data === 1){
    $('#tv').addClass('active');
    $('.hi em:nth-of-type(2)').html(currVid + 1);
  } else if (e.data === 2){
    $('#tv').removeClass('active');
    if(currVid === vid.length - 1){
      currVid = 0;
    } else {
      currVid++;
    }
    tv.loadVideoById(vid[currVid]);
    tv.seekTo(vid[currVid].startSeconds);
  }
}

function vidRescale(){

  var w = $(window).width()+200,
    h = $(window).height()+200;

  if (w/h > 16/9){
    tv.setSize(w, w/16*9);
    $('.tv .screen').css({'left': '0px'});
  } else {
    tv.setSize(h/9*16, h);
    $('.tv .screen').css({'left': -($('.tv .screen').outerWidth()-w)/2});
  }
}

$(window).on('load resize', function(){
  vidRescale();
});
