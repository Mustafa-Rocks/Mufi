<?php
$dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "shop";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
include('session.php');

$error="";



?>






<script>
            function validation() {
                var address =
                    document.forms.ship.address.value;
                var city =
                    document.forms.ship.city.value;
                var state =
                    document.forms.ship.state.value;
                var country =
                    document.forms.ship.country.value;
                var zip =
                    document.forms.ship.zip.value;
                
               // var regEmail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g;  //Javascript reGex for Email Validation.
                var regZip=/^\d{6}$/;                                        // Javascript reGex for Phone Number validation.
                var regCity = /\d+$/g; 
                var regState = /\d+$/g;
                var regCountry = /\d+$/g;                  // Javascript reGex for Name validation
 
                if (city == "" || regCity.test(city)) {
                    
                    alert("Please enter your city properly.");
                    return false;
                   
                    
                }
                
                
                if (state == "" || regState.test(state)) {
                    alert("Please enter your state properly.");
                   
                    return false;
                }
                
               if (country == "" || regCountry.test(country)) {
                    alert("Please enter your country properly.");
                    
                    return false;
                }
                
 
                if (address == "") {
                    alert("Please enter your address.");
                   
                    return false;
                }
                 
                
                  
                
                if (zip == "" || !regZip.test(zip)) {
                    alert("Please enter valid Zipcode.");
                    
                    return false;
                }
                
            }
        </script>
























<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Shipping Details</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
      

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4">Shipping Details</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-8">
                  <div class="card mb-6">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Information</h5>
                      
                    </div>
                    <div class="card-body">
                      <form name="ship" METHOD="POST" action="pay.php" onsubmit="return validation()"   >
                          <input type="hidden" value="<?php $_SESSION['item_total'];?>" name="price"> 
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-message">Address</label>
                          <div class="col-sm-10">
                            <textarea
                              id="item_description"
                              name="address"
                              class="form-control"
                              placeholder="27/49 , Vibhuti Khand"
                              aria-label="Hi, Do you have a moment to talk Joe?"
                              aria-describedby="basic-icon-default-message2"
                            ></textarea>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">City</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              
                              <input
                                type="text"
                                class="form-control"
                                id="item_os"
                                name="city"
                                placeholder="Lucknow"
                                aria-label="John Doe"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-company">State</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">

                              <input
                                type="text"
                                id="item_storage"
                                name="state"
                                class="form-control"
                                placeholder="Uttar Pradesh"
                                aria-label="ACME Inc."
                                aria-describedby="basic-icon-default-company2"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Country</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              
                              <input
                                type="text"
                                id="item_ram"
                                name="country"
                                class="form-control"
                                placeholder="India"
                                aria-label="john.doe"
                                aria-describedby="basic-icon-default-email2"
                              />
                              
                            </div>
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 form-label" for="basic-icon-default-phone">ZIP</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              
                              <input
                                type="text"
                                id="item_processor"
                                name="zip"
                                class="form-control phone-mask"
                                placeholder="226009"
                                aria-label="658 799 8941"
                                aria-describedby="basic-icon-default-phone2"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
    <input style="width:100%" value="Make Payment"  type="submit" class="btn  btn-success " name="submit"  >
                          </div>
                        </div>
                   
                      </form>
                    </div>
                  </div>
                </div>
                <!-- Basic with Icons -->
                <div class="col-xxl">
               
                </div>
                  
              </div>
                <div class="span6">
    <a  style="width:66%"   href="cart.php" class="btn btn-large btn-warning"><i class="icon-arrow-left"></i> BACK </a>
              </div>
            </div>
            <!-- / Content -->
              <?php

              
              
             /* if(isset($_POST['submit']))
              {
                $address = $_POST['address'];
                $city = $_POST['city'];
                $state = $_POST['state'];
                $country = $_POST['country'];
                $zip = $_POST['zip'];
                  $add=$address.",".$city.",".$state.",".$country;
                  $tot=$_SESSION['item_total'];
               
        $sql="INSERT INTO transaction( username , total ,address,time,  zip) VALUES('$login_session','$tot' ,'$add',NOW()  ,'$zip')";
                  
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
                   }
                 
              }
                   //$sql_id= "SELECT * FROM item WHERE id=(SELECT max(id) FROM item) ";
    //   $res=  $conn->query($sql_id);
            
           // if ($res->num_rows > 0) {
                  // output data of each row
            //      while($row = $res->fetch_assoc()) {
               //     
                      //$item_id=$row["id"];
              //    }
             // } else {
             //     echo "";
             //   }
                  
                
                  
                  
                
                
                //    $sql2="insert into images(item_id,file_name) VALUES('$item_id'   ,'$file_name')";
                
                
                  //$sql="INSERT INTO item(item_name,item_price,item_quantity,item_description,brand) VALUES('$name', '$price' , '$quantity' , '$about' ,  '$brand' )";
        //if(mysqli_query($conn, $sql2) ){
        //    echo "images added"; 
  
           
      //  } else{
       //     echo "ERROR: Hush! Sorry $sql. " 
               // . mysqli_error($conn);
    //    }    
     //   }}
              */
              ?>
              
 
            <!-- Footer -->
            
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
   

    <script src="assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
