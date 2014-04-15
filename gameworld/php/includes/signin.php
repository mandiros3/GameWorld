<?php 
session_start(); 
$link = mysql_connect("localhost","snov","sn4mlc5");
mysql_select_db("snov");

if(isset($_POST['login'])){

  $Password = $_POST['Password'];
  $UserName = $_POST['UserName'];

  $check_user = "select * from registered_users where Password='$Password' AND UserName='$UserName'";

  $run = mysql_query($check_user);

  if(mysql_num_rows($run)>0) {

    $_SESSION['UserName']=$UserName;
    
    echo "<script>window.open('welcome.php','_self')</script>";
  }
  else {
    echo "<script>alert('UserName or Password is incorrect')</script>";
  }
}

?>