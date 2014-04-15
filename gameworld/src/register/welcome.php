<?php
session_start();

if(!$_SESSION['UserName']){
  header("location: login.php");
}
?>

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
		<title>Profile</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">

		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="../../css/bootstrap.min.css">
		<link rel="stylesheet" href="../../css/bootstrap-theme.min.css">

		<!--  custom CSS here -->
		<link rel="stylesheet" href="../../css/main.css">

		<!--Javascript responsible for responsivness -->

		<script src="../../js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	</head>

	<!-- IMPORTANT:  PUT ALL JAVASCRIPT FILES AT THE BOTTOM -->

	<body>

		<div class="wrapper">
			<?php require("../../php/includes/navbar.php"); ?>

			<div class="container">
				<br>
				<section class="row">
					<div class="col-lg-3">
						<h1 style="color:#FF0000;">Welcome <?php echo $_SESSION['UserName']; ?>   </h1>
						
						<img src="../../img/profile/homer.jpg" alt="..." class="img-rounded">
							
					</div>
					
					<div class="col-lg-9">
						
						<h2> Under development</h2>
						
						<a class='pull-right' href='logout.php'>Logout Here</a></h3>
					</div>
						
				</section>
				
				
			</div>
				</div>
					</div>

			<hr>

			<footer>
				<p>
					&copy; GameWorld 2014
				</p>
			</footer>

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
