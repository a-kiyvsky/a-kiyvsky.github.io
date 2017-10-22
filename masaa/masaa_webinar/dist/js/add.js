var player;
var play_state = 0; // 0 - fist start; 1 - play; 2 - pause;
var quality;
var time_update_interval = 0;
function onYouTubeIframeAPIReady() {
  player = new YT.Player('video-placeholder', {
    width: 600,
    height: 400,
    videoId: 'Xa0Q0J5tOP0',
    playerVars: {
      color: 'white',
      controls: "0",
      rel: 0,
      allowfullscreen: "none",
      autohide: 1,
    },
    events: {
      onReady: initialize
    }
  });
}


function initialize(){
  // Update the controls on load
  updateTimerDisplay();
  updateProgressBar();

  // Clear any old interval.
  clearInterval(time_update_interval);

  // Start interval to update elapsed time display and
  // the elapsed part of the progress bar every second.
  time_update_interval = setInterval(function () {
    updateTimerDisplay();
    updateProgressBar();
  }, 1000)
}

// This function is called by initialize()
function updateTimerDisplay(){
  // Update current time text display.
  $('#current-time').text(formatTime( player.getCurrentTime() ));
  $('#duration').text(formatTime( player.getDuration() ));
}

function formatTime(time){
  time = Math.round(time);

  var minutes = Math.floor(time / 60),
  seconds = time - minutes * 60;

  seconds = seconds < 10 ? '0' + seconds : seconds;

  return minutes + ":" + seconds;
}


$('#progress-bar').on('mouseup touchend', function (e) {

  // Calculate the new time for the video.
  // new time in seconds = total duration in seconds * ( value of range input / 100 )
  var newTime = player.getDuration() * (e.target.value / 100);

  // Skip video to new time.
  player.seekTo(newTime);

});

// This function is called by initialize()
function updateProgressBar(){
  // Update the value of our progress bar accordingly.
  $('#progress-bar').val((player.getCurrentTime() / player.getDuration()) * 100);
}

$('.youtube_lock').on('click', function () {
  if(play_state == 0) {
    player.playVideo();
    play_state = 1;
    setTimeout(console_qulity, 3000);
    $(".play-btn").html("<i class=\"fa fa-pause-circle\" aria-hidden=\"true\"></i>");
  } else if(play_state == 1) {
    player.pauseVideo();
    $(".play-btn").html("<i class=\"fa fa-play-circle\" aria-hidden=\"true\"></i>");
    play_state = 2;
  } else if (play_state == 2) {
    player.playVideo();
    play_state = 1;
    $(".play-btn").html("<i class=\"fa fa-pause-circle\" aria-hidden=\"true\"></i>");
  }

});

$('.play-btn').on('click', function () {
  if(play_state == 0) {
    player.playVideo();
    play_state = 1;
    setTimeout(console_qulity, 3000);
    $(this).html("<i class=\"fa fa-pause-circle\" aria-hidden=\"true\"></i>");
  } else if(play_state == 1) {
    player.pauseVideo();
    $(this).html("<i class=\"fa fa-play-circle\" aria-hidden=\"true\"></i>");
    play_state = 2;
  } else if (play_state == 2) {
    player.playVideo();
    play_state = 1;
    $(this).html("<i class=\"fa fa-pause-circle\" aria-hidden=\"true\"></i>");
  }

});

function console_qulity() {
  quality = player.getAvailableQualityLevels();
  console.log(quality);
  for(i = 0; i < quality.length; i++) {
    $("#quality").append("<option>"+quality[i]+"</option>");
  }
};

$('#quality').on('change', function () {
  player.setPlaybackQuality($(this).val());
});

$('.hide-chat').on('click', function () {
  $('.main-sidebar').removeClass("show_m");
  $('.main-sidebar').addClass("hidden_m");
});

$('.show-chat').on('click', function () {
  $('.main-sidebar').removeClass("hidden_m");
  $('.main-sidebar').addClass("show_m");
});
var menu = 0;
$('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
  $(this).toggleClass('open');
  if(menu == 0) {
    $(".mobile-container").fadeIn(300);
    menu = 1;
  } else {
    $(".mobile-container").fadeOut(300);
    menu = 0;
  }
});

$('.mute').on('click', function() {
    var mute_toggle = $(this);

    if(player.isMuted()){
        player.unMute();
        mute_toggle.html('<i class="fa fa-volume-up" aria-hidden="true"></i>');
        $('#audio-bar').val(100);
    }
    else{
        player.mute();
        mute_toggle.html('<i class="fa fa-volume-off" aria-hidden="true"></i>');
        $('#audio-bar').val(0);
    }
});

$('#audio-bar').on('mouseup touchend', function (e) {

  player.setVolume($(this).val());

});

// To get the current volume of the player use this method:
// player.getVolume()
// To get the actual video quality of the running video use this method:
// player.getPlaybackQuality()

// To get a list of the available quality formats for a video use:
// player.getAvailableQualityLevels()
