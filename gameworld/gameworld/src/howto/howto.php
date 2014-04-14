<!-- This is the project: Gameworld.

authors: Andi Milhomme, Sybunlong Heng, Sereyrath Nove

-->

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
	<!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>How to</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">

		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="../../css/bootstrap.min.css">
		<link rel="stylesheet" href="../../css/bootstrap-theme.min.css">

		<!--  custom CSS here -->
		<link rel="stylesheet" href="../../css/main.css">

	</head>
	<body>

		<div class="wrapper">

			<?php include('../../php/includes/navbar.php') ?>

			<!--content starts here-->

			<div class="container">

				<section class="row">
					<div class="col-lg-12">
						<h1> Featured devices:</h1>
<!-- 						<a href="nebula/nebula_howto.php"><p> Nebula</p></a> -->

					</div>

				</section>

<!-- References: https://github.com/fancyapps/fancyBox -->
<link rel="stylesheet" href="//frontend.reklamor.com/fancybox/jquery.fancybox.css" media="screen">
<script src="//frontend.reklamor.com/fancybox/jquery.fancybox.js"></script>

<div class="container">
	<div class="row">
		<div class='list-group gallery'>
            
            
            <div class='col-sm-8 col-xs-12 col-md-6 col-lg-6'>
                <a class="thumbnail fancybox" rel="ligthbox" href="nebula/nebula_howto.php">
                    <img class="img-responsive" alt="" src="../../img/howto/Nebula.jpg" />
                    <div class='text-right'>
                        <small class='text-muted'>Nebula</small>
                    </div> <!-- text-right / end -->
                </a>
            </div> <!-- col-6 / end -->
           
            <div class='col-sm-8 col-xs-12 col-md-6 col-lg-6'>
                <a class="thumbnail fancybox" rel="ligthbox" href="http://placehold.it/300x320.png">
                    <img class="img-responsive" alt="" src="../../img/howto/Nes.jpg" />
                    <div class='text-right'>
                        <small class='text-muted'>Nestopedia</small>
                    </div> <!-- text-right / end -->
                </a>
            </div> <!-- col-6 / end -->
            
            
            
            
       </div> <!-- list-group / end -->
	</div> <!-- row / end -->
</div> <!-- container / end -->























				
			<hr>

			<footer>
				<p>
					&copy; GameWorld 2014
				</p>
			</footer>

		</div>
		<!--wrapper-->
		<!--Javascript dependencies and other libraries such as jquery UI-->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script>
			window.jQuery || document.write('<script src="../../js/vendor/jquery-1.10.1.min.js"><\/script>');
		</script>
		<script src="../../js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

		<!--Javascript responsible for responsivness -->
		<script src="../../js/vendor/bootstrap.min.js"></script>
		<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

		<!-- custom javascript-->
		<script src="../../js/main.js"></script>

	</body>
</html>
