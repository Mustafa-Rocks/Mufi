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
		<li class="active"> Compare</li>
    </ul>
            <?php
       // print_r($_SESSION['compare']);
        //print_r($_SESSION['comp']);
        ?>
        
	<h3>  Product Comparision[ <small><?php echo $_SESSION['comp'] ?> Item(s) </small>] <a href="home.php" class="btn btn-large pull-right btn-primary"><i class="icon-arrow-left"></i> Continue Shopping </a></h3>	
	<hr class="soft"/>
        <table id="compairTbl" class="table table-bordered">
              <thead>
                <tr>
                  <th>Specifications</th>
        <?php             for($i=0;$i<$_SESSION['comp'];$i++)
      {
    ?>
                  <th>Product <?php echo ($i+1); ?> </th>
                    <?php
                  }
        ?>
                </tr>
              </thead>
              <tbody>
                  <?php
          //  for($i=0;$i<$_SESSION['comp'];$i++)
   //   {
        
           //     $ido= $_SESSION['compare'][$i];
            
        //
          //          $result = mysqli_query($conn,"SELECT * FROM item where id='$ido'");
         //          $row = mysqli_fetch_array($result);
                            

         //         $res = mysqli_query($conn,"SELECT * FROM images WHERE item_id = '$ido' ");
           //         $roww = mysqli_fetch_array($res);
          //                   
                 
                    ?>
                <tr>
                  
                  
                  
                </tr>
                  <tr>
                      <td></td>
                      
                      <?php
            for($i=0;$i<$_SESSION['comp'];$i++)
      {
        
                $ido= $_SESSION['compare'][$i];
            
        
                    $result = mysqli_query($conn,"SELECT * FROM item where id='$ido'");
                   $row = mysqli_fetch_array($result);
                                        

                  $res = mysqli_query($conn,"SELECT * FROM images WHERE item_id = '$ido' ");
                    $roww = mysqli_fetch_array($res);
                             
                 
                    ?>
                      
                                    <td width="250px"> <?php  echo "<img src='admin/uploads/".$roww["file_name"]."' >"; ?></td>
                      <?php
            }
        ?>
                      </tr>
                  <tr>
                  <td>Name</td>
                     
                      <?php
            for($i=0;$i<$_SESSION['comp'];$i++)
      {
        
                $ido= $_SESSION['compare'][$i];
            
        
                    $result = mysqli_query($conn,"SELECT * FROM item where id='$ido'");
                   $row = mysqli_fetch_array($result);
                ?>
            
                  <td><?php  echo $row["item_name"] ; ?></td>
                  
                      <?php
            }
        ?>
                  
                </tr>
                <tr>
                  <td>Cost</td>
                       
                    <?php
            for($i=0;$i<$_SESSION['comp'];$i++)
      {
        
                $ido= $_SESSION['compare'][$i];
            
        
                    $result = mysqli_query($conn,"SELECT * FROM item where id='$ido'");
                   $row = mysqli_fetch_array($result);
                ?>
                    
                  <td>&#X20B9;<?php  echo $row["item_price"] ; ?></td>
                  
                    <?php
            }
                    ?>
                    
                </tr>
                <tr>
                  <td>Brand</td>
                          <?php
            for($i=0;$i<$_SESSION['comp'];$i++)
      {
        
                $ido= $_SESSION['compare'][$i];
            
        
                    $result = mysqli_query($conn,"SELECT * FROM item where id='$ido'");
                   $row = mysqli_fetch_array($result);
                ?>              
                  <td><?php  echo $row["brand"] ; ?></td>
                  <?php
            }
                    ?>
                </tr>
				<tr>
                  <td>Ram</td>
                    <?php
            for($i=0;$i<$_SESSION['comp'];$i++)
      {
        
                $ido= $_SESSION['compare'][$i];
            
        
                    $result = mysqli_query($conn,"SELECT * FROM item where id='$ido'");
                   $row = mysqli_fetch_array($result);
                ?>
                                        
                  <td><?php  echo $row["ram"] ; ?></td>
                  <?php
            }
                    ?>
                    
                </tr>
				<tr>
                  <td>Storage</td>
                                <?php
            for($i=0;$i<$_SESSION['comp'];$i++)
      {
        
                $ido= $_SESSION['compare'][$i];
            
        
                    $result = mysqli_query($conn,"SELECT * FROM item where id='$ido'");
                   $row = mysqli_fetch_array($result);
                ?>     
                  <td><?php  echo $row["storage"] ; ?></td>
                  <?php
            }
                    ?>
                </tr>
				<tr>
                  <td>Processor</td>
                        <?php
            for($i=0;$i<$_SESSION['comp'];$i++)
      {
        
                $ido= $_SESSION['compare'][$i];
            
        
                    $result = mysqli_query($conn,"SELECT * FROM item where id='$ido'");
                   $row = mysqli_fetch_array($result);
                ?>                
                  <td><?php  echo $row["processor"] ; ?></td>
                  <?php
            }
                    ?>
                </tr>
                <tr>
                  <td>Operating System</td>
                        <?php
            for($i=0;$i<$_SESSION['comp'];$i++)
      {
        
                $ido= $_SESSION['compare'][$i];
            
        
                    $result = mysqli_query($conn,"SELECT * FROM item where id='$ido'");
                   $row = mysqli_fetch_array($result);
                ?>             
                  <td><?php  echo $row["os"] ; ?></td>
                  <?php
            }
                    ?>
                </tr>  
                  <tr>
                  <td></td>
                        <?php
            for($i=0;$i<$_SESSION['comp'];$i++)
      {
        
                $ido= $_SESSION['compare'][$i];
            
        
                    $result = mysqli_query($conn,"SELECT * FROM item where id='$ido'");
                   $row = mysqli_fetch_array($result);
                ?>             
                  <td>                       <form name="f1" method="post" action="comp_remove.php" >
                            <input type=submit value="Remove" name="remove_comp" class="btn btn-primary btn-danger " style="width:60%"  />
                           <input type="hidden" name="i" value="<?php echo $i ?>" />
                      </form></td>
                  <?php
            }
                    ?>
                </tr>  
                  <?php
           // }
        ?>
              </tbody>
            </table>		
       
	
                  
                 
                  
                  
                   
				 
				
       
		
            
			
			
	
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