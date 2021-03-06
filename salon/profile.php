<!-- this is salon public profile visible to all user if salon is already login then salon can see only its own product -->
<!-- does't matter if they are searching for other salon product -->
<?php include "../auth/connection.php" ; ?>
<?php include "../auth/decryption.php" ; ?>

<!doctype html>
<html lang="en">
  <head>
    <script type="text/javascript" src="../js/cookie.js"></script>
    <?php include "../common/all_header_files.php" ; ?>
    <?php
    $dec = new Decryption() ;
    if(isset($_GET['salon_id'])){
      $salon_id=$dec->level_3($_GET['salon_id']) ;
      $i_am_not_visit_this_page=1;
      // echo $salon_id;
    }else if(isset($_SESSION['user']) && $_SESSION['role']==1) {
      $salon_id=$dec->level_2($_SESSION['user']);
    }else{
      header("Location: ../index.php") ;
    }
    ?>    
    <title>SalonX</title>
  </head>













  
  <body  style="font-family: 'Assistant', sans-serif;">
      
      <!-- NAVBAR  -->  
      
      <?php include "../nav/inner_top.php" ?>
      
      
       <!-- NAVBAR ENDS HERE -->

       <?php if($i_am_not_visit_this_page!=1){?> <!-- only for salon itself -->
      <div class="container">
        <!-- row start: acount>booking -->
        <div class="row pl-2 mt-1">
                
          <p>
              <a href="../salon/" style="text-decoration:underline;" class="link-a">Your Acount</a>
              <small class="text-secondary"> > </small>
              <a style="color:chocolate;">Products</a>
          </p>
      </div>
       <?php } ?>

      <!-- ends of row -->
      </div>
      












      <!--PAGE CONTENT STARTS -->
      <!-- <div class="row p-0 m-0 bg-danger"> -->
          
        <!-- MAIN CONTENT -->  
      <!-- <div class="col-sm-12"> -->


        <div id="all_product" class="container">
          <h2 style="font-family: 'Dancing Script'" >All Product</h2><br>


          <!-- main row start below -->
          <div class="row">




























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






















<!-- product container -->


        <div class="col-md-8">
        <?php 
          
        // salon_id already found in above code
          $totalProd = "SELECT * FROM products WHERE salon_id = $salon_id" ;
          $totalProdRes = mysqli_query($conn , $totalProd) ;
          $total = mysqli_num_rows($totalProdRes) ;

          $totalRows = ceil($total / 3) ;

          $prods = [] ;
          $i = 0 ;

          while($row = mysqli_fetch_assoc($totalProdRes)){
            array_push($prods, $row) ;
            $i++ ;
          }

          $curRow = 0 ;
          $curCol = 0 ;
          // print_r($prods);

         ?>
         

        <?php while($curRow < $totalRows){ ?>
          <div class="row">
            <?php while($curCol < 3 && ($curCol + 3*$curRow) < $total){ ?>
            <div class="col-md-4">
              <div class="card mt-2 shadow-lg">
                <!-- <div class="card-header bg-light"></div> -->
                <div class="card-body p-2">
                  <div class="container-img pb-0" style="position: relative;color: rgb(247, 192, 12);">
                    <img class="img-fluid rounded shadow-sm"
                      style=" display: block;
                      margin-left: auto;
                      margin-right: auto;
                      width: 100%;"
                      src="<?php echo '../'.$prods[$curCol + ($curRow)*3]['icon'];?>"
                    >
                    <p class="bg-white p-1 " 
                      style="font-size: 10px;
                           position: absolute;bottom: 0px;
                           left: 6px;border: 1px solid rgb(255, 196, 4);
                           font-family: 'Dancing Script';
                           border-radius: 5px;">
                      <b class="text-dark">SalonX : </b>
                      
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </p>
                  </div>

                  
                  





                  <p class="mt-3 pl-3 mb-0"><b><?php echo $prods[$curCol + ($curRow)*3]['title']?></b></p>
                  <p class="text-secondary pl-3 mb-0"><?php echo $prods[$curCol + ($curRow)*3]['category']?></p>
                  <p style="font-size:22px;" class="pl-3 mb-0">
                    <i class="fa fa-rupee text-success "></i> 
                    <b class=" text-success "><?php echo $prods[$curCol + ($curRow)*3]['price']?> /-</b>
                    <del style="font-size:15px;" class="pl-2 text-secondary"><i class="fa fa-rupee "></i> <?php echo $prods[$curCol + ($curRow)*3]['price']?> </del>
                    <b style="font-size: 15px;color: lightgray; border-radius: 5px;" class="text-warning p-2 shadow-sm ml-4 w3-right">40% off</b>
                  </p>
                  
                   
                  

                  
                  <?php $id = $prods[$curCol + ($curRow)*3]['products_id'] ; ?>






                  <div class="row mt-3 pl-3">
                  <!-- if else for login or not  -->
                  <?php if($i_am_not_visit_this_page==1){?>
                  <a href="../bookings/index.php?product_id=<?php echo $id ?>" style="text-decoration: none;">
                    <button class="btn btn-primary btn-sm btn-block">Book</button>
                  </a>
                  <?php }else{ ?>
                    <a href="../bookings/index.php?product_id=<?php echo $id ?>" class="pl-3" style="text-decoration: none;">
                      <button class="btn btn-outline-danger btn-sm btn-block"
                      ><i class="fa fa-trash"></i> Mark as not available</button>
                    </a>

                    <a href="../bookings/index.php?product_id=<?php echo $id ?>" class="pl-3" style="text-decoration: none;">
                      <button 
                        class="btn btn-outline-primary btn-sm btn-block">
                        <i class="fa fa-edit"></i> Edit details
                      </button>
                    </a>
                  <?php } ?>
                    <!-- if  else end here -->
                  </div>

                  


                </div>
              </div>
            </div>
          <?php
              $curCol++ ;        
             } 
            $curRow++ ;
            $curCol = 0 ;
          ?>
          </div>
        <?php } ?>
        </div>













        <!-- div row end here main -->
      </div>
     </div>  <!-- MAIN CONTENT ENDS -->  
      <!-- </div> MAIN ROW ENDS -->
      
          
    <br><br><br><br>      
      
      <!-- FOOTER GOES HERE -->
      <?php //include "../nav/inner_bottom.php" ?>
      
  </body>
</html>