<?php

echo '<!--     Navigation bar starts here. -->
            
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand logo-nav" href="index.html">
          <img class="img-responsive" src="img/index/logo.png" alt="logo">
          </a>
        </div>
         
         <!--if the screen is small, it will collapse into a button with menu-->
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="src/devices/devices.html">Devices</a></li>
            <li><a href="src/howto/nebula/howto.html">How To</a></li>
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
    </nav> ';


?>