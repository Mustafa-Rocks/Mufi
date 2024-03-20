<?php
   include('session.php');
   $user_id;

$sql_id=("SELECT * FROM user WHERE id=$user_id");
$res=  $conn->query($sql_id);
            
            if ($res->num_rows > 0) {
                  // output data of each row
                  while($roww = $res->fetch_assoc()) {
                    
                      $uname = $roww["username"];
                $fname =  $roww["fname"];
                $lname =  $roww["lname"];
                $mobile =  $roww["contact"];
                $email =  $roww["email"];
                $address = $roww["address"];
               $city =  $roww["city"];
                $state =  $roww["state"];
                $zip =  $roww["zip"];
                $country =  $roww["country"];
                
                  }
              } else {
                  echo "";
                }




if(isset($_POST['submit'])){
                  $xuname = $_POST['uname'];
                  $xfname=$_POST['fname'];
                $xlname = $_POST['lname'];
                $xmobile = $_POST['mobile'];
                $xemail = $_POST['email'];
                $xaddress = $_POST['address'];
                $xcity = $_POST['city'];
               $xstate = $_POST['state'];
                $xzip= $_POST['zip'];
                $xcountry = $_POST['country'];
        
        $sql=" UPDATE user 
              SET 
            username='$xuname' ,
            fname='$xfname',
            lname = '$xlname',
            contact = '$xmobile'   ,
            email = '$xemail' ,
            address= '$xaddress'    ,
            city=  '$xcity'     ,
            state= '$xstate'   ,
            zip=  '$xzip'   ,
            country= '$xcountry'    
            WHERE 
            id = $user_id ";
                  
                  
                  
          if(mysqli_query($conn, $sql))
          {
              
              echo "";
              
          }

}




?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
	-->
	<!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
	<script src="themes/js/less.js" type="text/javascript"></script> -->
	
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
  </head>
<body>
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span6">Welcome!<strong> <?php echo ($login_session); ?></strong></div>
	<div class="span6">
	<div class="pull-right">
		
		<span class="btn btn-mini">&#X20B9;<?php echo $_SESSION['item_total'] ?></span>
		
		<a href="cart.php"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ <?php echo $_SESSION['c'] ?> ] Items in your cart </span> </a> 
	</div>
	</div>
</div>
<!-- Navbar ================================================== -->
<?php  include('navbar.php');  ?>
</div>
</div>
<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<?php  include('side.php');  ?>
<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="home.php">Home</a> <span class="divider">/</span></li>
		<li class="active"> Profile</li>
    </ul>
        
	<h3>  PROFILE </h3>	
	<hr class="soft"/>
        <form class="form-horizontal" >
		<h4>Personal Information</h4>
		<div class="control-group">
			<label class="control-label" for="inputFname1">Username <sup></sup></label>
			<div class="controls">
			  <input type="text" id="inputFname1" name="uname"  value="<?php echo $uname; ?>" placeholder="UserName">
			</div>
		 </div>
		<div class="control-group">
			<label class="control-label" for="inputFname1">First name <sup></sup></label>
			<div class="controls">
			  <input type="text" id="inputFname1" name="fname" value="<?php echo $fname; ?>" placeholder="First Name">
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="inputLnam">Last name <sup></sup></label>
			<div class="controls">
			  <input type="text" id="inputLnam" name="lname" value="<?php echo $lname; ?>" placeholder="Last Name">
			</div>
		 </div>
        <div class="control-group">
			<label class="control-label" for="mobile">Mobile Phone </label>
			<div class="controls">
			  <input type="text"  name="mobile" id="mobile" value="<?php echo $mobile; ?>" placeholder="Mobile Phone"/> 
			</div>
		</div>
		<div class="control-group">
		<label class="control-label" for="input_email">Email <sup></sup></label>
		<div class="controls">
		  <input type="text" id="input_email"  value="<?php echo $email; ?>"  name="email"    placeholder="Email">
		</div>
	  </div>	  
		  
		
		<h4>Address </h4>
		

		
		<div class="control-group">
			<label class="control-label" for="aditionalInfo">Address</label>
			<div class="controls">
			  <textarea name="address" value="<?php echo $address; ?>"  id="aditionalInfo" cols="26" rows="3"><?php echo $address; ?></textarea>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="city">City</label>
			<div class="controls">
			  <input type="text" name="city" value="<?php echo $city; ?>"   id="city" placeholder="city"/> 
			</div>
		</div>
        
		<div class="control-group">
			<label class="control-label" for="city">State</label>
			<div class="controls">
			  <input type="text" name="state"  value="<?php echo $state; ?>"   id="city" placeholder="UP"/> 
			</div>
		</div>    
            
			
		<div class="control-group">
			<label class="control-label" for="postcode">Zip</label>
			<div class="controls">
			  <input type="text" id="postcode"   value="<?php echo $zip; ?>"   name="zip" placeholder="Zip "/> 
			</div>
		</div>
            
        <div class="control-group">
			<label class="control-label" for="postcode">Country </label>
			<div class="controls">
			  <input type="text" id="postcode" value="<?php echo $country; ?>" name="country"  placeholder="India "/> 
			</div>
		</div>    
	
        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-large btn-success" name="submit" >Update</button>
                          </div>
                        </div>
		</div>		
	</form>
        <?php
    $_SESSION['item_total']=0;
        $_SESSION['cost']=0;
        $_SESSION['profit']=0;
        for($i=0;$i<$_SESSION['c'];$i++)
        {
        
                //$ido= $_SESSION['cart'][$i];
            //echo $i;
        }
       // $ido=$_SESSION['cart'][$_SESSION['c']];
                ?>
	<?php   
        //echo ($_SESSION['item_id']); 
        //$ido=$_SESSION['item_id'];
        //echo $ido;
        //$c=0;
       // echo $_SESSION['cart']['$c'];
        
        //$count=$_SESSION['c'];
       // echo $count;
        /*$max=sizeof($_SESSION['cart']);
       for($i=0; $i<$max; $i++) { 

        while (list ($key, $val) = each ($_SESSION['cart'][$i])) { 
       echo "$key -> $val ,"; 
 } // inner array while loop
 echo "<br>";
 } */
   // echo $_SESSION['cart'][$_SESSION['c']];
        //print_r($_SESSION['cart']);
       // print_r($_SESSION['quantity']);
        ?>
    
	
        <?php
       /* if(isset($_POST['delete']))
        {
        //unset($_SESSION['name'][$key]);
    $_SESSION['cart'] = array_values($_SESSION['cart']);
    $_SESSION['quantity'] = array_values($_SESSION['quantity']);
            
        }  */
        ?>
		
            
			
			
	
	
</div>
</div></div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
	<?php  include('footer.php');  ?>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="themes/js/jquery.js" type="text/javascript"></script>
	<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="themes/js/google-code-prettify/prettify.js"></script>
	
	<script src="themes/js/bootshop.js"></script>
    <script src="themes/js/jquery.lightbox-0.5.js"></script>
	
	<!-- Themes switcher section ============================================================================================= -->

</body>
</html>