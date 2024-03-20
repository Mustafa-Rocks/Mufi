<?php
$dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "shop";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

   include('session.php');

$error="";



?>


<!DOCTYPE html>
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

    <title>Inventory</title>

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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Items/</span> Manage Items</h4>

              <!-- Basic Bootstrap Table -->
             
              <!--/ Basic Bootstrap Table -->

              

              <!-- Bootstrap Dark Table -->
              
              <!--/ Bootstrap Dark Table -->

              

              <!-- Bootstrap Table with Header - Dark -->
              
              <!--/ Bootstrap Table with Header Dark -->

             

              <!-- Bootstrap Table with Header - Light -->
              
              <!-- Bootstrap Table with Header - Light -->

           

              <!-- Bootstrap Table with Header - Footer -->

              <!-- Bootstrap Table with Header - Footer -->

            

              <!-- Bootstrap Table with Caption -->
              
              <!-- Bootstrap Table with Caption -->

             

              <!-- Striped Rows -->
              
              <!--/ Striped Rows -->

             

              <!-- Bordered Table -->
              
              <!--/ Bordered Table -->

              

              <!-- Borderless Table -->
              
              <!--/ Borderless Table -->

           

              <!-- Hoverable Table rows -->
              <div class="card">
                <h5 class="card-header">Inventory</h5>
                <div class="table-responsive text-nowrap">
                    
                    
                    <?php
                    $result = mysqli_query($conn,"SELECT * FROM item");
                    ?>
                
                    
                    <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Brand</th>
                        <th>Actions</th>
                      </tr>
                        
                     <?php
                        if (mysqli_num_rows($result) > 0) {
                            $i=0;
                         while($row = mysqli_fetch_array($result)) {
                             $itemid=$row["id"];
                        ?>
                        
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td> <strong>  <?php echo $row["item_name"]; ?>  </strong></td>
                        <td> <span>&#8377;</span><?php echo $row["item_price"]; ?>   </td>
                        <td> <?php echo $row["item_quantity"]; ?>   </td>
                        <td>  <?php echo $row["brand"]; ?>  </td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="update_item.php?data=<?php echo $itemid ?>"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item" href="delete_item.php?data=<?php echo $itemid ?>"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                        <?php
                        $i++;
                        }
                        ?>
                      
                    </tbody>
                    <?php
                        }
                        else{
                        echo "";
                        }
                        ?>
                  </table>
                </div>
              </div>
              <!--/ Hoverable Table rows -->

              

              <!-- Small table -->

              
              <!--/ Small table -->

              

              <!-- Contextual Classes -->

              
              <!--/ Contextual Classes -->

             

              <!-- Table within card -->
              
              <!--/ Table within card -->

           

              <!-- Responsive Table -->
              
              <!--/ Responsive Table -->
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
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

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
