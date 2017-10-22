var time_left_timer = Math.floor(time_left / 1000),
    day = Math.floor((time_left_timer / 60 / 60) / 24),
    left_hour = Math.floor(time_left_timer / 60 / 60),
    mins = Math.floor((time_left_timer - left_hour * 60 * 60) / 60),
    secs = Math.floor(time_left_timer - left_hour * 60 * 60 - mins * 60),
    hour = Math.floor((time_left_timer - day * 24 * 60 * 60) / 60 / 60);

$(document).ready(function () {
    $('.scroll_to, header nav a').on('click', function (e) {
        $('html, body').animate({scrollTop: $($(this).attr('href')).offset().top}, 2000);
        return false;
    });
    tz = new Date().getTimezoneOffset() / 60;
    $('input[name=timezone]').val(tz);
    var until = new Date();
    until.setMinutes(until.getMinutes() + mins);
    until.setSeconds(until.getSeconds() + secs);
    $('#countdown_dashboard').countDown({
        targetDate: {
            'day': until.getDate(),
            'month': until.getMonth(),
            'year': until.getFullYear(),
            'hour': until.getHours(),
            'min': until.getMinutes(),
            'sec': until.getSeconds()
        }
    });
});