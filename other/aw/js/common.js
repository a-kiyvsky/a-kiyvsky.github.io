$(document).ready(function() {
	$('.succes').hide();
	if ($('#top').length) {
	    var scrollTrigger = 920, // px
	        backToTop = function () {
	            var scrollTop = $(window).scrollTop();
	            if (scrollTop > scrollTrigger) {
	                $('#top').show(300)
	            } else {
	                $('#top').hide(300);
	            }
	        };
	    backToTop();
	    $(window).on('scroll', function () {
	        backToTop();
	    });
	}
	$("#top").click(function () {
		$("body, html").animate({
			scrollTop: 0
		}, 800);
		return false;
	});
  $("#owl-demo").owlCarousel({

      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
			navigationText: ["",""]
      // "singleItem:true" is a shortcut for:
      // items : 1,
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false

  });

	$("#owl-reviews").owlCarousel({
		items : 3,
		itemsCustom : [
        [0, 1],
        [450, 1],
        [600, 1],
        [700, 2],
        [1000, 3]
      ],
			//Pagination
    pagination : true,
    paginationNumbers: false,
  });

	$("#owl-team").owlCarousel({
		items : 4,
		itemsCustom : [
				[0, 1],
				[450, 1],
				[600, 1],
				[700, 2],
				[1000, 4]
			],
		afterAction: function(el){

           //remove class active
           this.$owlItems.removeClass('first')
           this.$owlItems.removeClass('last')

           //add class first and last
           this.$owlItems .eq(this.currentItem).addClass('first');
           this.$owlItems .eq(this.currentItem + (this.owl.visibleItems.length - 1)).addClass('last');
     },
		navigation: true,
		navigationText : ["",""]
	});

	//Кнопка "Наверх"
	//Документация:
	//http://api.jquery.com/scrolltop/
	//http://api.jquery.com/animate/
	$("#top").click(function () {
		$("body, html").animate({
			scrollTop: 0
		}, 800);
		return false;
	});



	$(".form_sender").submit(function() {
		$(this).children('.succes').show(300);
		$.ajax({
			type: "GET",
			url: "mail.php",
			data: $(this).serialize()
		}).done(function() {
			alert("Done");
		});
		return false;
	});
});
