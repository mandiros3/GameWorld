<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
	<head>
		<title>PS4</title>
		<meta charset="windows-1252">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="../../../css/bootstrap.min.css">
		<link rel="stylesheet" href="../../../css/bootstrap-theme.min.css">

		<!--  custom CSS here -->
		<link rel="stylesheet" href="../../../css/main.css">
	</head>
	<body>
		<?php
		include '../../../php/includes/navbar.php';
 ?>
		<!--the page is divided into two columns 10 and 2 units wide -->
		<div class="container device-page">
			<section class="row">
				<div class= "col-lg-8">

					<h1 class="main-title">Sony PS4 </h1>

					<img src="../../../img/ps4/ps4.jpg" />

					<!-- Navigate between sections, refer to javascript to modify more -->
					<ul class="nav nav-tabs">
						<li class="active">
							<a href="#tab1" data-toggle="tab">Overview</a>
						</li>
						<li>
							<a class='disabled' href="#tab2" data-toggle="tab">Full Specs</a>
						</li>
						<li>
							<a class='disabled' href="#tab3" data-toggle="tab">Reviews</a>
						</li>
					</ul>
					<!-- The contents of the tabs -->

					<div class="tab-content">
						<div class="tab-pane active" id="tab1">

							<div class="panel panel-default">
								<!-- Default panel contents -->
								<div class="panel-heading">
									Features
								</div>
								<div class="panel-body">
									<p>
										Content to be added
									</p>
								</div>

								<!-- Table -->
								<table class="table">
									
									<p>
										The Verge
									</p></a>

								</table>
							</div>

						</div>

						<div class="tab-pane" id="tab2">
							...
						</div>

						<div class="tab-pane" id="tab3>
						</div>
						<div class="tab-pane" id="settings">
						...
						</div>
						</div>

						</div> <!--col-lg-8 -->

						<!-- Side bar, with useful information about the device -->

						<div class="col-lg-4">

						<h2 class="side-title"> What's new?</h2>

						<p>
						The battle for the living room is a cold war no more.  The Sony PlayStation 4 has gone thermonuclear, launching on store shelves November 15.
						Housing some of the most powerful hardware ever to sit before a television, Sony's new console is two sleek slabs of industrial design fused together for one purpose: living room dominance.
						</p>

						<p>
						<strong>Release date </strong> DeC. 25, 2013
						</p>
						<p>
						<strong>Price at launch:</strong> $399.00
						</p>

						<h2 class="side-title"> Did you know ?</h2>

						<ul>
						<li>
						The DualShock controler is completely redesigned
						</li>

						<li>
						Comes with built-in Wi-Fi
						</li>
						<li>
						Has USB 3.0 and a Blu-ray drive just like the XBox
						</li>
						
						<li style="color:red;">
						Will not be backwards compatible with PS3 or original PlayStation games.
						</li>

						</ul>

						</div>

						</section>

						</div>
						<!-- Container -->

						<hr>
						<footer>
						<p>
						&copy; GameWorld 2014
						</p>
						</footer>

						</body>

						<!--Javascript dependencies and other libraries such as jquery UI-->
						<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
						<script>
						window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>');
						</script>
						<script src="../../../js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

						<!--Javascript responsible for responsivness -->
						<script src="../../../js/vendor/bootstrap.min.js"></script>
						<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

						<!-- custom javascript-->
						<script src="../../../js/main.js"></script>

</html>
