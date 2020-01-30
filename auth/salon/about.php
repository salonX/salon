<?php session_start();?>
<!-- THIS SCRIPT HELP IN CHANGE of LOCATION BASED ON LOGIN AND ROLE OF USER -->
<?php if(!isset($_SESSION['user'])){ header("Location: ../../register/login.php");return;}?>
<?php if($_SESSION['role']==0){ header("Location: ../../user");return;}?>
<!-- SCRIPT ENDS HERE -->

<?php include "../connection.php" ?>
<?php include "../decryption.php" ?>
<?php $dec=new Decryption();?>

<?php $salon_id=$dec->level_2($_SESSION['user']); ?>


<!-- now we have salon id and we have checked salon is login -->
<?php

    // print_r($_POST);
    
    if(isset($_POST['submit'])){
        $data=$_POST;
        $services=$data['services'];
        $about=$data['about'];
        $expertise=$data['specialist'];
        $facebook=$data['facebook'];
        $twitter=$data['twitter'];
        $instagram=$data['instagram'];
        $wifi=$data['wifi'];
        $ac=$data['ac'];
        if(isset($_POST['new_data']) && $_POST['new_data']=="new_data")
            $sql="INSERT INTO salon_description (salon_id ,about,services,expertise,facebook,twitter,instagram,wifi,ac)
          values ('$salon_id','$about','$services','$expertise','$facebook','$twitter','$instagram','$wifi','$ac')";
        else
            $sql="UPDATE salon_description
            set 
            about='$about',services='$services',expertise='$expertise',
            facebook='$facebook',twitter='$twitter',instagram='$instagram',wifi='$wifi',ac='$ac'
            where salon_id='$salon_id'
            ";
        $result=mysqli_query($conn,$sql);
        if(!result){
            header("Location: ../../salon/about.php?status=faile");
        }else{
            header("Location: ../../salon/");
        }

    }
    

    
    ?>
    