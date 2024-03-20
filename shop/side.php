<?php
$m=0;
$t=0;
$rcountm = mysqli_query($conn,"SELECT * FROM item WHERE category = 'Mobile' ");
 if (mysqli_num_rows($rcountm) > 0) {
                           
                         while($rowm = mysqli_fetch_array($rcountm)) {
                             $m++;
                         }}
$rcountt = mysqli_query($conn,"SELECT * FROM item WHERE category = 'Tablet' ");
 if (mysqli_num_rows($rcountt) > 0) {
                           
                         while($rowt = mysqli_fetch_array($rcountt)) {
                             $t++;
                         }}
$e=$m+$t;
?>




<div id="sidebar" class="span3">
		<div class="well well-small"><a id="myCart" href="cart.php"><img src="themes/images/ico-cart.png" alt="cart"><?php echo $_SESSION['c'] ?> Items in your cart  <span class="badge badge-warning pull-right">&#X20B9;<?php echo $_SESSION['item_total'] ?></span></a></div>
		
		<!--	<div class="well well-small"><a id="myCart" href="home.php"><img src="themes/images/ico-cart.png" alt="cart"><?php echo $_SESSION['c'] ?> Items in your cart  <span class="badge badge-warning pull-right">&#X20B9;<?php echo $_SESSION['item_total'] ?></span></a></div>
						--><ul id="sideManu" class="nav nav-tabs nav-stacked">
			<li class="subMenu open"><a> ELECTRONICS [<?php echo "$e" ; ?>]</a>
				<ul>
			<!--	<li><a class="active" href="home.php?data=<?php echo "Mobile" ?>"><i class="icon-chevron-right"></i>Mobile (<?php echo "$m" ; ?>) </a></li>
				<li><a href="home.php?data=<?php echo "Tablet" ?>"><i class="icon-chevron-right"></i>Tablets(<?php echo "$t" ; ?>)</a></li>
						-->
			<li><a class="active" href="products.php?data=<?php echo "Mobile" ?>"><i class="icon-chevron-right"></i>Mobile (<?php echo "$m" ; ?>) </a></li>
				<li><a href="products.php?data=<?php echo "Tablet" ?>"><i class="icon-chevron-right"></i>Tablets(<?php echo "$t" ; ?>)</a></li>
						
				</ul>
			</li>
			
			
			
		</ul>
		<br/>
		
			<br/>
			<div class="thumbnail">
				<img src="themes/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods" style="height:auto">
				<div class="caption">
				  <h5>Payment Methods</h5>
				</div>
			  </div>
	</div>