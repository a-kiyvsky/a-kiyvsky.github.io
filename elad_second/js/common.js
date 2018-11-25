$(function() {
	$('.sigContain').each(function(index) {
		var contain = $(this);
		setTimeout(function() {
			contain.addClass('active');
		}, 750 * index);
	});

	$('.collapse').collapse();


	$('.owl-carousel').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		dots: false,
		responsive:{
			0:{
				items:1
			},
		}
	});

	var wave1 = $('#wawe1').wavify({
		height: 380,
		bones: 4,
		amplitude: 60,
		color: '#F9F9F9',
		speed: .15
	});

});

function validateEmail($email) {
	let emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	return ($email.length > 0 && emailReg.test($email));
}

$('.form--clientsPortal').submit(function(e) {
	if(!validateEmail($('#email'))) {
		$('#email').addClass('error');
	}
	e.preventDefault();
});

$('#email').keypress(function() {
	$(this).removeClass('error');
});
