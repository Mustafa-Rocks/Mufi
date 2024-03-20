<?php

require 'config.php';

include('session.php');

require 'razorpay-php/Razorpay.php';
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false) {
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature'],
        );

        $api->utility->verifyPaymentSignature($attributes);
    } catch (SignatureVerificationError $e) {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true) {

    $razorpay_order_id = $_SESSION['razorpay_order_id'];
    $razorpay_payment_id = $_POST['razorpay_payment_id'];
    
    
    
    

    
$tot=   $_SESSION['tot'];
$profit=$_SESSION['profit'];
$add=$_SESSION['add'];
$zip=$_SESSION['zip'];
    
    
    
    
    
    
    
    $sql="INSERT INTO transaction( username , total,profit ,address,time,  zip,razorpay_payment_id,razorpay_order_id) VALUES('$login_session','$tot' ,'$profit','$add',NOW()  ,'$zip','$razorpay_payment_id','$razorpay_order_id')";
                  
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
    
    
    
    
    
    
    
    
    
    
    
    

//    $sql = "INSERT INTO `orders` (`order_id`, `razorpay_payment_id`, `price`, `status`, `email`) VALUES ('$razorpay_order_id','$razorpay_payment_id', '$price', 'success', '$email')";

    
        header("Location: success.php");

    $html = "<p>Your payment was successful</p>
             <p>Payment ID: {$_POST['razorpay_payment_id']}</p>";
} else {
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}

echo $html;