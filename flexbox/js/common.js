$(function() {
  $(document).ready(function(){
  	$('#nav-icon').click(function(){
  		$(this).toggleClass('open');
      $('.collapsed-mobile').toggleClass('collapse');
  	});
  });
});
