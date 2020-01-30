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
    
    <div class="container-fluid ">
        <div class="row d-lg-none d-md-none">
            
            <div class="col-md-4 bg-primary pb-3 " >
                <div class="row">
                    <div class="col-4 mx-auto d-block pt-5 pb-2">
                        <img src="../images/user/logo.svg" 
                            alt="" 
                            class="img img-thumnail w-100 border-primmary p-1" 
                            style="border:5px solid white;
                            border-radius: 50%;
                            background-color: rgb(243, 237, 237);">

                    </div>
                </div>
                <div class="row " >
                    <p class="mx-auto d-block text-white mb-3" style="font-size: 18px;"><b class="text-center">Amir Saifi</b></p>
                </div>
                <div class="row " >
                    <p class="mx-auto d-block text-white mb-0" style="font-size: 11px;"><b class="text-center">7210378472</b></p>
                </div>

                <div class="row pl-4 pr-3" >
                    <p class="mx-auto d-block text-white" style="font-size: 11px;"><b class="text-center">modkhalid5@gmail.com</b> </p>
                    <span class="w3-right text-white "><a href="edit_profile.php"><i class="fa fa-pencil"></i></a></span>
                </div>
            </div>
            
            <!-- col end -->

            
        </div>
        <!-- row end -->


        <!-- div row start for larger screen -->

        
    </div>
    <!-- container end -->










































    <div class="container mt-3  ">
        <div class="row">
            <div class="col-md-3">






                <!-- cad for name start here -->
                <div class="card shadow-sm mb-3">
                    <div class="card-body row">
                        <div class="col-4">
                            <img 
                                src="../images/user/logo.svg" 
                                style="border: 5px solid rgb(243, 230, 230);"
                                alt="" class="img rounded-circle img-thumbnail img-fluid">
                        </div>
                        <div class="col-8">
                            <small class="mb-0 pb-0">Hello</small>
                            <h5 class="mt-0"><b><?php echo $details['name']; ?></b></h5>
                        </div>
                    </div>
                </div>
                <!-- End>>card for name start here -->





                <!-- card for options -->
            
                <div class="card shadow-sm mb-3">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <a href="orders.php" class="list-group-item">
                                <b>
                                    My ORDERS
                                </b>
                            </a>
                            <li class="list-group-item text-primary">
                                <b>
                                    Profile Information
                                </b>
                            </li>

                            <a class="list-group-item" href="edit_password.php">
                                <b>
                                    Change Password
                                </b>
                            </a>
                        </ul>
                    </div>
                </div>

                <!-- card for options end here -->






            </div>


            <!-- col 3 ends here -->
            <div class="col-md-9  w3-hide-small w3-hide-medium">
                <div class="card shadow-sm mb-3 p-3 bg-primary text-white">
                    <div class="body">
                        <h1>
                            <b>
                            <?php echo $details['name']; ?>
                            </b>
                        </h1>

                        <h4>
                            <b>
                               +91 <?php echo $details['phone_number']; ?>
                            </b>
                        </h4>

                        <h6>
                            <b>
                            <?php echo $details['email']; ?>
                            </b>
                        </h6>
                        <h2 class="text-right">
                            <a href="edit_profile.php">
                               <i class="fa fa-pencil"></i>
                            </a>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>




</body>
</html>