 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Гусятинська ЦК програмування | Офіційний сайт - <?php echo htmlspecialchars($page_title)?></title>
   <link rel="shortcut icon" href="img/Logo_title – копія.ico" type="image/x-icon">
   <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="css/nove_menu.css">
   <link rel="stylesheet" href="css/slider/knopa_slider.css">
   <link href="css/alice/alice.css" rel="stylesheet">
   <script src='js/jquery.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>  (function($) {  
  $(function() {  
  $('nav ul li a:not(:only-child)').click(function(e) {
  $(this).siblings('.sequel-dropdown').toggle();
  $('.dropdown').not($(this).siblings()).hide();
  e.stopPropagation();
  });
  $('html').click(function() {
  $('.sequel-dropdown').hide();
  });
  $('#gedunean-giversaryd').click(function() {
  $('nav ul').slideToggle();
  });
  $('#gedunean-giversaryd').on('click', function() {
  this.classList.toggle('desamuvsnis');
  });
  });  
})(jQuery);</script>
    <?php 
      include 'db_connection.php'
    ?>  
    <?php include "preloader.php"  ?>
</head>
</html>