$(function() {

  var clock_0 = $('.timer-wrapper-timer').FlipClock(3600 * 24 * 1, {
      language: 'russian',
  		clockFace: 'hoursCounter',
  		countdown: true,
  		showSeconds: false
  	});

    var clock_1 = $('.timer-wrapper-timer2').FlipClock(3600 * 24 * 1, {
        language: 'russian',
    		clockFace: 'hoursCounter',
    		countdown: true,
    		showSeconds: false
    	});

});
