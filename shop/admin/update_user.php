<?php
$dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "shop";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

   include('session.php');

$error="";


$id = $_GET['data'];

              $targetDir = "uploads/";
              $statusMsg = '';
              
              if(isset($_POST['submit'])){
                  $ufname = $_POST['fname'];
                $ulname = $_POST['lname'];
                $uuname = $_POST['uname'];
                $uemail = $_POST['email'];
                $ucontact = $_POST['contact'];
                $uaddress = $_POST['address'];
               $ucity = $_POST['city'];
                $ustate = $_POST['state'];
                $ucountry = $_POST['country'];
                $uzip = $_POST['zip'];
               
        /*$sql="INSERT INTO item(item_name,item_price,item_quantity,item_description,brand,os,storage,ram,processor,dimension) VALUES('$name', '$price' , '$quantity' , '$about' ,  '$brand' , '$os' , '$storage' , '$ram' , ' $processor', '$dimension')";
                       if(mysqli_query($conn, $sql)){echo "items added";}
                       */
        $sql=" UPDATE user
              SET 
            fname='$ufname' ,
            lname = '$ulname',
            username = '$uuname'   ,
            zip= '$uzip',
            email = '$uemail' ,
            contact= '$ucontact'    ,
            address=  '$uaddress'     ,
            city= '$ucity'   ,
            state=  '$ustate'   ,
            country= '$ucountry'    
            
            WHERE 
            id = $id ";
                  
                  
                  
          if(mysqli_query($conn, $sql))
          {
              
              header("Refresh:0; url=users.php");
              
          }
                
                  
                  
              
              }
              
              ?>


<?php

$sql_id=("SELECT * FROM user WHERE id=$id");
$res=  $conn->query($sql_id);
            
            if ($res->num_rows > 0) {
                  // output data of each row
                  while($roww = $res->fetch_assoc()) {
                    
                      $fname = $roww["fname"];
                $lname =  $roww["lname"];
                $uname =  $roww["username"];
                $email =  $roww["email"];
                $contact =  $roww["contact"];
                $address = $roww["address"];
               $city =  $roww["city"];
                $state =  $roww["state"];
                $country =  $roww["country"];
                $zip =  $roww["zip"];
              
                  }
              } else {
                  echo "";
                }

?>


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

    <title>Update User</title>

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
        <?php include('sidebar.php'); ?>

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4">Update User</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-8">
                  <div class="card mb-6">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">User</h5>
                      
                    </div>
                    <div class="card-body">
                      <form  METHOD="POST" enctype="multipart/form-data" >
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">First Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="item_name" name="fname" value="<?php echo $fname; ?>" placeholder="Mustafa" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Last Name</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              class="form-control"
                              id="item_price"
                              name="lname"
                                value="<?php echo $lname; ?>"
                              placeholder="Taqi"
                            />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-email">Username</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <input
                                type="text"
                                value="<?php echo $uname; ?>"
                                id="item_quantity"
                                name="uname"
                             
                                class="form-control"
                                placeholder="mustafa_rocks"
                                aria-label="john.doe"
                                aria-describedby="basic-default-email2"
                              />
                              
                            </div>
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Email</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                                   value="<?php echo $email; ?>"
                              id="item_brand"
                             name="email"
                              class="form-control phone-mask"
                              placeholder="abc@gmail.com"
                              aria-label="658 799 8941"
                              aria-describedby="basic-default-phone"
                            />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Contact</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              
                              <input
                                type="text"
                                class="form-control"
                                id="item_os"
                                name="contact"
                                    value="<?php echo $contact; ?>"
                                placeholder="8888888888"
                                aria-label="John Doe"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-message">Address</label>
                          <div class="col-sm-10">
                            <textarea
                              id="item_description"
                              name="address"
                              class="form-control"
                            
                             
                              aria-label="Hi, Do you have a moment to talk Joe?"
                              aria-describedby="basic-icon-default-message2"
                            ><?php echo $address; ?></textarea>
                          </div>
                        </div>
                        
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-company">City</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">

                              <input
                                type="text"
                                id="item_storage"
                                name="city"
                                class="form-control"
                                  value="<?php echo $city; ?>"
                                placeholder="Lucknow"
                                aria-label="ACME Inc."
                                aria-describedby="basic-icon-default-company2"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-email">State</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              
                              <input
                                type="text"
                                id="item_ram"
                                name="state"
                                class="form-control"
                               value="<?php echo $state; ?>"
                                placeholder="UP"
                                aria-label="john.doe"
                                aria-describedby="basic-icon-default-email2"
                              />
                              
                            </div>
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 form-label" for="basic-icon-default-phone">Country</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              
                              <input
                                type="text"
                                id="item_processor"
                                name="country"
                                class="form-control phone-mask"
                                value="<?php echo $country; ?>"
                                placeholder="India"
                                aria-label="658 799 8941"
                                aria-describedby="basic-icon-default-phone2"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Zip</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              
                              <input
                                type="text"
                                class="form-control"
                                id="zip"
                                name="zip"
                                value="<?php echo $zip; ?>"
                           
                                aria-label="John Doe"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                            </div>
                          </div>
                        </div>
                          
                         
                          
                          
                          
                          
                          
                          
                          
                        <div class="row justify-content-end">
                          <div class="col-sm-10">

                          </div>
                        </div>
                        <!--  <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Images</label>
                        <input class="form-control" type="file" name="files[]"   id="file" multiple />
                      </div> -->
                          
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary" name="submit" >Update</button>
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
            </div>
            <!-- / Content -->
           
              
              

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
    <script src="assets/vendor/libs/perormect-scrollbar/perfect-scrollbar.js"></script>

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
