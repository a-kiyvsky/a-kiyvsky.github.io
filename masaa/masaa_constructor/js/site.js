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
      var email = $('.free_form').children('.email'),
          name = $('.free_form').children('.name'),
          phone = $('.free_form').children('.phone'),
          current_step = 0;
          submit = $('.submit_btn');
      if(current_step==0){
        email.hide();
        phone.hide();
      }
      submit.hide();

      setInterval(function(){
        time_left--;
        parseTime(time_left);
        if(time_left <= 0){
          $('div.hours').text("00");
          $('div.seconds').text("00");
          $('div.minutes').text("00");
        }
      }, 1000);
      $('.form_btn').click(function(){
        switch (current_step) {
          case 0:
            name.hide(200);
            email.show(200);
            current_step=1;
            break;
          case 1:
            email.hide(200);
            $(this).hide();
            phone.show(200);
            submit.show(200);
            break;
          case 2:
            alert( 'Перебор' );
            break;
          default:
            break;
        }
      });
    });
