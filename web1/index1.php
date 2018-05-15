<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<script src="js/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="js/slick.js"></script>
<script src="js/js/bootstrap.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">

<div class="container">
  <h2>Our  Partners</h2>
   <section class="customer-logos slider">
      <div class="slide"><img src="img/bbp.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg"></div>
   </section>

   <div class="container">
   	
   </div>

   <?php include("index2.php"); ?>
</div>
<center><h1>prueba logos</h1></center>



<?php include("index2.php"); ?>



</body>
<script type="text/javascript">
	$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
</script>
</html>