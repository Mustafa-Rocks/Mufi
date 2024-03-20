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
                var name =
                    document.forms.add.name.value;
                var contact =
                    document.forms.add.contact.value;
                var email =
                    document.forms.add.email.value;
                var address =
                    document.forms.add.address.value;
                
                
               var regEmail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g;  //Javascript reGex for Email Validation.
                var regName = /\d+$/g;                  // Javascript reGex for Name validation
                  
                
                var regContact=/^\d{10}$/;
                
                if (name == "" || regName.test(name) ) {
                    alert("Please enter supplier name.");
                   
                    return false;
                }
                
                
                
                if (contact == "" || !regContact.test(contact)) {
                    
                    alert("Please enter contact properly.");
                    return false;
                   
                    
                }
                
                
                if (email == "" || !regEmail.test(email)) {
                    alert("Please enter email properly.");
                   
                    return false;
                }
                if (address == "") {
                    alert("Please enter address.");
                   
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

    <title>Add Supplier</title>

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
              <h4 class="fw-bold py-3 mb-4">Add Supplier</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-8">
                  <div class="card mb-6">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Item</h5>
                      
                    </div>
                    <div class="card-body">
                      <form name="add"  METHOD="POST"  onsubmit="return validation()"   enctype="multipart/form-data" >
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="item_name" name="name" placeholder="Syrex Limited" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Contact</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              class="form-control"
                              id="item_price"
                              name="contact"
                              placeholder="123-456-7890"
                            />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-email">Email</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <input
                                type="text"
                                id="item_quantity"
                                name="email"
                             
                                class="form-control"
                                placeholder="syrexlimited@gmail.com"
                                aria-label="john.doe"
                                aria-describedby="basic-default-email2"
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
                              placeholder="Syrex Limited,Kursi road,Lucknow"
                              aria-label="Hi, Do you have a moment to talk Joe?"
                              aria-describedby="basic-icon-default-message2"
                            ></textarea>
                          </div>
                        </div>
                        
                        
                        
                        

                        
                          
                          
                          
                          
                          
                          
                          
                        
                          
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary" name="submit" >Sumbit</button>
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
              <?php
              
              
              if(isset($_POST['submit'])){
                  $name = $_POST['name'];
                $contact = $_POST['contact'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                
                  
        $sql="INSERT INTO supplier(name,contact,email,address) VALUES('$name', '$contact' , '$email' , '$address' )";
                       if(mysqli_query($conn, $sql)){echo "supplier added";}
                  
                  
                  
            
            
                
        
                  
                
                
                
                  //$sql="INSERT INTO item(item_name,item_price,item_quantity,item_description,brand) VALUES('$name', '$price' , '$quantity' , '$about' ,  '$brand' )";
          
        }
              
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
