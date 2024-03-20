<?php 
$dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "shop";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
include('session.php');

$error="";

$compid = $_POST['i'];


echo $compid;




unset($_SESSION['compare'][$compid]);
    $_SESSION['compare'] = array_values($_SESSION['compare']);
//print_r($_SESSION['cart']);
     //   print_r($_SESSION['quantity']);
$_SESSION['comp']=$_SESSION['comp']-1;
//echo $_SESSION['c'];
header("Location: compare.php");

?>