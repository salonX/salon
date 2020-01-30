<?php
    session_start();
    $booking_id=$_REQUEST['q'];
    
    // print_r($form);
    if(isset($booking_id)){
        include "../connection.php";
        include "../decryption.php";
        $dec=new Decryption();
        $booking_id=$dec->level_3($booking_id);
        if(isset($_SESSION['user']) && $_SESSION['role']==1){
            $salon_id=$dec->level_2($_SESSION['user']);
        }else{
            header("../../register/login.php");
            return;
        }
        $sql="SELECT user_id from booking where order_id='$booking_id'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)==1){
            $user_id=mysqli_fetch_assoc($result)['user_id'];
        }else{
            // $user_id=null;
            echo "error";
            return;
        }
        // print_r($details);
        $user_id=-$user_id;
        $sql="UPDATE booking set seen='-1' where order_id='$booking_id'";
        $query=mysqli_query($conn,$sql);
        if(!query){
            
            echo "error";
        }else{
            // echo $sql;
            echo "success";
        }

    }else{
        echo "error";
    }




?>