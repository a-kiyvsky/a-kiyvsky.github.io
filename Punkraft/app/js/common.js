$(function() {

    var owl = $('.events__carousel');
    owl.owlCarousel({
        loop:true,
        nav:true,
        margin:70,
        responsive:{
            0:{
                items: 1
            },
            600:{
                items: 3
            }
        }
    });
    owl.on('mousewheel', '.owl-stage', function (e) {
        if (e.deltaY>0) {
            owl.trigger('next.owl');
        } else {
            owl.trigger('prev.owl');
        }
        e.preventDefault();
    });

    $("a").click(function(){
        setTimeout(
            GoToSomеWhere($(this).attr('href')
            ), 3000);
        console.log($(this).attr('href'));
        return false;
    });

    function GoToSomеWhere(address) {
        window.location.href = address; // Тут все просто,делаем переход. В качестве доп. параметра - можно передать "_blank" для открытия на новой вкладке
    }



});
