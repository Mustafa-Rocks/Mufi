<?php 
$dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "shop";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
include('session.php');
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];
$zip = $_POST['zip'];
$add=$address.",".$city.",".$state.",".$country;
$tot=$_SESSION['item_total'];
$profit=$_SESSION['profit'];
$sql="INSERT INTO transaction( username , total,profit ,address,time,  zip) VALUES('$login_session','$tot' ,'$profit','$add',NOW()  ,'$zip')";
                  
                       if(mysqli_query($conn, $sql))
                       {
                           echo "items added";
                       }
                  
                  $sql_id= "SELECT * FROM transaction WHERE id=(SELECT max(id) FROM transaction) ";
       $res=  $conn->query($sql_id);
            
            if ($res->num_rows > 0) {
                  // output data of each row
                  while($row = $res->fetch_assoc()) {
                    
                      $trans_id=$row["id"];
                  }
              } else {
                  echo "";
                }
                 echo $trans_id; 
                  for($i=0;$i<$_SESSION['c'];$i++)
                  {
                      $l=$_SESSION['cart'][$i];
                      $q=$_SESSION['quantity'][$i];
                      
                  $sql2="INSERT INTO orders(trans_id,item_id,quantity) VALUES ('$trans_id','$l','$q') ";
                  mysqli_query($conn, $sql2);
                   $sqlq="SELECT * FROM item WHERE id=$l ";
                       
                       
                       $res2=  $conn->query($sqlq);
            
            if ($res2->num_rows > 0) {
                  // output data of each row
                  while($roww = $res2->fetch_assoc()) {
                    
                      $iq=$roww["item_quantity"];
                  }
              } else {
                  echo "";
                }
                       $iq=$iq-$q;
$sqlu=" UPDATE item
              SET 
            item_quantity='$iq' 
            
            
            WHERE 
            id = $l ";
                   mysqli_query($conn, $sqlu);   
                  }
//unset($_SESSION['cart']);
//unset($_SESSION['quantity']);
//unset($_SESSION['c']);
//unset($_SESSION['item_total']);
              header("Location: success.php");
?>