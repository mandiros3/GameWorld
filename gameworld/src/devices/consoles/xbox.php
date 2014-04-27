<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
	<head>
		<title>Xbox One</title>
		<meta charset="windows-1252">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="../../../css/bootstrap.min.css">
		<link rel="stylesheet" href="../../../css/bootstrap-theme.min.css">

		<!--  custom CSS here -->
		<link rel="stylesheet" href="../../../css/main.css">
	</head>
	<body>
		<?php
			include '../../../php/includes/navbar.php'; ?>
		<!--the page is divided into two columns 10 and 2 units wide -->
		<div class="container device-page">
			<section class="row">
				<div class= "col-lg-8">

					<h1 class="main-title">Microsoft Xbox One </h1>

					<img src="../../../img/xbox/xbox-one.jpg" />



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
						Microsoft's push to take over the living room,
						the Xbox One places a bigger than ever importance on entertainment in addition to gaming.
						It uses voice recognition to control live TV and switch between apps or games,
						and the new Kinect sensor enables gestures to control content, even displaying
						apps side-by-side in Snap Mode like in Windows 8. The Xbox One features an in-game DVR feature to
						record and share game footage from the system's built-in 500GB HDD,
						and is powered by an 8-core processor and 8GB of RAM.
					</p>

					<p>
						<strong>Release date </strong> Nov. 22, 2013
					</p>
					<p>
						<strong>Price at launch:</strong> $499.00
					</p>

					<h2 class="side-title"> Did you know ?</h2>

					<ul>
						<li>
							Every Xbox One includes the "next generation Kinect"
						</li>

						<li>
							Comes with built-in Wi-Fi
						</li>
						<li>
							Has USB 3.0 and a Blu-ray drive
						</li>
						<li>
							Runs on the same kernel as Windows 8
						</li>
						<li style="color:red;">
							Will not be backwards compatible with Xbox 360 or original Xbox games.
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
