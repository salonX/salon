<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include "../auth/connection.php" ?>
    <?php include "../auth/decryption.php" ?>
    <?php $dec=new Decryption();?>
    <?php session_start();?>
    <?php include "../common/all_header_files.php"; ?>
    
    
    
<!-- THIS SCRIPT HELP IN CHANGE of LOCATION BASED ON LOGIN AND ROLE OF USER -->
<?php if(!isset($_SESSION['user'])){ header("Location: ../register/login.php");return;}?>
<?php if($_SESSION['role']==0){ header("Location: ../user");return;}?>
<!-- SCRIPT ENDS HERE -->



</head>
<body>
    

    <!-- navbar -->


    <?php include "../nav/inner_top.php"; ?>


    <?php

    // salon id found here
        $salon_id=$dec->level_2($_SESSION['user']);
        // echo $salon_id;
        $sql="SELECT * FROM salon_description where salon_id='$salon_id'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==1){
        $values=mysqli_fetch_assoc($result);
        // print_r($values);
    }else{
        $new_data=1;
    }

    ?>
    <!-- form start here  -->



    <div class="container">
        <div class="row p-1">
            <div class="col-md-8 mx-auto d-block card mt-3 shadow-lg pb-3">
                <?php 
                if(isset($_REQUEST['status'])){
                    if($_REQUEST['status']=="failed"){
                         echo '<div class="alert alert-danger mt-2" role="alert">
                            <strong>Error!</strong> while adding Business Description please try again 
                            <a href="../salon"> Back to home </a>
                        </div>';
                    }
                }else{
                    echo "<h3 class='w3-center'><b>Business Description Form</b></h3>";
                }
                ?>
                
                <form action="../auth/salon/about.php" method="POST">
                    <div class="form-group pt-1">
                      <label for="about" ><b>About your Business</b></label>
                      <textarea  
                        class="form-control"
                        name="about" 
                        id="about" 
                        placeholder="Write about your self" ><?php echo $values['about'] ?></textarea>
                    </div>
                    <div class="form-group pt-1">
                        <label for="services" ><b>Services</b></label>
                        <textarea  
                            class="form-control" 
                            id="services" 
                            name="services"  
                            placeholder="Enter Service" ><?php echo $values['services'] ?></textarea>
                    </div>

                    <div class="form-group pt-1">
                        <label for="specialist" ><b>Specialist</b></label>
                        <input 
                            text="text" 
                            class="form-control" 
                            id="specialist" 
                            name="specialist" 
                            placeholder="Write any special category"
                            value="<?php echo $values['expertise'] ?>" >
                    </div>



                    <label><b>Amenities</b></label>
                    <div class="row pb-3">
                        
                        <div class="col-6">
                            <div class="form-check">
                                <input 
                                    class="form-check-input" 
                                    name="ac"
                                    type="checkbox" value="1" id="ac" >
                                <label class="form-check-label " for="ac">
                                  AC
                                </label>
                              </div>
                        </div>

                        <div class="col-6">
                            <div class="form-check">
                                <input 
                                    class="form-check-input" 
                                    type="checkbox" 
                                    name="wifi"
                                    value="1" id="wifi">
                                <label class="form-check-label" for="wifi">
                                  Free Wifi
                                </label>
                              </div>
                        </div>
                    </div>



                    <div class="form-group pt-1">
                        <label for="service" ><b>Facebook</b></label>
                        
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text bg-primary text-white" id="facebook-button"><i class="fa fa-facebook"></i></span>
                            </div>
                            <input 
                                type="text" 
                                name="facebook"
                                value="<?php echo $values['facebook']; ?>"
                                class="form-control" 
                                placeholder="Facebook page link" 
                                aria-label="Facebook page link" 
                                aria-describedby="facebook-button">
                        </div>
                    </div>

                    <div class="form-group pt-1">
                        <label for="service" ><b>Instagram</b></label>
                        
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text  text-white" id="instagram-button" style="background: #d6249f;
                              background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 100%);">
                                  <i class="fa fa-instagram "></i>
                                </span>
                            </div>
                            <input 
                                type="text"
                                value="<?php echo $values['instagram']; ?>" 
                                class="form-control" 
                                name="instagram"
                                placeholder="Instagram page link" 
                                aria-label="Instagram page link" 
                                aria-describedby="instagram-button">
                        </div>
                    </div>

                    <div class="form-group pt-1">
                        <label for="service" ><b>Twitter</b></label>
                        
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text bg-primary text-white" id="twitter-button">
                                  <i class="fa fa-twitter" ></i></span>
                            </div>
                            <input 
                                type="text" 
                                name="twitter"
                                value="<?php echo $values['twitter']; ?>" 
                                class="form-control" 
                                placeholder="Twitter page link" 
                                aria-label="Twitter page link" 
                                aria-describedby="twitter-button">
                        </div>
                    </div>


                    <?php if(isset($new_data) && $new_data==1){
                        ?>
                            <input type="hidden" value="new_data" name="new_data" >
                        <?php
                    }
                    ?>
                    

                    


                    


                    <button class="btn btn-success" name="submit">Save Changes</button>
                    
                    
                  </form>
            </div>
        </div>
    </div>










    



















</body>
<script src="about.js"></script>
</html>