
<?php

if($_SESSION['search']==''){
      
$_SESSION['search']='';
      }

 if(isset($_POST['src']))
 {
     $_SESSION['search']=$_POST['search'];
     header("Location: search.php");
 }

?>

<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="home.php">FROSTWOOD</a>
		<form class="form-inline navbar-search" method="post"  >
		<input id="search"  name="search" class="srchTxt" type="text" />
		  
		 <input  type="submit" value="Search" name="src" class="btn btn-large btn-primary pull-right">
   <!--	<input  type="submit" value="Search" name="srac" class="btn btn-large btn-primary pull-right">
--></form>
    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="profile.php">Profile</a></li>
	 <li class=""><a href="compare.php">Compare</a></li>
	 <li class=""><a href="contact.php">Contact</a></li>
	 <li class="">


<!--<li class=""><a href="home.php">Profile</a></li>
	 <li class=""><a href="home.php">Compare</a></li>
	 <li class=""><a href="home.php">Contact</a></li>
	 <li class="">
-->
   
	<a class="dropdown-item" href="logout.php">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle" >Log Out</span>
                      </a>
	</li>
    </ul>
  </div>
</div>