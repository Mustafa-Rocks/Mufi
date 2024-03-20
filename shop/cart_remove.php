<?php 
$dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "shop";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
include('session.php');

$error="";

$cartid = $_POST['i'];


echo $cartid;



unset($_SESSION['cart'][$cartid]);
unset($_SESSION['quantity'][$cartid]);
    $_SESSION['cart'] = array_values($_SESSION['cart']);
    $_SESSION['quantity'] = array_values($_SESSION['quantity']);
//print_r($_SESSION['cart']);
     //   print_r($_SESSION['quantity']);
$_SESSION['c']=$_SESSION['c']-1;
//echo $_SESSION['c'];
header("Location: cart.php");

?>