<?php 
$dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "shop";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
include('session.php');

$error="";

$id = $_GET['data'];
//echo $id;
$sql="DELETE FROM item WHERE id=$id";
$sql2="DELETE FROM images WHERE item_id=$id";
mysqli_query($conn,$sql);
mysqli_query($conn,$sql2);
$sql_id=("SELECT file_name FROM images WHERE item_id=$id");
$res=  $conn->query($sql_id);
            
            if ($res->num_rows > 0) {
                  // output data of each row
                  while($row = $res->fetch_assoc()) {
                    
                      $file_name=$row["file_name"];
                  }
              } else {
                  echo "";
                }
//echo $file_name;
mysqli_query($conn,$sql);
mysqli_query($conn,$sql2);
unlink("uploads/".$file_name);
//$query3=mysqli_query($conn, "SELECT * FROM images WHERE item_id=$id") or die(mysqli_error());
  //      $fetch=mysqli_fetch_array($query3);
 //
   //     $location=$fetch['location'];
 
     //   if(unlink($location)){
       //     mysqli_query($conn, "DELETE FROM images WHERE item_id=$id") or die(mysqli_error());


        //}
//$res=mysql_query("SELECT file_name FROM images WHERE item_id=$id");





header("Location: inventory.php");
?>