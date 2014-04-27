<!-- This is the project: Gameworld.

authors: Andi Milhomme, Sybunlong Heng, Sereyrath Nov

-->

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->


   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <title>GameWorld</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width">

      <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="../../css/bootstrap.min.css">


      <style>


         body {
            padding-top: 50px;
            padding-bottom: 20px;
         }
      </style>
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


<!--     Navigation bar starts here. -->
            
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
           <a class="navbar-brand logo-nav" href="index.php">
          <img class="img-responsive" src="img/index/logo.png" alt="logo">
          </a>
        </div>
         
         <!--if the screen is small, it will collapse into a button with menu-->
        <div class="navbar-collapse collapse">

          <ul class="nav navbar-nav">
             <li><a href="src/devices/devices.php">Devices</a></li>
            <li><a href="src/howto/howto.php">How To</a></li>
            <li><a href="#contact">Forum</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="dropdown-header">Services</li>
                <li><a href="#">Repair</a></li>
                <li class="divider"></li>
                <li><a href="#">Shop</a></li>
              </ul>
            </li>
          </ul>
           
          

        </div><!--/.navbar-collapse -->
      </div>
    </nav>  <!-- End of Navigation bar -->

<div class="container">
   
  
   

<div class="row">
  
   
   
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form role="form" method='post' action='register.php'>
			<h2>Log In<small>.</small></h2>
			<hr class="colorgraph">
		
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
				<div class="col-xs-12 col-md-6"><input type='submit' name='submit' value='Register' class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
				<div class="col-xs-12 col-md-6"><a href='login.php' class="btn btn-success btn-block btn-lg">Log In</a></div>
			</div>
		</form>
	</div>
</div>

</div>
        


         <hr>

         <footer>
            <p>&copy; GameWorld 2014</p>
         </footer>



      </div> <!--wrapper-->

      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="../../js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

      <script src="../../js/vendor/bootstrap.min.js"></script>

      <script src="../../js/main.js"></script>

      <script>
         var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']];
         (function(d, t) {
            var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
            g.src = '//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g, s)
         }(document, 'script'));
      </script>
   </body>
</html>

<?php

$link = mysql_connect("localhost","snov","sn4mlc5");
mysql_select_db("snov");

   if(isset($_POST['submit'])) {
     
     $FirstName = $_POST['FirstName'];
     $LastName = $_POST['LastName'];
     $UserName = $_POST['UserName'];
     $Email = $_POST['Email'];
     $Password = $_POST['Password'];
     $ConfirmPassword = $_POST['ConfirmPassword'];

     if($FirstName==''){
       echo "<script>alert('Please enter your first name!')</script>";
       exit();
     }

     if($LastName==''){
       echo "<script>alert('Please enter your last name!')</script>";
       exit();
     }

     if($UserName==''){
       echo "<script>alert('Please enter your username!')</script>";
       exit();
     }

	if($Email==''){
       echo "<script>alert('Please enter your email address!')</script>";
       exit();
     }

      if($Password==''){
       echo "<script>alert('Please enter your password!')</script>";
       exit();
     }

      if($ConfirmPassword==''){
       echo "<script>alert('Please confirm your password!')</script>";
       exit();
     }

     if($_POST['Password'] != $_POST['ConfirmPassword']){ 
      echo "<script>alert('Your passwords did not match.')</script>"; 
      exit(); 
    } 

      $check_username = "select * from registered_users where UserName='$UserName'";

      $run = mysql_query($check_username);
   
      if(mysql_num_rows($run) > 0) {
		echo "<script>alert('Username $UserName is already exist in our database, Plesae enter a different username')</script>";
		exit();
      }

      $query = "insert into registered_users (FirstName, LastName, UserName, Email, Password, ConfirmPassword) values ('$FirstName', '$LastName', '$UserName', '$Email', '$Password', '$ConfirmPassword')";
      if(mysql_query($query)){

		echo "<script>window.open('welcome.php','_self')('Registration Successful')</script>";
      }
   }

?>
