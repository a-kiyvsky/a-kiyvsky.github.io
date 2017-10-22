$(document).ready(function() {
	var mnu = $('#sidebar-wrapper'),
		info_block = $(".info-block"),
		material_block = $(".materials-block"),
		mnu_state = 0,
		school_info_state = 0; // 0 - закрыто все, 1 -подробнее, 2 - материалы

	$(".info-block_btn").click(function(){
		if(school_info_state==0 || school_info_state==2){
			school_info_state=1;
			info_block.show(300);
			$(this).addClass( " btn_active " );
		} else if (school_info_state==1) {
			school_info_state=0;
			info_block.hide(300);
			$(this).removeClass( " btn_active " );
		}
	});
	$(".materials-block_btn").click(function(){
		if(school_info_state==0 || school_info_state==1 ){
			school_info_state=2;
			material_block.show(300);
			$(this).addClass( " btn_active " );
		} else if (school_info_state==2) {
			school_info_state=0;
			material_block.hide(300);
			$(this).removeClass( " btn_active " );
		}
	});
	$(".icon_mnu").click(function(){
		if(mnu_state==0){
			mnu_state=1;
			mnu.removeClass( "hidden_mnu" ).addClass( "visible" );
		} else if (mnu_state==1) {
			mnu_state=0;
			mnu.removeClass( "visible" ).addClass( "hidden_mnu" );
		}
	});
	//Таймер обратного отсчета
	//Документация: http://keith-wood.name/countdown.html
	//<div class="countdown" date-time="2015-01-07"></div>
	var austDay = new Date($(".countdown").attr("date-time"));
	$(".countdown").countdown({until: austDay, format: 'yowdHMS'});

	$('select').each(function(){
		$(this).siblings('p').text( $(this).children('option:selected').text() );
	});
	$('select').change(function(){
		$(this).siblings('p').text( $(this).children('option:selected').text() );
	});
	//Попап менеджер FancyBox
	//Документация: http://fancybox.net/howto
	//<a class="fancybox"><img src="image.jpg" /></a>
	//<a class="fancybox" data-fancybox-group="group"><img src="image.jpg" /></a>
	$(".fancybox").fancybox();

	//Навигация по Landing Page
	//$(".top_mnu") - это верхняя панель со ссылками.
	//Ссылки вида <a href="#contacts">Контакты</a>
	$(".top_mnu").navigation();

	//Добавляет классы дочерним блокам .block для анимации
	//Документация: http://imakewebthings.com/jquery-waypoints/
	$(".block").waypoint(function(direction) {
		if (direction === "down") {
			$(".class").addClass("active");
		} else if (direction === "up") {
			$(".class").removeClass("deactive");
		};
	}, {offset: 100});

	//Плавный скролл до блока .div по клику на .scroll
	//Документация: https://github.com/flesler/jquery.scrollTo
	$("a.scroll").click(function() {
		$.scrollTo($(".div"), 800, {
			offset: -90
		});
	});

	//Каруселька
	//Документация: http://owlgraphic.com/owlcarousel/
	var owl = $(".carousel");
	owl.owlCarousel({
		items : 4
	});
	owl.on("mousewheel", ".owl-wrapper", function (e) {
		if (e.deltaY > 0) {
			owl.trigger("owl.prev");
		} else {
			owl.trigger("owl.next");
		}
		e.preventDefault();
	});
	$(".next_button").click(function(){
		owl.trigger("owl.next");
	});
	$(".prev_button").click(function(){
		owl.trigger("owl.prev");
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

	//Аякс отправка форм
	//Документация: http://api.jquery.com/jquery.ajax/
	$("form").submit(function() {
		$.ajax({
			type: "GET",
			url: "mail.php",
			data: $("form").serialize()
		}).done(function() {
			alert("Спасибо за заявку!");
			setTimeout(function() {
				$.fancybox.close();
			}, 1000);
		});
		return false;
	});

});
