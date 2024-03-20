<?php
   include('session.php');

$cat =  $_SESSION['search'];

$c=0;
$rcount = mysqli_query($conn,"SELECT * FROM item WHERE item_name LIKE '%$cat%' ");
 if (mysqli_num_rows($rcount) > 0) {
                           
                         while($roww = mysqli_fetch_array($rcount)) {
                             $c++;
                         }}

$result = mysqli_query($conn,"SELECT * FROM item WHERE item_name LIKE '%$cat%' ");

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootshop online Shopping cart</title>
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
      <style>
          .thumbnail img{height:250px; object-fit: cover;}
      </style>
  </head>
<body>
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
<div class="span6">Welcome!<strong> <?php echo ($login_session); ?></strong></div>
	<div class="span6">
	<div class="pull-right">
		
		<span class="btn btn-mini">&#X20B9;<?php echo $_SESSION['item_total'] ?></span>
		
		<a href="cart.php"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> <?php echo $_SESSION['c'] ?> Items in your cart </span> </a> 
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
		<li class="active"> <?php echo "Search"  ;    ?>  </li>
    </ul>
	<h3> <?php echo "Results matching '$cat'";      ?> <small class="pull-right"> <?php  echo "$c";       ?> products are available </small></h3>	
	<hr class="soft"/>
	<p>
		Nowadays the Electronics industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - that is why our goods are so popular and we have a great number of faithful customers all over the country.
	</p>
	<hr class="soft"/>
	
	  

<br class="clr"/>
<div class="tab-content">


	<div class="tab-pane  active" id="blockView">
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
				<a href="product_details.php?data=<?php echo $itemid ?>"> <?php  echo "<img src='admin/uploads/".$roww["file_name"]."' >"; ?></a>
				<div class="caption">
				  <h5><?php echo $row["item_name"]; ?></h5>
				  <p> 
					<?php echo $row["item_description"]; ?>
				  </p>
				   <h4 style="text-align:center"><a class="btn" href="product_details.php?data=<?php echo $itemid ?>"> <i class="icon-zoom-in"></i></a> 
                       <a class="btn btn-primary" href="product_details.php?data=<?php echo $itemid ?>">Add To <i class="icon-shopping-cart"></i></a>
                       <a class="btn btn-primary" href="#"> <span>&#8377;</span> <?php echo $row["item_price"]; ?>  </a></h4>
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
	<hr class="soft"/>
	</div>
</div>

	
			<br class="clr"/>
</div>
</div>
</div>
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