<!DOCTYPE html>
<html lang="en">
<?php session_start();?>
<head>
  <?php include "../common/all_header_files.php";?>
  <title>Salon Profile</title>
</head>
<body>
  <?php include "../nav/inner_top.php"; ?>

  <div class="container">
    <div class="row ">

      <!-- this container \/ is for detail part -->
      <div class="col-lg-8 col-md-6 mx-auto a-block mt-2">
      <div class="card" >
        <img class="card-img-top img-fluid img-thumbnail rounded"  src="../images/home_page/carousel/5.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"><b><?php echo $details['name'];?></b></h5>

          
          <div class="row">
            <div class="col-md-12 col-lg-6">
              <p class="text-muted card-text"><i class="fa fa-envelope"></i> <?php echo $details['email']; ?></p>
            </div>
            <div class="col-md-12 col-lg-6">
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
     
     <!-- TRACK BOOKING -->
     <div class="col-lg-6 mt-2">
      <div class="card">
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
     </div>
     <!-- ADDRESS -->
     <div class="col-lg-6 mt-2">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-3">
              <i class="fa fa-4x pt-2 fa-map-marker " style="color:chocolate;"></i>
            </div>
            <div class="col-9" >
              <h4><b>Your Address</b></h4>
              <p class="text-secondary">Track your booking,cancel or approve booking...</p>
            </div>
          </div>
        </div>
      </div>
     </div>
     <!--LOGIN AND SECURITY  -->
     <div class="col-lg-6 mt-2">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-3">
              <i class="fa fa-4x pt-2 fa-unlock-alt" style="color:darkgreen;"></i>
            </div>
            <div class="col-9">
              <h4><b>Login and Security</b></h4>
              <p class="text-secondary">Change location, city to improve search...</p>
            </div>
          </div>
        </div>
      </div>
     </div>
<!--  product -->
     <div class="col-lg-6 mt-2">
      <div class="card">
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
     </div>
     <!-- ENDS NOW ROW START -->

    </div>
  </div>














</body>
</html>
