<?php include "../auth/connection.php" ;?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "../common/all_header_files.php"; ?>
    <?php include "../auth/decryption.php" ; ?>
    <title>Book Product</title>
</head>

<body style="font-family: 'Assistant', sans-serif;">

    <!-- code for NAVBAR -->
    <?php include "../nav/inner_top.php"?>

    <br><h3 class="text-center"><b>Add Details</b></h3>
    <br>

    <?php

        if(isset($_POST['book']) && isset($_GET['product_id'])){

           $dec = new Decryption() ;

            $product_id = $dec->level_3($_GET['product_id']) ;
            $name = $_POST['name'] ;
            $city = $_POST['city'] ;
            $phone = $_POST['phone'] ;

            $user_info=json_decode($_SESSION['user_info'],true);
            $user_email = $user_info['email'] ;

            $product_query = "SELECT * FROM products WHERE products_id = $product_id" ;
            $prod_result = mysqli_query($conn , $product_query) OR die('booking product info error '.mysqli_error($conn)) ;
            $prod_info = mysqli_fetch_assoc($prod_result) ;

            $salon_id = $prod_info['salon_id'] ;


            $query = "INSERT INTO booking (product_id , salon_id , name , email , city , phone_number , is_visited , time) 
                        VALUES ($product_id , $salon_id , '$name' , '$user_email' , '$city' , '$phone' , 1 , now())" ;

            $result = mysqli_query($conn , $query) OR die('booking error '.mysqli_error($conn));


        }


     ?>

    <div class="row jumbotron jumbotron-fluid">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="">
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label><b>Name of Reciever</b></label>
                          <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group col-md-6">
                          <label><b>City</b></label>
                          <input type="text" class="form-control" name="city">
                        </div>
                      </div>
                      <div class="form-group">
                        <label ><b>Phone</b></label>
                        <input type="text" class="form-control" name="phone">
                      </div>
                      <button type="submit" class="btn btn-primary btn-sm btn-block" name="book">Book</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

  

   <br>
    <?php include "./../nav/bottom.php" ?>

</body>

</html>