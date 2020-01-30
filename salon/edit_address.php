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
        <title><?php echo $details['name'];?> Edit Address</title>


        <div class="container">
            <!-- row start: acount>booking -->
                <div class="row pl-2 mt-1">
                
                <p>
                    <a href="../salon/" style="text-decoration:underline;" class="link-a">Your Acount</a>
                    <small class="text-secondary"> > </small>
                    <a style="color:chocolate;">Edit Address</a>
                </p>
            </div>
            <!-- ends of row -->
            <!-- card start -->
            <div class="row p-1 ">
                <div class="col-md-8 mx-auto d-block w3-border pb-2 shadow-sm pt-3 pb-3">
                    <form action="../auth/salon/edit_address.php" method="POST">
                        <h5><b>Address</b></h5>
                        <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
                            <textarea name="address"  class="form-control border-0 bg-light" style="width: 100%;" rows="3" placeholder="New Address"><?php echo $details['address'];?></textarea>
                        </div>
                        <h5><b>Near by area</b></h5>
                        <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
                            <div class="input-group">
                            <input 
                                type="search" 
                                placeholder="New Area..." 
                                aria-describedby="button-addon1" 
                                value="<?php echo $details['area'];?>"
                                name="area"
                                class="form-control border-0 bg-light">
                                
                            </div>
                        </div>
                        <h5><b>City</b></h5>
                        <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
                            <div class="input-group">
                            <input 
                                type="search" 
                                placeholder="New City..." 
                                value="<?php echo $details['city'];?>"
                                aria-describedby="button-addon1" 
                                name="city"
                                class="form-control border-0 bg-light">
                            </div>
                        </div>
                        <button class="btn btn-primary btn-lg " type="submit" name="submit">Save changes</button>
                    </form>
                </div>
            </div>
            <!-- card ends -->
        </div>

    </body>
</html>
