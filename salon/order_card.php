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
          <div class="w3-dropdown-hover w3-right " >
            <button class="bg-light w3-right dropdown-toggle" style="border:0px;font-size:15px;"></i></button>
            <div class="w3-dropdown-content w3-bar-block w3-border  w3-animate-zoom" style="right:0">
              <ul class="list-group" style="font-size:11px;">
                <!-- <li class="list-group-item">Rc 99, B-block, indirapuram<br> sahibabad, Ghaziabad</li> -->
                <li class="list-group-item">This category/products no longer available</li>
                <li class="list-group-item">Block this user</li>
                
              </ul>
            </div>
          </div>
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
                  <span style="font-size:18px;"class="text-primary"><i class="fa fa-user"> </i> <?php echo $book['name'];?></span><br>
                  <span style="font-size:12px;"><i class="fa fa-phone"></i> +91 <?php echo $book['phone_number'];?></span><br>
                  <span style="font-size:12px;"><i class="fa fa-envelope"></i> <?php echo $book['email'];?></span><br>
                  <i class="fa fa-rupee "></i> <span class="text-danger"><?php echo $book['price'];?>/-</span>
              </p>
              
              
              <?php if($book['seen']==0){
                  ?>
                    <div id="<?php echo $enc->level_3($book['order_id']);?>">
                        <button class="btn btn-outline-primary btn-sm" onclick="accept(<?php echo $enc->level_3($book['order_id']);?>)">Accept Booking</button>
                        <button class="btn btn-outline-danger btn-sm" onclick="reject(<?php echo $enc->level_3($book['order_id']);?>)">Reject Booking </button>
                    </div>
                  <?php
              }else if($book['seen']!=0 &&$book['seen']>0){
                ?>
                  <div >
                        <button class="btn btn-muted btn-sm disabled" >Accepted</button>
                  </div>

                <?php
              }else{
                ?>
                  <div >
                        <button class="btn btn-danger btn-sm disabled" >Cancelled </button>
                  </div>

                <?php
              }
              ?>
          </div>
      </div>
    </div>
  </div>
<!-- cards end here -->