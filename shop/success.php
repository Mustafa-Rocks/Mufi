<?php
$dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "shop";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

   include('session.php');

$error="";


               
                $sqlu="SELECT * FROM user WHERE id =$user_id ";
                 $resu = mysqli_query($conn,$sqlu);
                if (mysqli_num_rows($resu) > 0) {
                $rowu = mysqli_fetch_array($resu);
                $user=$rowu["fname"];    
               }
               

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

    <title>SUCCESS!SUCCESS!</title>

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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> BILL</h4>

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
                <h5 class="card-header">Name: <?php echo $user; ?>     </h5>
               <table class="table table-bordered">
              <thead>
                <tr>
                  <th>S No.</th>
                  <th>Item Name </th>
                  <th>Quantity</th>
				  <th>Price</th>
                  <th>Total Price</th>
                  
				</tr>
              </thead>
              <tbody>
                  
                 <?php
                    $sqlt= "SELECT * FROM transaction WHERE id=(SELECT max(id) FROM transaction) ";
                  $res=  $conn->query($sqlt);
            
            if ($res->num_rows > 0) {
                  // output data of each row
                  while($row = $res->fetch_assoc()) {
                    
                      $trans_id=$row["id"];
                      $order_id=$row["razorpay_order_id"];
                  }
              } else {
                  echo "";
                }
                  echo "Order ID : $order_id";
                 
                  $query2 = "SELECT * FROM orders WHERE trans_id = '$trans_id'";
                          // FETCHING DATA FROM DATABASE
                          $result2 = mysqli_query($conn, $query2);

                         
                     $i=0;
                  $gp=0;
                        if (mysqli_num_rows($result2) > 0) {
                              // OUTPUT DATA OF EACH ROW
                              while($rows = mysqli_fetch_assoc($result2)) {
                                  $ii=$rows["item_id"];
                            $sqlp="SELECT * FROM item WHERE id=$ii";
                            $resp=mysqli_query($conn, $sqlp);
                                 
                                      $rowp = mysqli_fetch_assoc($resp);
                                  
                                      $item_name=$rowp["item_name"];
                                      $item_price=$rowp["item_price"];
                                      $item_quantity=$rows["quantity"];
                                  $i=$i+1;
                                $sp=  ($item_price*$item_quantity);
                                  $gp=$gp+$sp;
                  ?>
                  
                  
                
                  
                  
                <tr>
                  <td> <?php  echo $i ; ?></td>
                  <td><?php  echo $item_name ; ?>  </td>
				  <td><?php  echo $rows["quantity"] ; ?> </td>
                  <td>&#X20B9;<?php  echo $item_price ; ?></td>
                  <td>&#X20B9;<?php  echo $sp ; ?></td>
                    
                  
                </tr>
                <?php
                        }
                          } else {
                              echo "0 results";
                          }
                       ?>

				 <tr>
                  <td colspan="6" style="text-align:right"><strong>GRAND TOTAL =</strong></td>
                  <td class="label label-important" style="display:block"> <strong>&#X20B9;<?php echo $gp; ?> </strong></td>
                </tr>
				</tbody>
            </table>
        
              </div>
                <a href="home.php" style="width:100%"  class="btn btn-large btn-primary"><i class="icon-arrow-left"></i> Back to Shopping </a>
                <?php
                unset($_SESSION['cart']);
                unset($_SESSION['quantity']);
                unset($_SESSION['c']);
                unset($_SESSION['item_total']);
                
                unset($_SESSION['address']);
                unset($_SESSION['city']);
                unset($_SESSION['state']);
                unset($_SESSION['country']);
                unset($_SESSION['zip']);
                unset($_SESSION['add']);
                unset($_SESSION['tot']);
                unset($_SESSION['profit']);
                
                
                
                ?>
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
