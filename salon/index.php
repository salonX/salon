<!DOCTYPE html>
<html lang="en">
<?php session_start();?>

<!-- THIS SCRIPT HELP IN CHANGE of LOCATION BASED ON LOGIN AND ROLE OF USER -->
<?php if(!isset($_SESSION['user'])){ header("Location: ../register/login.php");return;}?>
<?php if($_SESSION['role']==0){ header("Location: ../user");return;}?>
<!-- SCRIPT ENDS HERE -->

<head>
  <?php include "../common/all_header_files.php";?>
  <title>Salon Profile</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php include "../nav/inner_top.php"; ?>

  <div class="container">


    <!-- row start: acount>booking -->
    <div class="row pl-2 mt-1">
      <h2 style="font-family: 'Dancing Script'" ><b> Your Acount</b></h2><br>
      <!-- <h3><b></b></h3>   -->
    </div>
  <!-- ends of row -->


    <div class="row pb-5">

      <!-- this container \/ is for detail part -->
      <div class="col-lg-4 col-md-6  mt-2">
      <div class="card" style="border-right:2px solid black;" >
        <img class="card-img-top img-fluid img-thumbnail rounded"  src="../images/home_page/carousel/5.png" alt="Card image cap">
        <div class="card-body">
          <h2 class="card-title" style="font-family: 'Dancing Script'" ><b><?php echo $details['name'];?></b></h2>

          
          <div class="row">
            <div class="col-md-12 col-lg-12">
              <p class="text-muted card-text"><i class="fa fa-envelope"></i> <?php echo $details['email']; ?></p>
            </div>
            <div class="col-md-12 col-lg-12">
              <p class="text-muted card-text"><i class="fa fa-phone"></i> +91 <?php echo $details['phone_number']; ?></p>
            </div>
            <div class="col-lg-12">
              <p class="text-muted card-text"><i class="fa fa-address-card"></i> <?php echo $details['address'].", ".$details['area']." ". $details['city'] ;; ?></p>
            </div>
          </div>

          <div class="row mt-2">
              <button class="btn btn-sm btn-warning p-1 mr-1 ml-3">
                Edit passwod
              </button>
              <button class="btn btn-sm btn-danger p-1">
                Delete Acount
              </button>
          </div>
          
        </div>
      </div>
     </div>
     <!-- DETAILS CONTAINER ENDS HERE ^ -->
     <!-- info box start here which give link for order etc. -->
    <div class="col-lg-8">
      <div class="row">
             <!-- TRACK BOOKING -->
        <a class="col-lg-6 mt-2" href="orders.php">
          <div class="card cord-item">
            <div class="card-body">
              <div class="row">
                <div class="col-3">
                  <i class="fa fa-4x pt-2 fa-cart-plus " style="color:blueviolet;"></i>
                </div>
                <div class="col-9" >
                  <h4><b>Your Booking</b></h4>
                  <p class="text-secondary">Track your booking,cancel or approve booking...</p>
                </div>
              </div>
            </div>
          </div>
        </a>
        <!-- ADDRESS -->
        <a class="col-lg-6 mt-2" href="address.php">
          <div class="card cord-item">
            <div class="card-body">
              <div class="row">
                <div class="col-3">
                  <i class="fa fa-4x pt-2 fa-map-marker " style="color:chocolate;"></i>
                </div>
                <div class="col-9" >
                  <h4><b>Your Address</b></h4>
                  <p class="text-secondary">Change location, city to improve search...</p>
                </div>
              </div>
            </div>
          </div>
        </a>
        <!--LOGIN AND SECURITY  -->
        <a class="col-lg-6 mt-2" href="login_security.php">
          <div class="card cord-item">
            <div class="card-body">
              <div class="row">
                <div class="col-3">
                  <i class="fa fa-4x pt-2 fa-unlock-alt" style="color:darkgreen;"></i>
                </div>
                <div class="col-9">
                  <h4><b>Login and Security</b></h4>
                  <p class="text-secondary">Edit name, email, phone number...</p>
                </div>
              </div>
            </div>
          </div>
        </a>
    <!--  product -->
    
        <a class="col-lg-6 mt-2" href="products.php">
          <div class="card cord-item">
            <div class="card-body">
              <div class="row">
                <div class="col-3">
                  <i class="fa fa-4x pt-2 fa-product-hunt" style="color:deeppink;"></i>
                </div>
                <div class="col-9">
                  <h4><b>Products</b></h4>
                  <p class="text-secondary">List of all products and add more products...</p>
                </div>
              </div>
            </div>
          </div>
        </a>
        <!-- profile -->
        <a class="col-lg-6 mt-2" href="profile.php">
          <div class="card cord-item">
            <div class="card-body">
              <div class="row">
                <div class="col-3">
                  <i class="fa fa-4x pt-2 fa-user-circle" style="color:rgb(255, 134, 20);"></i>
                </div>
                <div class="col-9">
                  <h4><b>Profile</b></h4>
                  <p class="text-secondary">Your Business Detail public to all user...</p>
                </div>
              </div>
            </div>
          </div>
        </a>
        <!-- About you salon -->
        <a class="col-lg-6 mt-2" href="about.php">
          <div class="card cord-item">
            <div class="card-body">
              <div class="row">
                <div class="col-3">
                  <i class="fa fa-4x pt-2 fa-cog" style="color:rgba(51, 10, 231, 0.945);"></i>
                </div>
                <div class="col-9">
                  <h4><b>Add Services</b></h4>
                  <p class="text-secondary">Describe more your business, services and timing...</p>
                </div>
              </div>
            </div>
          </div>
        </a>
        <!-- ENDS and  NOW ROW START -->

          </div>
        </div>

    <!-- new col-lg-8 end above -->
    </div>
  </div>














</body>
</html>
