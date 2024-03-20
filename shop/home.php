<?php
   include('session.php');

     $result = mysqli_query($conn,"SELECT * FROM item WHERE featured = 'Yes ' ");
     $result2 = mysqli_query($conn,"SELECT * FROM item ORDER BY id DESC ");
if($_SESSION['c']==''){
      
$_SESSION['c']=0;
      }

if($_SESSION['item_total']=='')
{
    $_SESSION['item_total']= 0;
}
if($_SESSION['comp']==''){
      
$_SESSION['comp']=0;
      }
?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootshop online Shopping cart</title>
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
      <style>
          .thumbnail img{height:250px; object-fit: cover;}
      </style>
  </head>
<body>
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span6">Welcome!<strong> <?php echo ($login_session); ?> </strong></div>
	<div class="span6">
	<div class="pull-right">
		
		
		
		<span class="btn btn-mini">&#X20B9;<?php echo $_SESSION['item_total'] ?></span>
		<a href="product_summary.html">		<a href="cart.php"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ <?php echo $_SESSION['c'] ?>] Items in your cart </span> </a> 
	
	<!--	<a href="product_summary.html">		<a href="home.php"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ <?php echo $_SESSION['c'] ?>] Items in your cart </span> </a>
	--></div>
	</div>
</div>
<!-- Navbar ================================================== -->
<?php  include('navbar.php');  ?>
</div>
</div>
<!-- Header End====================================================================== -->
<div id="carouselBlk">
	<div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
		  <div class="item active">
		  <div class="container">
			<a ><img style="width:100%" src="themes/images/carousel/p1.png" alt="special offers"/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		  </div>
		  </div>
		  <div class="item">
		  <div class="container">
			<a ><img style="width:100%" src="themes/images/carousel/p2.png" alt=""/></a>
				<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		  </div>
		  </div>
		  <div class="item">
		  <div class="container">
			<a ><img src="themes/images/carousel/p3.png" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
			
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href="register.html"><img src="themes/images/carousel/t1.png" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		   
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href="register.html"><img src="themes/images/carousel/t2.png" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			</div>
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href="register.html"><img src="themes/images/carousel/t3.png" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		  </div>
		  </div>
		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
	  </div> 
</div>
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	
      <?php  include('side.php');  ?>
        
        
<!-- Sidebar end=============================================== -->
		<div class="span9">		
			<div class="well well-small">
			<h4>Featured Products <small class="pull-right">Many Featured Products</small></h4>
			<div class="row-fluid">
			<div id="featured" class="carousel slide">
			<div class="carousel-inner">
			  <div class="item active">
			  <ul class="thumbnails">
                  <?php
                        if (mysqli_num_rows($result) > 0) {
                           
                         while($row = mysqli_fetch_array($result)) {
                             $itemid=$row["id"];

                  $res = mysqli_query($conn,"SELECT * FROM images WHERE item_id = '$itemid' ");
                    $roww = mysqli_fetch_array($res);
                             if($row["item_quantity"]>=1)
                             {   
                 ?>
 
                  <li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="product_details.php?data=<?php echo $itemid ?>"> 
                    <?php  echo "<img src='admin/uploads/".$roww["file_name"]."' >"; ?>
                      </a>
					<div class="caption">
					  <h5><?php echo $row["item_name"]; ?></h5>
					  <h4><a class="btn" href="product_details.php?data=<?php echo $itemid ?>">VIEW</a> <span class="pull-right"><span>&#8377;</span> <?php echo $row["item_price"]; ?></span></h4>
					</div>
				  </div>
				</li>
                   <?php
                             }
                        }
                 
                        }
                        else{
                        echo "";
                        }
                        ?>
                  	
			  </ul>
                     
			  </div>
                	  <div class="item active">
			  <ul class="thumbnails">
                  <?php
                        if (mysqli_num_rows($result) > 0) {
                           
                         while($row = mysqli_fetch_array($result)) {
                             $itemid=$row["id"];

                  $res = mysqli_query($conn,"SELECT * FROM images WHERE item_id = '$itemid' ");
                    $roww = mysqli_fetch_array($res);
                        if($row["item_quantity"]>=1)
                             {     
                 ?>
 
                  <li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="product_details.php"> 
                    <?php  echo "<img src='admin/uploads/".$roww["file_name"]."' >"; ?>
                      </a>
					<div class="caption">
					  <h5><?php echo $row["item_name"]; ?></h5>
					  <h4><a class="btn" href="product_details.php?data=<?php echo $itemid ?>">VIEW</a> <span class="pull-right"><span>&#8377;</span> <?php echo $row["item_price"]; ?></span></h4>
					</div>
				  </div>
				</li>
                   <?php
                        }
                        }
                 
                        }
                        else{
                        echo "";
                        }
                        ?>
                  	
			  </ul>
                     
			  </div>

			  </div>
			  
			  </div>
			  </div>
		</div>
		<h4>Latest Products </h4>
            
       

			  <ul class="thumbnails">
                       
            
            <?php
                        if (mysqli_num_rows($result2) > 0) {
                           
                         while($row2 = mysqli_fetch_array($result2)) {
                             $itemid2=$row2["id"];

                  $res2 = mysqli_query($conn,"SELECT * FROM images WHERE item_id = '$itemid2' ");
                    $roww2 = mysqli_fetch_array($res2);
                             if($row2["item_quantity"]>=1)
                             {
                 ?>
				<li class="span3">
				  <div class="thumbnail">
					<a  href="product_details.php?data=<?php echo $itemid2 ?>">
                        <?php  echo "<img src='admin/uploads/".$roww2["file_name"]."' >"; ?>
                      </a>
					<div class="caption">
					  <h5><?php echo $row2["item_name"]; ?></h5>
					  <p> 
				 <?php echo $row2["item_description"]; ?>
					  </p>
					 
					  <h4 style="text-align:center"><a class="btn" href="product_details.php?data=<?php echo $itemid2 ?>"> <i class="icon-zoom-in"></i></a> 
                          <a class="btn btn-primary" href="product_details.php?data=<?php echo $itemid2 ?>">Add To <i class="icon-shopping-cart"></i></a>
                          <a class="btn btn-primary" href="product_details.php?data=<?php echo $itemid2 ?>"><span>&#8377;</span><?php echo $row2["item_price"]; ?></a></h4>
					</div>
				  </div>
				</li>
				
				<?php
                    if(isset($_POST['submit'])){
                  $_SESSION['item_id'] = $id;
                  $_SESSION['item_price']= $row["item_price"];
                        
                    }
                    ?>
				<?php
                             }
                       
                        }
                 
                        }
                        else{
                        echo "";
                        }
                        ?>
				
				
			  </ul>	

		</div>
		</div>
	</div>
</div>
<!-- Footer ================================================================== -->
	<?php  include('footer.php');  ?>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="themes/js/jquery.js" type="text/javascript"></script>
	<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="themes/js/google-code-prettify/prettify.js"></script>
	
	<script src="themes/js/bootshop.js"></script>
    <script src="themes/js/jquery.lightbox-0.5.js"></script>
	
	<!-- Themes switcher section ============================================================================================= -->

<span id="themesBtn"></span>
</body>
</html>