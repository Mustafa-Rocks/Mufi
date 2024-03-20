<?php
   include('session.php');
   
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
		<li class="active"> SHOPPING CART</li>
    </ul>
        
	<h3>  SHOPPING CART [ <small><?php echo $_SESSION['c'] ?> Item(s) </small>]<a href="home.php" class="btn btn-large pull-right btn-primary"><i class="icon-arrow-left"></i> Continue Shopping </a></h3>	
	<hr class="soft"/>
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
       // print_r($_SESSION['cart']);
       // print_r($_SESSION['quantity']);
        ?>
    
	<table class="table table-bordered">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Description </th>
                  <th>Quantity/Update</th>
				  <th>Price</th>
                  <th>Total</th>
				</tr>
              </thead>
              <tbody>
                  
                 
                  
                  
                   <?php
            for($i=0;$i<$_SESSION['c'];$i++)
      {
        
                $ido= $_SESSION['cart'][$i];
            
        
                    $result = mysqli_query($conn,"SELECT * FROM item where id='$ido'");
                   $row = mysqli_fetch_array($result);
                       // if (mysqli_num_rows($result) > 0) {
                           
                        // while($row = mysqli_fetch_array($result)) {
                         //    $itemid=$row["id"];
                            

                  $res = mysqli_query($conn,"SELECT * FROM images WHERE item_id = '$ido' ");
                    $roww = mysqli_fetch_array($res);
                             
                 
                    ?>
                  
                  
                <tr>
                  <td> <?php  echo "<img src='admin/uploads/".$roww["file_name"]."' >"; ?></td>
                  <td><?php  echo $row["item_name"] ; ?><br/> Ram : <?php  echo $row["ram"] ; ?> , Processor : <?php  echo $row["processor"] ; ?> <br/> Storage : <?php  echo $row["storage"] ; ?> , OS : <?php  echo $row["os"] ; ?>  </td>
				  <td>
                      
                      

                      <form name="f1" method="post" action="cart_update.php" >
                          <input type="number" id="quantity" min="1"  max="<?php  echo $row["item_quantity"] ; ?>" name="quantity" value="<?php echo $_SESSION['quantity'][$i]; ?>" class="span2" placeholder="Qty."/>
                          <input type="hidden" name="i" value="<?php echo $i ?>" />
                         <input type=submit value="Update" name="update_cart" class="btn btn-medium btn-primary pull-center " style="width:60%" />
                          </form>
                      
                       <form name="f1" method="post" action="cart_remove.php" >
                            <input type=submit value="Delete" name="delete_cart" class="btn btn-primary btn-danger " style="width:60%"  />
                           <input type="hidden" name="i" value="<?php echo $i ?>" />
                      </form>
                      
				  </td>
                  <td>&#X20B9;<?php  echo $row["item_price"] ; ?></td>
                    
                  <td>
                    &#X20B9;<?php $_SESSION['cost']=$_SESSION['cost']+($_SESSION['quantity'][$i]*$row["cost_price"]); $_SESSION['item_total']=$_SESSION['item_total']+($_SESSION['quantity'][$i]*$row["item_price"]);
                $_SESSION['profit']=($_SESSION['item_total']-$_SESSION['cost']);
                    echo ($_SESSION['quantity'][$i]*$row["item_price"]);                
                      ?></td>
                </tr>
                  <?php
            }
        ?>
				 <tr>
                  <td colspan="6" style="text-align:right"><strong>TOTAL =</strong></td>
                  <td class="label label-important" style="display:block"> <strong>&#X20B9;<?php echo $_SESSION['item_total'] ?> </strong></td>
                </tr>
				</tbody>
            </table>
        <?php
       /* if(isset($_POST['delete']))
        {
        //unset($_SESSION['name'][$key]);
    $_SESSION['cart'] = array_values($_SESSION['cart']);
    $_SESSION['quantity'] = array_values($_SESSION['quantity']);
            
        }  */
        ?>
		
            
			
			
	<a href="home.php" class="btn btn-large btn-primary"><i class="icon-arrow-left"></i> Continue Shopping </a>
	<a href="shipping_details.php" class="btn btn-large pull-right btn-success">Next <i class="icon-arrow-right"></i></a>
	
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