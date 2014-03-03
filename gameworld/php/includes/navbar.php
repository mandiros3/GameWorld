<?php


$base= 'http://localhost'; // this is the base/root folder, no need to worry about ../..

// use the $base variable inside your anchor tags        possible use for $_SERVER['DOCUMENT_ROOT']

echo"<!--     Navigation bar starts here. -->
            
    <nav class='navbar navbar-inverse navbar-fixed-top'>
      <div class='container'>
        <div class='navbar-header'>
          <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
          </button>
          <a class='navbar-brand logo-nav' href='$base/index.php'>
          <img class='img-responsive' src=' $base/img/index/logo.png' alt='logo'>
          </a>
        </div>
         
         <!--if the screen is small, it will collapse into a button with menu-->
        <div class='navbar-collapse collapse'>
          <ul class='nav navbar-nav'>
            <li><a href='$base/src/devices/devices.php'>Devices</a></li>
            <li><a href='$base/src/howto/howto.php'>How To</a></li>
            <li><a href='#contact'>Forum</a></li>
            <li class='dropdown'>
              <a href='#' class='dropdown-toggle' data-toggle='dropdown'>Services <b class='caret'></b></a>
              <ul class='dropdown-menu'>
                <li class='dropdown-header'>Services</li>
                <li><a href='#'>Repair</a></li>
                <li class='divider'></li>
                <li><a href='#'>Shop</a></li>
              </ul>
            </li>
          </ul>
           
        </div><!--/.navbar-collapse -->
      </div>
    </nav>";


?>