<!-- card_start -->
<div class="card shadow-lg rounded mb-3" style="width: 100%;">
    <div class="card-header pl-1 m-0">
      <!-- card header row start -->
      <div class="row p-0 m-0">
        <div class="col-10 ">
          <p class="mb-0" style="font-size:10px;">
            Booked on : <b><?php echo $book['time'];?></b>
          </p>
          <p class="mb-0 "  style="font-size:10px;">
            request for : <b><?php echo $book['appointment'];?></b>
          </p>
          <p class="mb-0 "  style="font-size:10px;">
            order # <b><?php echo $book['order_id'];?></b>
          </p>
        </div>










        <div class="col-2">
          
        </div>
        
      </div>
      <!-- card header row ends -->
    </div>
    <div class="card-body">
      <div class="row">
          <div class="col-3 col-lg-2 w3-hide-small">
              <img 
                src="../<?php echo $book['icon'];?>" 
                class="w3-center w-100"
              alt="">
          </div>
          <div class="col-9 col-lg-10">
              <p>
                  <b><?php echo $book['title'];?></b>
                  <br>
                  <span style="font-size:18px;"class="text-primary"><i class="fa fa-user"> </i> <a href="../salon/products.php?salon_id=<?php echo $book['salon_id']; ?>"><?php echo $book['name'];?></a></span><br>
                  <span style="font-size:12px;"><i class="fa fa-phone"></i> +91 <a href="tel:<?php echo $book['phone_number'];?>"><?php echo $book['phone_number'];?></a></span><br>
                  <span style="font-size:12px;"><i class="fa fa-envelope"></i> <a href="mailto:<?php echo $book['email'];?>"><?php echo $book['email'];?></a></span><br>
                  <span style="font-size:12px;"><i class="fa fa-map-marker"></i> <a ><?php echo $book['address'].", ".$book['area'].", ".$book['city'];?></a></span><br>
                  <br>
                  <i class="fa fa-rupee "></i> <span class="text-danger"><b><?php echo $book['price'];?>/-</b></span>
              </p>
              
              
              <?php if($book['seen']==0){
                  ?>
                    <div id="<?php echo $enc->level_3($book['order_id']);?>">
                    
                        <button class="btn btn-outline-danger btn-sm" 
                        onclick="reject(<?php echo $enc->level_3($book['order_id']);?>)"> Cancel Booking </button>
                    </div>
                  <?php
              }
              ?>
          </div>
      </div>
    </div>
  </div>
<!-- cards end here -->