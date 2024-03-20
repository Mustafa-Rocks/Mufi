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
                  $uname = $_POST['item_name'];
                  $supplier=$_POST['supplier'];
                $uprice = $_POST['item_price'];
                $uquantity = $_POST['item_quantity'];
                $ubrand = $_POST['item_brand'];
                $uabout = $_POST['item_description'];
                $uos = $_POST['item_os'];
               $ustorage = $_POST['item_storage'];
                $uram = $_POST['item_ram'];
                $uprocessor = $_POST['item_processor'];
                $udimension = $_POST['item_dimension'];
                $ucategory = $_POST['category'];
                $ufeatured=$_POST['featured'];
        /*$sql="INSERT INTO item(item_name,item_price,item_quantity,item_description,brand,os,storage,ram,processor,dimension) VALUES('$name', '$price' , '$quantity' , '$about' ,  '$brand' , '$os' , '$storage' , '$ram' , ' $processor', '$dimension')";
                       if(mysqli_query($conn, $sql)){echo "items added";}
                       */
        $sql=" UPDATE item 
              SET 
            item_name='$uname' ,
            supplier='$supplier',
            item_price = '$uprice',
            item_quantity = '$uquantity'   ,
            item_description = '$uabout' ,
            brand= '$ubrand'    ,
            os=  '$uos'     ,
            storage= '$ustorage'   ,
            ram=  '$uram'   ,
            processor= '$uprocessor'    ,
            dimension=  '$udimension' ,
            category='$ucategory',
            featured='$ufeatured'
            WHERE 
            id = $id ";
                  
                  
                  
          if(mysqli_query($conn, $sql))
          {
              
              header("Refresh:0; url=inventory.php");
              
          }
                
                  
                  
              
              }
              
              ?>


<?php

$sql_id=("SELECT * FROM item WHERE id=$id");
$res=  $conn->query($sql_id);
            
            if ($res->num_rows > 0) {
                  // output data of each row
                  while($roww = $res->fetch_assoc()) {
                    
                      $name = $roww["item_name"];
                $price =  $roww["item_price"];
                $quantity =  $roww["item_quantity"];
                $brand =  $roww["brand"];
                $about =  $roww["item_description"];
                $os = $roww["os"];
               $storage =  $roww["storage"];
                $ram =  $roww["ram"];
                $processor =  $roww["processor"];
                $dimension =  $roww["dimension"];
                $category = $roww['category'];
                $featured= $roww['featured'];
                  }
              } else {
                  echo "";
                }

?>


<script>
            function validation() {
                var name =
                    document.forms.add.item_name.value;
                
                var price =
                    document.forms.add.item_price.value;
                var quantity =
                    document.forms.add.item_quantity.value;
                var brand =
                    document.forms.add.item_brand.value;
                
                var about =
                    document.forms.add.item_description.value;

                var storage =
                    document.forms.add.item_storage.value;
                var ram =
                    document.forms.add.item_ram.value;
                var processor =
                    document.forms.add.item_processor.value;
                var dimension =
                    document.forms.add.item_dimension.value;
                
                
               // var regEmail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g;  //Javascript reGex for Email Validation.
                var regBrand = /\d+$/g;                  // Javascript reGex for Name validation
                  
                
                var regPrice=/^\d+\.?\d*$/;
                var regQuantity=/^\d+\.?\d*$/;
                
                
                if (name == "") {
                    alert("Please enter item name.");
                   
                    return false;
                }
                
                
                

                
                
                if (price == "" || !regPrice.test(price)) {
                    alert("Please enter price properly.");
                   
                    return false;
                }
                
               if (quantity == "" || !regQuantity.test(quantity)) {
                    alert("Please enter quantity properly.");
                    
                    return false;
                }
                
                if (brand == "" || regBrand.test(brand)) {
                    alert("Please enter brand properly.");
                    
                    return false;
                }
                
                if (about == "") {
                    alert("Please enter item description.");
                   
                    return false;
                }
                
                if (storage == "" ) {
                    alert("Please enter storage .");
                    
                    return false;
                }
                
                if (ram == "" ) {
                    alert("Please enter ram .");
                    
                    return false;
                }
                
                
                
                if (processor == "") {
                    alert("Please enter Processor.");
                   
                    return false;
                }
                
                if (dimension == "") {
                    alert("Please enter Dimension.");
                   
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

    <title>Update Item</title>

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
              <h4 class="fw-bold py-3 mb-4">Update Item</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-8">
                  <div class="card mb-6">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Item</h5>
                      
                    </div>
                    <div class="card-body">
                      <form name="add" METHOD="POST"  onsubmit="return validation()"    enctype="multipart/form-data" >
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="item_name" name="item_name" value="<?php echo $name; ?>" placeholder="Iphone 11" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Price</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              class="form-control"
                              id="item_price"
                              name="item_price"
                                value="<?php echo $price; ?>"
                              placeholder="58000"
                            />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-email">Quantity</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <input
                                type="text"
                                value="<?php echo $quantity; ?>"
                                id="item_quantity"
                                name="item_quantity"
                             
                                class="form-control"
                                placeholder="15"
                                aria-label="john.doe"
                                aria-describedby="basic-default-email2"
                              />
                              
                            </div>
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Brand</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                                   value="<?php echo $brand; ?>"
                              id="item_brand"
                             name="item_brand"
                              class="form-control phone-mask"
                              placeholder="Apple"
                              aria-label="658 799 8941"
                              aria-describedby="basic-default-phone"
                            />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-message">About</label>
                          <div class="col-sm-10">
                            <textarea
                              id="item_description"
                              name="item_description"
                              class="form-control"
                            
                             placeholder="It has a very sleek design"
                              aria-label="Hi, Do you have a moment to talk Joe?"
                              aria-describedby="basic-icon-default-message2"
                            ><?php echo $about; ?></textarea>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">OS</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              
                              <input
                                type="text"
                                class="form-control"
                                id="item_os"
                                name="item_os"
                                    value="<?php echo $os; ?>"
                                placeholder="iOS"
                                aria-label="John Doe"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Storage</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">

                              <input
                                type="text"
                                id="item_storage"
                                name="item_storage"
                                class="form-control"
                                  value="<?php echo $storage; ?>"
                                placeholder="64gb"
                                aria-label="ACME Inc."
                                aria-describedby="basic-icon-default-company2"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Ram</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              
                              <input
                                type="text"
                                id="item_ram"
                                name="item_ram"
                                class="form-control"
                               value="<?php echo $ram; ?>"
                                placeholder="6gb"
                                aria-label="john.doe"
                                aria-describedby="basic-icon-default-email2"
                              />
                              
                            </div>
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 form-label" for="basic-icon-default-phone">Processor</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              
                              <input
                                type="text"
                                id="item_processor"
                                name="item_processor"
                                class="form-control phone-mask"
                                value="<?php echo $processor; ?>"
                                placeholder="Snapdragon 785"
                                aria-label="658 799 8941"
                                aria-describedby="basic-icon-default-phone2"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Dimension</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              
                              <input
                                type="text"
                                class="form-control"
                                id="item_os"
                                name="item_dimension"
                                value="<?php echo $dimension; ?>"
                                placeholder="30mm x 340mm x 370mm"
                                aria-label="John Doe"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                            </div>
                          </div>
                        </div>
                          
                         <div class="mb-3">
                        <label for="exampleFormControlSelect1" class="form-label">Category</label>
                        <select class="form-select" id="exampleFormControlSelect1"  name="category"     aria-label="Default select example">
                          <option selected><?php echo $category; ?></option>
                        <?php 
                            if($category=="Tablet")
                            {
                            ?>
                          <option>Mobile</option>
                            <?php  }
                            else{
                            ?>
                          <option >Tablet</option>
                          <?php }?>  
                          
                        </select>
                      </div>
                           <div class="mb-3">
                            
                        <label for="exampleFormControlSelect1" class="form-label">Supplier</label>
                        <select class="form-select" id="exampleFormControlSelect1"  name="supplier"   aria-label="Default select example">
                    
                            <?php
                          $resup = mysqli_query($conn,"SELECT * FROM supplier");
                            if (mysqli_num_rows($resup) > 0) {
                            $i=0;
                         while($rowsup = mysqli_fetch_array($resup)) {  
                          ?>
                          <option><?php echo $rowsup["name"]; ?></option>
                            <?php
                         }}
                            ?>
                          
                        </select>
                      </div>
                          <div class="mb-3">
                        <label for="exampleFormControlSelect1" class="form-label">Featured</label>
                        <select class="form-select" id="exampleFormControlSelect1"  name="featured"   aria-label="Default select example">
                          <option selected><?php echo $featured; ?></option>
                            <?php 
                            if($featured=="Yes")
                            {
                            ?>
                           <option>No</option> 
                            <?php  }
                            else{
                            ?>
                          <option >Yes</option>
                           <?php }?> 
                          
                        </select>
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
