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
		<title>GameWorld</title>
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
						<h1 style="text-align:center;">Select your favorite device</h1>

					</div>

				</section>

				<section class="row devices-list " style="text-align:center;">
					<div class="col-lg-4">
						<div class="panel panel-warning">
							<div class="panel-heading">
								<h3 class="panel-title">Consoles</h3>
							</div>
							<div class="panel-body">
								<ul style="list-style-type: none;">
									<li class="divider" style="background-color:black; color: white;">
										Sony
									</li>
									<li>
										<a href="">PlayStation4</a>
									</li>
									<li>
										<a href="">PlayStation3</a>
									</li>
									<li>
										<a href="">PlayStation2</a>
									</li>
									<li>
										<a href="">PlayStation( 1st gen.)</a>
									</li>
									<li class="divider"></li>
									<li class="divider" style="background-color:black; color: white;">
										Microsoft
									</li>
									<li>
										<a href="consoles/xbox.php">Xbox One</a>
									</li>
									<li>
										<a href="">Xbox 360</a>
									</li>
									<li>
										<a href="">Xbox(1st gen)</a>
									</li>
									<li class="divider" style="background-color:black; color: white;">
										Nintendo
									</li>
									<li>
										<a href="">Wii U</a>
									</li>
									<li>
										<a href="">Wii</a>
									</li>
									<li>
										<a href="">SNES</a>
									</li>
									<li>
										<a href="">NES</a>
									</li>
									<li class="divider" style="background-color:black; color: white;">
										Sega
									</li>
									<li>
										<a href="">Dreamcast</a>
									</li>
									<li>
										<a href="">NeoGeo</a>
									</li>
									<li>
										<a href="">NeogeoPocket</a>
									</li>
									<li>
										<a href="">MAME</a>
									</li>

								</ul>
							</div>
						</div>

					</div>
					<div class="col-lg-4">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title">Handhelds</h3>
							</div>
							<div class="panel-body">
								<ul>

									<li>
										<a href="">Nintendo DS</a>
									</li>
									<li>
										<a href="">GameBoy</a>
									</li>
									<li>
										<a href="#">IOS</a>
									</li>
									<li>
										<a href="#">Android</a>
									</li>

								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="panel panel-success">
							<div class="panel-heading">
								<h3 class="panel-title">PC</h3>
							</div>
							<div class="panel-body">
								<ul>

									<li>
										<a href="#">Windows</a>
									</li>
									<li>
										<a href="#">Mac</a>
									</li>
									<li>
										<a href="#">Linux</a>
									</li>

								</ul>
							</div>
						</div>
					</div>

				</section>

			</div>

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