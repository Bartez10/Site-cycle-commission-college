$('.toggle1').focusin(function() {
  $(this).addClass('active');
  $('.search1').addClass('move').focus();
});

$('.toggle1').focusout(function() {
  $(this).removeClass('active').val("");
  $('.search1').removeClass('move');
});