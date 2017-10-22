$(document).ready(function() {

	$(".form").submit(function() {
		$.ajax({
			type: "GET",
			url: "mail.php",
			data: $(this).serialize()
		}).done(function() {
			alert("Спасибо за заявку!");
			setTimeout(function() {
				$.fancybox.close();
			}, 1000);
		});
		return false;
	});

	$('.bxslider1').bxSlider({
		minSlides: 2,
		maxSlides: 7,
		slideWidth: 170,
		slideHeight: 170,
		slideMargin: 15,
		adaptiveHeight: false,
	});

	$('.bxslider2').bxSlider({
		minSlides: 1,
		maxSlides: 3,
		slideWidth: 270,
		slideMargin: 50,
		adaptiveHeight: true,
	});

	$('.bxslider3').bxSlider({
		minSlides: 1,
		maxSlides: 3,
		slideWidth: 270,
		slideMargin: 50,
		adaptiveHeight: true,
	});

	$('.bxslider4').bxSlider({
		minSlides: 1,
		maxSlides: 3,
		slideWidth: 270,
		slideMargin: 50,
		adaptiveHeight: true,
	});

	$('.bxslider6').bxSlider({
		minSlides: 1,
		maxSlides: 3,
		slideWidth: 270,
		slideMargin: 50,
		adaptiveHeight: true,
	});

	$('.bxslider7').bxSlider({
		minSlides: 2,
		maxSlides: 7,
		slideWidth: 170,
		slideMargin: 15,
		adaptiveHeight: true,
	});

	$('.bxslider8').bxSlider({
		minSlides: 1,
		maxSlides: 3,
		slideWidth: 270,
		slideMargin: 50,
		adaptiveHeight: true,
	});

	$('.bxslider9').bxSlider({
		minSlides: 2,
		maxSlides: 7,
		slideWidth: 170,
		slideMargin: 15,
		adaptiveHeight: true,
	});

	$('.fancybox').fancybox();
	fixedbtn();
});

(function($){
	$(window).load(function(){

		$(".navbar-nav>li>a,a[href='#top'],a[rel='m_PageScroll2id']").mPageScroll2id({
			layout:"auto",
			offset:90,
			highlightSelector:".navbar-nav>li>a",
			scrollSpeed: 600,
			scrollEasing: "easeInOutQuad",
			scrollingEasing: "easeInOutQuart",
		});

		$("a[rel='next']").click(function(e){
			e.preventDefault();
			var to=$(this).parent().parent("section").next().attr("id");
			$.mPageScroll2id("scrollTo",to);
		});
	});
})(jQuery);

function btTabsOnHoverShow() {
$('.nav-tabs > li ').hover(function() {
  if ($(this).hasClass('hoverblock'))
    return;
  else
    $(this).find('a').tab('show');
});

}

function fixedbtn() {
var navoffeset = $('#secondslide').offset().top;

	$(window).scroll(function(){
		var scrollpos = $(window).scrollTop();
			if (scrollpos >= navoffeset){
				$('.fixed-button').addClass('fixed');
			} else {
				$('.fixed-button').removeClass('fixed');
			}
	});
}

/* (function($){
        $(window).on("load",function(){
            $("a[rel='m_PageScroll2id']").mPageScroll2id();
        });
    })(jQuery); */
