<?php
// session_start();
// if(!isset($_SESSION["login_user"])){
//     unset($_SESSION['login_user']);
//     session_destroy();
//     $_SESSION = array();
// }
// header("location: index.php"); // Redirecting To Home Page

 
      session_start();
      session_destroy();
      header("location: index.php");//Your code here

