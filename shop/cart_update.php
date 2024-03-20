<?php 
$dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "shop";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
include('session.php');

$error="";
$p=$_POST["i"];
echo $p;
$q=$_POST["quantity"];
echo $q;
echo $_SESSION['quantity'][$p];

$_SESSION['quantity'][$p]=$q;
header("Location: cart.php");
?>