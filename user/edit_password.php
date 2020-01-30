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
                <a style="color:chocolate;">Edit Password</a>
            </p>
        </div>






        <div class="row">
            <div class="col-md-6 mx-auto d-block ">
                <form action="../auth/salon/edit_address.php" method="POST">
                    
                    <h5><b>Old Password</b></h5>
                    <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
                        <div class="input-group">
                        <input 
                            type="password" 
                            placeholder="Previous Password..." 
                            
                            aria-describedby="button-addon1" 
                            name="city"
                            class="form-control border-0 bg-light">
                        </div>
                    </div>
                    <h5><b>new Password</b></h5>
                    <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
                        <div class="input-group">
                        <input 
                            type="password" 
                            placeholder="New password..." 
                            
                            aria-describedby="button-addon1" 
                            name="new_password"
                            class="form-control border-0 bg-light">
                        </div>
                    </div>
                    <h5><b>Confirm Password</b></h5>
                    <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
                        <div class="input-group">
                        <input 
                            type="password" 
                            placeholder="Confirm Password..." 
                            value="<?php echo $details['city'];?>"
                            aria-describedby="button-addon1" 
                            name="confirm_password"
                            class="form-control border-0 bg-light">
                        </div>
                    </div>
                    <button class="btn btn-warning text-white  " type="submit" name="submit"><b>Update changes</b></button>
                </form> 


            </div>
        </div>
    </div>

</div>






























</body>
</html>