<?php
session_start();

$form=$_POST;
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
    $title=mysqli_real_escape_string($conn,$form['title']);
    $price=mysqli_real_escape_string($conn,$form['price']);
    $category=mysqli_real_escape_string($conn,$form['category']);
    if($form['optional_category']=="on"){
        $category=mysqli_real_escape_string($conn,$form['category_got']);
    }
    if($category=="cutting"){
        $image="images/products/cutting.jpg";
    }else if($category=="massage" || $category=="spa"){
        $image="images/products/massage.jpg";
    }else{
        $image="images/products/other.jpg";
    }
    $sql="insert into products (title,price,category,salon_id,icon) values ('$title','$price','$category','$salon_id','$image')";
    $query=mysqli_query($conn,$sql);
    if(!query){
        header("Location: ../../salon/addproduct.php?status=failed");
    }else{
        header("Location: ../../salon/addproduct.php?status=success");
    }

}else{
    header("Location: ../../");
}

?>