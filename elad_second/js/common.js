$(function() {
	$('.sigContain').each(function(index) {
		var contain = $(this);
		setTimeout(function() {
			contain.addClass('active');
		}, 750 * index);
	})

	$('.collapse').collapse();

	
	$('.owl-carousel').owlCarousel({
		loop:true,
		margin:10,
		nav:false,
		responsive:{
			0:{
				items:1
			},
		}
	})

	var wave1 = $('#wawe1').wavify({
		height: 380,
		bones: 4,
		amplitude: 60,
		color: '#F9F9F9',
		speed: .15
	});

  // var wave2 = $('#wawe2').wavify({
	// 	height: 380,
	// 	bones: 3,
	// 	amplitude: 40,
	// 	color: '#fce98b',
	// 	speed: .25
  // });

});
