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
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->


   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <title>Welcome Page</title>
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


<style type='text/css'>
   body {
   background:url('NewYear2014.jpg');
   }
</style>

<body>

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
           
          <!-- Login/Register Button --> 
          <div class="navbar-form navbar-right">   
            <a  class="btn btn-success" href="src/register/login.php" role="button">Log In</a>     
            <a  class="btn btn-warning" href="src/register/register.php" role="button">Register</a>
          </div>

        </div><!--/.navbar-collapse -->
      </div>
    </nav>  <!-- End of Navigation bar -->

<b><br>Welcome<br></b>

<font color='red' size='4'><?php echo $_SESSION['UserName']; ?></font>
<h3 align='right'><a href='logout.php'>Logout Here</a></h3>
</body>
</html>

