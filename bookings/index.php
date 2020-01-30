<?php include "../auth/connection.php" ;?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php 

    if(!isset($_REQUEST['product_id'])){
      header("Location: ../");
      return;
    }else{
      $product_id=$_REQUEST['product_id'];
    }
    ?>
    <?php include "../common/all_header_files.php"; ?>
    <?php include "../auth/decryption.php" ; ?>
    <?php $dec=new Decryption();?>
    <?php $product_id=$dec->level_3($product_id);?>
    
    
    <title>Book Product</title>
</head>

<body style="font-family: 'Assistant', sans-serif;">

    <!-- code for NAVBAR -->
    <?php include "../nav/inner_top.php"?>
    <?php include "product_details.php";?>
    <?php $salon_id=$row['salon_id']; ?>
 
    <div class="jumbotron ">
    
      <div class="container p-0">
        <div class="row">
          <div class="col-md-6 mx-auto d-block">
              <h3 class="text-center mt-0 border p-2   bg-light rounded shadow" style="font-family: 'Dancing Script'" >
              You are 1 step away to book
                
            </h3>
          </div>
        </div>





        <div class="row">
          <div class="col-md-6 mx-auto d-block">
            <form action="../auth/bookings/index.php?service=<?php echo $product_id; ?>&client=<?php echo $salon_id; ?>" method="POST">
              <div class="card shadow">
                <div class="card-header">
                <div class="form-group row">
                  <label for="example-datetime-local-input" class="col-sm-4 col-form-label">Booking Date and time <span class="text-danger">*</span></label>
                  <div class="col-sm-8">
                    <input 
                      class="form-control"
                      name="date" 
                      type="datetime-local" 
                      value="2020-01-20T13:45:00" 
                      id="example-datetime-local-input">
                  </div>
                </div>
                </div>
                <div class="card-body">
                  <img class="img-fluid rounded shadow-sm img-thumbnail"
                      style=" display: block;
                      margin-left: auto;
                      margin-right: auto;
                      width: 100%;"
                      src="<?php echo '../'.$row['icon'];?>"
                  >
                  <p class="mt-3 pl-3 mb-0"><b><?php echo $row['title']?></b></p>
                  <p class="text-secondary pl-3 mb-0"><?php echo $row['category']?></p>
                  <p style="font-size:22px;" class="pl-3 mb-0">
                    <i class="fa fa-rupee text-success "></i> 
                    <b class=" text-success "><?php echo $row['price']?> /-</b>
                    <del style="font-size:15px;" class="pl-2 text-secondary"><i class="fa fa-rupee "></i> <?php echo $row['price']?> </del>
                    <b style="font-size: 15px;color: lightgray; border-radius: 5px;" class="text-warning p-2 shadow-sm ml-4 w3-right">40% off</b>
                  </p>
                  
                </div>
                <!-- card -body end -->
                <div class="card-footer">
                  <div class="form-group row ">
                    <label for="example-text-input" class="col-sm-3 col-form-label">Phone Number</label>
                    <div class="col-sm-9">
                      <input 
                        class="form-control" 
                        name="alternate_phone_number"
                        type="number"  
                        id="example-text-input" 
                        placeholder="Alternate Mobile Number">
                    </div>
                  </div>
                  <button 
                    class="btn btn-primary "
                    name="submit"
                    type="submit"
                    > Book Salon</button>
                </div>
              </div>  
              <!-- card end -->
              </form>
              <!-- form end -->
          </div>
          <!-- col end -->
        </div>
        <!-- row end -->
      </div>
      <!-- container -->
    </div>
    <!-- end end -->

  



   <br>
    <?php //include "./../nav/bottom.php" ?>

</body>

</html>