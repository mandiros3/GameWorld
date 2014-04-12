<!-- This is the project: Gameworld.

authors: Andi Milhomme, Sybunlong Heng, Sereyrath Nove

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
           
          <div class="navbar-form navbar-right">
          
             <!--To conserve space, the sign in button will use a dropdown menu-->
             
            <a  class="btn btn-success" href="src/register/login.php" role="button">Log In</a>

               
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

               </div>


               <div class="col-lg-4">

                  <h2>Xbox One</h2>

                  <img src="img/index/xbox.jpg" alt="..." class="img-rounded">
                  <p><a class="btn btn-info" href="src/devices/consoles/xbox.php">See more &raquo;</a></p>
               </div>
               <div class="col-lg-4">
                  <h2>PS4</h2>
                  <img src="img/index/ps4.jpg" alt="..." class="img-rounded">
                  <p><a class="btn btn-info" href="#">See more &raquo;</a></p>
               </div>
               <div class="col-lg-4">
                  <h2>Wii U</h2>
                  <img src="img/index/wiu.jpg" alt="..." class="img-rounded">
                  <p><a class="btn btn-info" href="#">See more  &raquo;</a></p>
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
