<?php
session_start();

$form=$_POST;
if(isset($form['submit'])){
    include "../connection.php";
    include "../decryption.php";
    $dec=new Decryption();
    if(isset($_SESSION['user']) && $_SESSION['role']==0){
        $user_id=$dec->level_2($_SESSION['user']);
    }else{
        header("../../register/login.php");
        return;
    }
    $name=mysqli_real_escape_string($conn,$form['name']);
    $email=mysqli_real_escape_string($conn,$form['email']);
    $phone_number=mysqli_real_escape_string($conn,$form['phone_number']);
    
    
    $sql="update user set name='$name',phone_number='$phone_number',email='$email' where user_id='$user_id'";
    $query=mysqli_query($conn,$sql);
    // echo $sql;
    if(!query){
        header("Location: ../../user/edit_profile.php?status=failed");
    }else{
        header("Location: ../../user/edit_profile.php?status=success");
    }

}else{
    // header("Location: ../../");
}

?>