<!DOCTYPE html>
<html lang="en">
<?php session_start();?>

<!-- THIS SCRIPT HELP IN CHANGE of LOCATION BASED ON LOGIN AND ROLE OF USER -->
<?php if(!isset($_SESSION['user'])){ header("Location: ../register/login.php");return;}?>
<?php if($_SESSION['role']==1){ header("Location: ../salon");return;}?>
<!-- SCRIPT ENDS HERE -->
<?php include "../auth/connection.php" ; ?>
<?php include "../auth/decryption.php" ; ?>
<?php $dec=new Decryption();?>
<?php include "../auth/encryption.php" ; ?>
<?php $enc=new Encryption();?>
<?php $user_id=$dec->level_2($_SESSION['user']);?>
<?php include "../auth/user/booking_details.php" ?>


























<head>
  <?php include "../common/all_header_files.php";?>
  <title>my Orders</title>
  <!-- <link rel="stylesheet" href="style.css"> -->
  
</head>























<body>
    <?php include "../nav/inner_top.php";?>

    <!-- container start -->
    <div class="container">











        <!-- row start: acount>booking -->
        <div class="row pl-2">
            <p>
                <a href="../user/" style="text-decoration:underline;" class="link-a">Your Acount</a>
                <small class="text-secondary"> > </small>
                <a  style="color:chocolate;">Your all booking</a>
            </p>
        </div>
        <!-- ends of row -->















        <!-- row:heading and search bar -->
        <!-- <div class="row">
            <div class="col-md-4">
                <h4><b >Your Booking</b></h4>
            </div>
            <div class="col-md-8">
                <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
                    <div class="input-group">
                        <input type="search" placeholder="Search new service..." aria-describedby="button-addon1" class="form-control border-0 bg-light">
                        <div class="input-group-append">
                        <button id="button-addon1" type="submit" class="btn btn-link text-primary"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- end of row heading and search -->  
        
        









    </div>
    <!-- end of container -->













































<!-- pills start here for different option like all order privios one and new order ect -->

<div class="container">
    <!-- controller pills -->
    <ul class="nav nav-tabs">
      <li class="active  pr-2">
          <a class=" " data-toggle="tab" href="#new">
          <i class="fa fa-certificate text-primary"></i> 
           Running</a>
      </li>
      
      <li class="pl-2 pr-2"><a data-toggle="tab" href="#cancelled">
        <i class="fa fa-check text-success"></i>  
        completed</a></li>
      
       
    </ul>
    <!-- controller ppillls ends -->
  

















    <div class="tab-content">




















        <!-- new booking start -->
      <div id="new" class="tab-pane in active">
        <div class="row p-2">
            <!-- card start -->
            <?php 
              $counter=0;
              foreach($booking as $book){
                if($book['seen']==0){
                  include "order_card.php";
                  $counter++;
                }
                //  echo  $enc->level_2(base64_encode($book['order_id']))."ac";
              }
              if($counter==0){
                include "order_0.php";
              }
              
            ?> 
        </div>
       </div>
       <!-- new booking ends here^ -->










      


      <div id="cancelled" class="tab-pane fade">
        <div class="row p-2">
            <!-- card start -->
            <?php 
              $counter=0;
              foreach($booking as $book){
                if($book['seen']>=1){
                  include "order_card.php";
                  $counter++;
                }
              }
              if($counter==0){
                include "order_0.php";
              }
              ?> 
        </div>
      </div>


















      
      







      


    </div>











  </div>
 <!-- ends of pills here Ok -->














  
</body>
</html>



















<script>
  function reject(data){
    $.ajax({
          url: "../auth/bookings/rejected_by_user.php?q="+data,
    }).done(function(get_data) {
      console.log(get_data);
      if(get_data=="success"){

        $("#"+data).css("display","none");
      }
      
    });
  }
</script>