<?php
 error_reporting(E_ERROR | E_PARSE);
   $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "shop";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
   session_start();
 
//$_SESSION['c']=0;
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select username from user where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   $user_id=$_SESSION['user_id'];
   if(!isset($_SESSION['login_user'])){
      header("location:home.php");
      die();
   }
?>