<?php session_start();?>
<!-- THIS SCRIPT HELP IN CHANGE of LOCATION BASED ON LOGIN AND ROLE OF USER -->
<?php if(!isset($_SESSION['user'])){ header("Location: ../../register/login.php");return;}?>
<?php if($_SESSION['role']==1){ header("Location: ../../salon");return;}?>
<!-- SCRIPT ENDS HERE -->

<?php include "../connection.php" ?>
<?php include "../decryption.php" ?>
<?php $dec=new Decryption();?>

<?php $user_id=$dec->level_2($_SESSION['user']); ?>

<?php 
    // print_r($_REQUEST);
    
?>

<?php
if(isset($_POST['submit']) && isset($_GET['service'])){

    

    $product_id = $dec->level_3($_GET['service']) ;
    $user_id= $dec->level_2($_SESSION['user']);
    $user= json_decode($_SESSION['user_info'],true);
    $name = $user['name'] ;
    print_r(json_decode($user,true));
    
    $email = $user['email'] ;
    $phone = $_POST['alternate_phone_number'] ;
    $appointment=$_POST['date'];
    $salon_id=$dec->level_3($_GET['client']);

    

    // $product_query = "SELECT * FROM products WHERE products_id = $product_id" ;
    // $prod_result = mysqli_query($conn , $product_query) OR die('booking product info error '.mysqli_error($conn)) ;
    // $prod_info = mysqli_fetch_assoc($prod_result) ;

    // $salon_id = $prod_info['salon_id'] ;


    // $query = "INSERT INTO booking (product_id , salon_id , name , email ,  phone_number , appointment,user_id,) 
                // VALUES ('$product_id' , '$salon_id' , '$name' , '$email' ,  '$phone' ,'$appointment','$user_id')" ;
    
    
    $query="INSERT INTO `booking` ( `product_id`, `salon_id`, `name`, `email`,  `phone_number`,   `user_id`,`appointment`) 
    VALUES ('$product_id', '$salon_id', '$name', '$email','$phone',  '$user_id','$appointment')";
    // echo $query;
    $result = mysqli_query($conn , $query) OR die('booking error '.mysqli_error($conn));
    header("Location: ../../user/orders.php?status=success");


}


?>