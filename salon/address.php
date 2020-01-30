<!DOCTYPE html>
<html lang="en">
<?php session_start();?>

<!-- THIS SCRIPT HELP IN CHANGE of LOCATION BASED ON LOGIN AND ROLE OF USER -->
<?php if(!isset($_SESSION['user'])){ header("Location: ../register/login.php");return;}?>
<?php if($_SESSION['role']==0){ header("Location: ../user");return;}?>
<!-- SCRIPT ENDS HERE -->

    <head>
    <?php include "../common/all_header_files.php";?>
    
    <link rel="stylesheet" href="style.css">
    
    </head>
    <body>
        <?php include "../nav/inner_top.php";?>
        <title><?php echo $details['name'];?> Address</title>


        <div class="container">
            <!-- row start: acount>booking -->
                <div class="row pl-2 mt-1">
                
                <p>
                    <a href="../salon/" style="text-decoration:underline;" class="link-a">Your Acount</a>
                    <small class="text-secondary"> > </small>
                    <a style="color:chocolate;">Your Address</a>
                </p>
            </div>
            <!-- ends of row -->
            <!-- card start -->
            <div class="row p-1 ">
                <div class="col-md-8 mx-auto d-block w3-border pb-2 shadow-sm pt-3 pb-3">
                    <div class="row">
                        <div class="col-3">
                            <b>Address</b>
                        </div>
                        <div class="col-6">
                            <?php echo $details['address'] ?>,
                            <br>
                            <?php echo $details['area'] ?>,
                            <br>
                            <?php echo $details['city'] ?>,
                            <br>
                            201309
                        </div>
                        <div class="col-3 pt-2  pl-0">
                            <a class="btn btn-primary" href="edit_address.php">
                                Edit Add<span class="w3-hide-small">ress</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card ends -->
        </div>

    </body>
</html>
