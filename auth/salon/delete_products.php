<?php
session_start();
if(isset($_REQUEST['p'])){
    include "../connection.php";
    include "../decryption.php";
    $dec=new Decryption();
    if(isset($_SESSION['user']) && $_SESSION['role']==1){
        $salon_id=$dec->level_2($_SESSION['user']);
    }else{
        header("../../register/login.php");
        return;
    }
    
    
    $products_id=$_REQUEST['p'];
    $products_id=$dec->level_3($products_id);
    $sql="update products set salon_id='-1' where products_id='$products_id'";
    $query=mysqli_query($conn,$sql);
    if(!query){
        header("Location: ../../salon/products.php?status=failed");
    }else{
        header("Location: ../../salon/products.php?status=success");
    }

}else{
    header("Location: ../../");
}

?>