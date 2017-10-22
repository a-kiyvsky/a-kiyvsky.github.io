var data = new Date(),
    targetTime = new Date();
    targetTime.setMinutes(targetTime.getMinutes()+08);
    targetTime.setSeconds(targetTime.getSeconds()+47);
var time_left = Math.floor((targetTime.valueOf()-data.valueOf())/1000),
    cimg=1;

function parseTime(time_count){

    var day       = Math.floor((time_count/60/60) / 24);
        left_hour = Math.floor(time_count/60/60);
        mins      = Math.floor((time_count - left_hour*60*60)/60);
        secs      = Math.floor(time_count - left_hour *60*60 - mins*60);
        hour      = Math.floor( (time_count - day*24*60*60) / 60 / 60 );

    if(String(hour).length > 1){
        $('div.hours').text(""+(Math.floor(hour / 10))+""+(hour%10));
      }
    else
      {
        $('div.hours').text("0"+hour%10);
      }

    if(String(mins).length > 1){
        $('div.minutes').text(""+(Math.floor(mins / 10))+""+(mins%10));
      }
    else
      {
        $('div.minutes').text("0"+mins%10);
      }

    if(String(secs).length > 1){
        $('div.seconds').text(""+(Math.floor(secs / 10))+""+(secs%10));
     }
    else
      {
        $('div.seconds').text("0"+secs%10);
      }
  }
      $(document).ready(function(){
        $('.open_modal').click(function() {
        $('.modal_bg').fadeIn(300);
        return false;
      });

      $('.close, .overlay').click(function () {
        $('.modal_bg').fadeOut(300);$("body").css({"overflow":"auto"});
        clearform(".modal_bg .container form");
      });
        setInterval(function(){
          time_left--;
          parseTime(time_left);
          if(time_left <= 0){
            $('div.hours').text("00");
            $('div.seconds').text("00");
            $('div.minutes').text("00");
          }
        }, 1000);
});
