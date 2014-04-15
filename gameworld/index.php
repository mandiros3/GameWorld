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
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/bootstrap-theme.min.css">

      <!--  custom CSS here, avoid inline CSS -->
      <link rel="stylesheet" href="css/main.css">
      <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">

      <!-- IMPORTANT:  PUT ALL JAVASCRIPT FILES AT THE BOTTOM -->


   </head>
   <body>

      <div class="wrapper"> 


       <!-- Use php include for the other pages -->

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
            <li><a href="src/howto/howto.php">Set Up</a></li>
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
           
          <div class="navbar-form navbar-right">
          
             <!--To conserve space, the sign in button will use a dropdown menu-->
             
            <a  class="btn btn-success dropdown-toggle" 
                data-toggle="dropdown" href="#" role="button">Log In <b class="caret"> </b></a>
             <div class="dropdown-menu"> 
             <form style="margin: 0px" accept-charset="UTF-8" action="index.php" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden"  />
                   <input name="authenticity_token" type="hidden"></div>
                 <fieldset class='textbox' style="padding:10px">
                   <input style="margin-top: 8px" type="text" placeholder="Username" name="UserName" />
                   <input style="margin-top: 8px" type="password" placeholder="Passsword" name="Password" />
                   <input class="btn-primary" name="commit" type="submit" value="Log In" />
                   <p>Remember Me <input id="user_remember_me" style="float: left; margin-right: 10px;" type="checkbox" name="user[remember_me]" value="1" /> </p>
                   
                 </fieldset>
                <a href="#"> <span class=label>Forgot password? (Not yet implemented) </span></a>
               </form>
             </div>
             
             
              <a  class="btn btn-warning" href="src/register/register.php" role="button">Register</a>
          </div>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>  <!-- End of Navigation bar -->

         <!-- This is our call to action -->
         <div class="jumbotron" id="header">
            <div class="container" >
               <h1>Let's play some games</h1>
               <p>Don't look elsewhere! You have reached the most fantastic place on the web.</p>

               <div class="container sEngine">
                  <section class="row">
                     <div class="col-lg-12">
                        <h1 align="center" style="color: white;">Find your device</h1>


                        <!--search field-->

                        <div class="input-group search-bar">
                           <input type="text" class="form-control" id="tags">
                           <span class="input-group-btn">
                              <button class="btn btn-danger" type="button">Go!</button>
                           </span>
                        </div>

                     </div>



                  </section>
               </div>
            </div>
         </div>

         <!--This container contains the 3 hot devices/titles-->

         <div class="container">
            <!-- row of columns -->


            <section class="row">
               <div class="col-lg-12">

                  <h1 style='text-align: center; color:red;'>What's hot</h1>
<hr class="featurette-divider">
               </div>


               <div class="col-lg-4">

                  <h2 class="hot">Xbox One</h2>

                  <img src="img/index/xbox.jpg" alt="..." class="img-rounded">
                  <p><a class="btn btn-info" href="src/devices/consoles/xbox.php">See more &raquo;</a></p>
               </div>
               <div class="col-lg-4">
                  <h2 class="hot">PS4</h2>
                  <img src="img/index/ps4.jpg" alt="..." class="img-rounded">
                  <p class="chaud"><a class="btn btn-info" href="src/devices/consoles/ps4.php">See more &raquo;</a></p>
               </div>
               <div class="col-lg-4">
                  <h2 class="hot" >Wii U</h2>
                  <img src="img/index/wiu.jpg" alt="..." class="img-rounded">
                  <p style ="text-align: right;"><a class="btn btn-info" href="src/devices/consoles/wiu.php">See more  &raquo;</a></p>
               </div>

            </section> <!--well-->
         </div>

         <hr>

         <footer>
            <p>&copy; GameWorld 2014</p>
         </footer>


      </div> <!--wrapper-->  
      
       <!--Javascript dependencies and other libraries such as jquery UI-->
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>');</script>
      <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

      <!--Javascript responsible for responsivness -->
      <script src="js/vendor/bootstrap.min.js"></script>
      <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

      <!-- custom javascript-->
      <script src="js/auto.js"></script>
      <script src="js/main.js"></script>
      
      
   </body>
</html>

<?php 

$link = mysql_connect("localhost","snov","sn4mlc5");
mysql_select_db("snov");

if(isset($_POST['login'])){

  $Password = $_POST['Password'];
  $UserName = $_POST['UserName'];

  $check_user = "select * from registered_users where Password='$Password' AND UserName='$UserName'";

  $run = mysql_query($check_user);

  if(mysql_num_rows($run)>0) {

    $_SESSION['UserName']=$UserName;
    
    echo "<script>window.open('src/register/welcome.php','_self')</script>";
  }
  else {
    echo "<script>alert('UserName or Password is incorrect')</script>";
  }
}

?>