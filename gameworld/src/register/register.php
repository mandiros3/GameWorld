<!-- This is the project: Gameworld.

authors: Andi Milhomme, Sybunlong Heng, Sereyrath Nov

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
		<title>Register me</title>
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
	<body>
		<!--[if lt IE 7]>
		<p class="chromeframe">You are using an <strong>outdated</strong> browser.
		Please <a href="http://browsehappy.com/">upgrade your browser</a> or
		<a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->

		<div class="wrapper">
<?php require("../../php/includes/navbar.php"); ?>
			<div class="container">

				<div class="row">

					<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
						<form role="form" method='post' action='register.php'>
							<h2>Register<small>.</small></h2>
							<hr class="colorgraph">
							<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="FirstName" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1">
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="LastName" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2">
									</div>
								</div>
							</div>
							<div class="form-group">
								<input type="text" name="UserName" id="display_name" class="form-control input-lg" placeholder="Username" tabindex="3">
							</div>
							<div class="form-group">
								<input type="email" name="Email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="password" name="Password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="password" name="ConfirmPassword" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
									</div>
								</div>
							</div>

							<hr class="colorgraph">
							<div class="row">
								<div class="col-xs-12 col-md-6">
									<input type='submit' name='submit' value='Register' class="btn btn-primary btn-block btn-lg" tabindex="7">
								</div>
								<div class="col-xs-12 col-md-6">
									<a href='login.php' class="btn btn-success btn-block btn-lg">Log In</a>
								</div>
							</div>
						</form>
					</div>
				</div>

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

<?php require("../../php/includes/registration.php"); ?>
