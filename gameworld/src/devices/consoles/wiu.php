<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
	<head>
		<title>Wiu</title>
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

					<h1 class="main-title">Nintendo Wii U </h1>

					<img src="../../../img/wiu/wiu.jpg" />

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
								</div>

								<!-- Table -->
								<table class="table">
									

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
						The Wii U offers a unique two-screen gaming experience on a tablet controller dubbed the GamePad. 
						It's the first-ever HD Nintendo gaming system that offers gameplay for up to five people on select games. 
						The Wii U is also fully backward compatible with old Wii games and controllers. 
						Off-TV play on select games allows for placeshifting play without the need for a TV.
						</p>

						<p>
						<strong>Release date </strong> Nov. 18, 2013
						</p>
						<p>
						<strong>Price at launch:</strong> $299.99
						</p>

						<h2 class="side-title"> Did you know ?</h2>

						<ul>
						<li>
						This is an entirely separate device from the Wii.
						</li>

						<li>
						The Wii U is not an add-on for the current Wii.
						</li>
						<li>
						The Wii U will play original Wii games.
						</li>
						<li>
						Runs on the same kernel as Windows 8
						</li>
						<li style="color:red;">
						The Wii U controller does not work with the original Wii.
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
