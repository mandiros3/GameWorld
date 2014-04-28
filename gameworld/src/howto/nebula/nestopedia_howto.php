<!-- This is the project: Gameworld.

authors: Andi Milhomme, Sybunlong Heng, Sereyrath Nov -

-->
<!DOCTYPE html>


<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>How To</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">

		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="../../../css/bootstrap.min.css">
		<link rel="stylesheet" href="../../../css/bootstrap-theme.min.css">

		<!--  custom CSS here -->
		<link rel="stylesheet" href="../../../css/main.css">
		
		<script src="//code.jquery.com/jquery-1.9.1.js"></script>
	    <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
		 
		 
<!-- 		 Draggable Image -->
		 <style type="text/css">
			
			#Bunlong {
			
			/* padding-left: 170px; */
			position: absolute;
			top: 160px;
			left: 250px;
			z-index: 99;
			
			}
	     </style>
	     <script>
		$(function() {
		$( "#Bunlong" ).draggable();
		});
		</script>
		
		
		<div id="draggable" class="ui-widget-content">
		
			<div id="Bunlong">
			<a href="http://nestopia.sourceforge.net">
				<img src="../../../img/nes/icon.jpg" alt="Texto Alternativo" class="img-circle img-thumbnail">
			</a>
			</div>
		
		</div>
		<!--  End of Draggable Image -->
		
		
		

		<!-- Google Font -->
		<link href='http://fonts.googleapis.com/css?family=Parisienne|Josefin+Sans|Didact+Gothic|Cinzel' rel='stylesheet' type='text/css'>
		
	</head>

	<body bgcolor="#FFFFFF">

		<div class="wrapper">

			<?php
			include '../../../php/includes/navbar.php'; ?>
		
<!-- Start Title of the page + icon 	 -->
<!--
<div class="container">
	<div class="row destacados">
		<div class="col-md-4">
    		<div>
			</div>
		</div>

		<div class="col-md-4">

		
			<div>
			<a href="http://nebula.emulatronia.com">
				<img src="../../../img/nes/icon.jpg" alt="Texto Alternativo" class="img-circle img-thumbnail">
				<h1>
				Nestopia
			    </h1>
			</a>
			</div>
		</div>

		<div class="col-md-4">
			<div>

			</div>
		</div>
	</div>
</div>
-->
		

<br><br><!-- Start Carousel Effect  -->

<div class="container">
	<div class="row">
		<!-- Carousel -->
    	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators --> 
			<ol class="carousel-indicators">
			  	<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>

			<div class="carousel-inner">
			    <div class="item active">
			    	<img src="../../../img/nes/1.jpg" alt="First slide">
                 
                    
			    </div>
			    <div class="item">
			    	<img src="../../../img/nes/2.jpg" alt="Second slide">
			    	
                    <div class="header-text hidden-xs">
                                           </div>
			    </div>
			    <div class="item">
			    	<img src="../../../img/nes/3.jpg" alt="Third slide">
			    	
                    <div class="header-text hidden-xs">
                                           </div>
			    </div>
			</div>
			
			<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		    	<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		    	<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div>
	</div>
</div>

<!-- Start Carousel Effect  -->


				<br><br>
				<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------ -->
				<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h3 class="panel-title">Requirements</h3>
								
							</div>
				
				<!-- ===== Magnify Photo ===== -->
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="mag">
								<h2 > Computers </h2>
								<br>
								<a href="http://bestbuy.com/" class="btn btn-default btn-success btn-xs active" target="_blank"> Link</a>

								<img data-toggle="magnify" src="../../../img/prereq/1.png" alt="">
							</div>
						</div>
						<!--/span-->
						<div class="col-md-4">
							<div class="mag">
								<h2> Controller </h2>
								<br />
								<a href="http://www.ebay.com/itm/black-twin-shock-game-controller-joypad-for-sony-playstation-2-ps2-/111217527330?pt=US_Video_Game_Controllers&hash=item19e514ca22" class="btn btn-default btn-success btn-xs active" target="_blank" > Link</a>
								<img data-toggle="magnify" src="../../../img/prereq/2.png" alt="">
							</div>
						</div>
						<!--/span-->
						<div class="col-md-4">
							<div class="mag">
								<h2> Adapters </h2>
								<br>
								<a href="http://www.ebay.com/itm/PS1-PS2-PSX-to-PC-USB-Dual-Controller-Adapter-Converter-/170854914674?pt=US_Video_Game_Cables_Adapters&hash=item27c7bf1a72" class="btn btn-default btn-success btn-xs active" target="_blank"> Link</a>
								<img data-toggle="magnify" src="../../../img/prereq/3.png" alt="">
							</div>
						</div>
						<!--/span-->
					</div>
					<!--/row-->
					
				</div>
			</div>
		</div>

		<br>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title">Instructions</h3>
							<span class="pull-right"> <!-- Tabs -->
								<ul class="nav panel-tabs">
									<li class="active">
										<a href="#tab1" data-toggle="tab">Details</a>
									</li>
									<li>
										<a href="#tab2" data-toggle="tab">FAQ</a>
									</li>
									<li>
										<a href="#tab3" data-toggle="tab">Contact <!-- <em style="color:red;"> (Registered users only)</em> --></a>
									</li>

								</ul> </span>
						</div>
						<div class="panel-body">
							<div class="tab-content">
								<div class="tab-pane active" id="tab1">
									<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------ -->
									<!-- ===== Steps ===== -->
									<br>
									<p>
										<b>1.Get The Emulator</b>
									</p>

									<p>
										· Download Nestopia Latest Version <a href="http://nestopia.sourceforge.net" target="_blank" >http://nestopia.sourceforge.net</a>
									</p>
									<p>
										· Install Nestopia
									</p>
									
									<br><hr><br>
									

									<p>
										<b>2. Get The Roms</b>
									</p>

									<p>
										· Download Roms at <a href="http://coolrom.com/roms/nes/" target="_blank" >http://coolrom.com/roms/nes/</a>
									</p>
									
									<p>
									
									<a href="#" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-remove"></span> Warning</a>
									
									
										Please only download the roms that you own.
									</p>

									<br><hr><br>

									<p>
										<b>3. Load the downloaded roms </b>
									</p>

									<p>
										· File > Open > Browse for the '.NES' file that you just downloaded.
									</p>

									
									<br><hr><br>

									<p>
										<b>4. Configure the Controller</b>
									</p>

									<p>
										· Load The Game First
									</p>

									<p>
										· Goto <b>Option</b> &gt; <b>Input</b> &gt; <b>Player 1</b>
									</p>

									
									<p>
										<b>Cheat Code</b>
									</p>

									<p>
										<a href="http://www.gamefaqs.com" target="_blank" >http://www.gamefaqs.com</a>
									</p>

								</div>
								<div class="tab-pane" id="tab2">

									<p>
										<b>Q: I can’t load my roms. What did I do wrong ?</b>
									</p>

									<p>
										A: Did you install the bio yet ? If not, please do so.
									</p>

									<p>
										<b>Q: Do we need to unzip the ROM after download them?</b>
									</p>

									<p>
										A: No, you don't need to. You just need to place them in the right folder.
									</p>

									<p>
										<b>Q: How do I configure the controller to work with Nebula ?</b>
									</p>

									<p>
										A: First, you need an adapter and a PS2 controller or any other type of controller is fine. Then, you just need to follow the fourth step in the details. tab.
									</p>
								</div>
								<div class="tab-pane" id="tab3">

									<div class="container">
										<div class="row">
											<div class="col-sm-4">
												<h3>Drop us a line!</h3>
												<hr>
												<address>
													<strong>Bunlong Heng</strong>
													<br>
													<strong>Email:</strong><a href="mailto:#"> Bunlong_Heng@student.uml.edu</a>
													<br>
													<strong>Phone:</strong> (978)677-0861
												</address>
												<address>
													<strong>Andi Milhhome</strong>
													<br>
													<strong>Email:</strong><a href="mailto:#"> Andi_Milhhome@student.uml.edu</a>
													<br>
													<strong>Phone:</strong> (617)820-3596												</address>
												<address>
													<strong>Sereyrath Nov</strong>
													<br>
													<strong>Email:</strong><a href="mailto:#"> Sereyrath_Nov@student.uml.edu</a>
													<br>
													<strong>Phone:</strong>(781)215-3158
												</address>

											</div>

											<div class="col-sm-7 contact-form">
												<form id="contact" method="post" action="contactformprocess_gameworld.php" class="form" role="form">
													<div class="row">
														<div class="col-xs-6 col-md-6 form-group">
															<input class="form-control" id="name" name="name" placeholder="Name" type="text" required autofocus />
														</div>
														<div class="col-xs-6 col-md-6 form-group">
															<input class="form-control" id="email" name="email" placeholder="Email" type="email" required />
														</div>
														<div class="col-xs-6 col-md-6 form-group">
															<input class="form-control" id="subject" name="subject" placeholder="Subject" type="subject" required />
														</div>
													</div>
													<textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea>
													<br />
													<div class="row">
														<div class="col-xs-12 col-md-12 form-group">
															<button class="btn btn-primary pull-right" type="submit">
																Submit
															</button>
												</form>
											</div>
										</div>

									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------ -->
			<!-- ===== Footer ===== -->
			<hr>
			<footer>
				<p>
					&copy; GameWorld 2014
				</p>
			</footer>
		</div>
		<!--wrapper-->

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
	
	<!-- 	ContentFlow -->
		<script language="JavaScript" type="text/javascript" src="../../../js/ContentFlow/contentflow.js"></script>
		<script language="JavaScript" type="text/javascript" src="../../../js/magnify.js"></script>
	
	
	
</html>
