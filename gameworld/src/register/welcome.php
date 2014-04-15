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
            
    	<?php require("../../php/includes/navbar.php"); ?>

<b><br>Welcome<br></b>

<font color='red' size='4'><?php echo $_SESSION['UserName']; ?></font>
<h3 align='right'><a href='logout.php'>Logout Here</a></h3>
</body>
</html>
