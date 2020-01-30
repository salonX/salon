<?php
    include "../auth/encryption.php"; 
    $enc=new Encryption();
    $sql="SELECT * FROM products where products_id='$product_id'";
    // echo $sql;
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==1){
        
        $row=mysqli_fetch_assoc($result);
        $row['salon_id']=$enc->level_3($row['salon_id']);
        //print_r($row);
    }
    else{
        header("Location: ../?q=error");
        return;
    }
?>