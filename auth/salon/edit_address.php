<?php
session_start();

$form=$_POST;
// print_r($form);
// return;
if(isset($form['submit'])){
    include "../connection.php";
    include "../decryption.php";
    $dec=new Decryption();
    if(isset($_SESSION['user']) && $_SESSION['role']==1){
        $salon_id=$dec->level_2($_SESSION['user']);
    }else{
        header("../../register/login.php");
        return;
    }
    $address=mysqli_real_escape_string($conn,$form['address']);
    $area=mysqli_real_escape_string($conn,$form['area']);
    $city=mysqli_real_escape_string($conn,$form['city']);
    
    
    $sql="update salon set address='$address',area='$area',city='$city' where salon_id='$salon_id'";
    $query=mysqli_query($conn,$sql);
    if(!query){
        header("Location: ../../salon/edit_address.php?status=failed");
    }else{
        header("Location: ../../salon/address.php?status=success");
        // print_r($form);
        // echo $sql;
        // return;
    }

}else{
    header("Location: ../../");
}

?>