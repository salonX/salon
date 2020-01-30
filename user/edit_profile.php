<?php include "../auth/connection.php" ?>
<?php include "../auth/decryption.php" ?>
<?php $dec=new Decryption();?>
<?php session_start();?>
<?php include "../common/all_header_files.php"; ?>

<!-- THIS SCRIPT HELP IN CHANGE of LOCATION BASED ON LOGIN AND ROLE OF USER -->
<?php if(!isset($_SESSION['user'])){ header("Location: ../register/login.php");return;}?>
<?php if($_SESSION['role']==1){ header("Location: ../salon");return;}?>
<!-- SCRIPT ENDS HERE -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>user profile</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php include "../nav/inner_top.php" ?>
    <!-- checking is user login -->
    <?php //if(!isset($_SESSION['user']) || !isset($_SESSION['role'])){ header("Location: ../");}?>
    <!-- chck the exxist person iser user or salon -->
    
    <!-- row start: acount>booking -->
    


<div class="jumbotron pt-2">


    <div class="container">







        <div class="row pl-2 mt-1">      
            <p>
                <a href="../user/" style="text-decoration:underline;" class="link-a">Your Acount</a>
                <small class="text-secondary"> > </small>
                <a style="color:chocolate;">Edit Profile</a>
            </p>
        </div>


        <?php
        
            // if($_REQUEST['status']=="success"){
            //     echo `
            //     <div class="alert alert-success" role="alert">
            //         <strong>Success</strong> Changes in Profile updated
            //     </div>
            //     `;
            // }elseif(isset($_REQUEST['status']) && $_REQUEST['status']=="failed"){
            //     echo `
            //     <div class="alert alert-success" role="alert">
            //         <strong>Error!</strong> Please try again
            //     </div>
            //     `;
            // }




        ?>






        <div class="row">
            <div class="col-md-6 mx-auto d-block ">
                <form action="../auth/user/edit_profile.php" method="POST">
                    
                    <h5><b>Name</b></h5>
                    <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
                        <div class="input-group">
                        <input 
                            type="name" 
                            placeholder="Name" 
                            aria-describedby="button-addon1" 
                            value="<?php echo $details['name'];?>"
                            name="name"
                            class="form-control border-0 bg-light">
                            
                        </div>
                    </div>



                    <h5><b>Email</b></h5>
                    <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
                        <div class="input-group">
                        <input 
                            type="email" 
                            placeholder="Email..." 
                            value="<?php echo $details['email'];?>"
                            aria-describedby="button-addon1" 
                            name="email"
                            class="form-control border-0 bg-light">
                        </div>
                    </div>

                    <h5><b>Mobile Number</b></h5>
                    <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
                        <div class="input-group">
                        <input 
                            type="number" 
                            placeholder="Mobile Number..." 
                            value="<?php echo $details['phone_number'];?>"
                            aria-describedby="button-addon1" 
                            name="phone_number"
                            class="form-control border-0 bg-light">
                        </div>
                    </div>


                    <button class="btn btn-warning text-white" type="submit" name="submit">Update changes</button>
                </form> 


            </div>
        </div>
    </div>

</div>






























</body>
</html>