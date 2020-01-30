<?php
  $isLogin=true;
  $isSalon=false;
  if(isset($_SESSION['user']) && $_SESSION['role']==1){
    $details=json_decode($_SESSION['salon_info'],true);
    $isSalon=true;
  }else if(isset($_SESSION['user']) && $_SESSION['role']==0){
    $details=json_decode($_SESSION['user_info'],true);
    $isSalon=false;
  } else{
    $details=Array("name"=>"User");
    $isLogin=false;
  }

  // print_r($details);

?>
  
  
  <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-white border-bottom shadow-sm">
        <a class="navbar-brand" href="../"><img src="../images/logo.jpg" alt="SalonX" style="max-width: 70px;" ></a>
        
        <?php if(!$isLogin){?>
        <a
            href="../register/login.php"
            class="btn btn-sm btn-outline-primary d-lg-none " 
            type="button"  ><b>Login/Register</b></a>
        <?php }?>





        <?php if($isLogin){?>
        <div class="dropdown show btn btn-light btn-sm d-lg-none" style="cursor: pointer;">
            
            <div class=" dropdown-toggle" href="../salon/" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Hello! <b><?php echo $details['name'];?></b>
            </div>







            <?php if($isSalon==true){?>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item text-dark" href="../salon/"><i class="fa fa-user"></i> Profile</a>
                <a class="dropdown-item text-primary" href="../salon/orders.php"><i class="fa fa-cart-plus"></i> New Booking</a>
                <a class="dropdown-item text-dark" href="../salon/addproduct.php"><i class="fa fa-plus"></i> Add Service</a>
                <a class="dropdown-item text-dark" href="../salon/products.php"><i class="fa fa-bookmark"></i> All Services</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-secondary" href="../salon/address.php"><i class="fa fa-map-marker"></i> Manage Address</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-muted" href="../salon/about.php"><i class="fa fa-briefcase"></i> Describe your Business</a>
                <a class="dropdown-item text-success" href="../salon/login_security.php"><i class="fa fa-shield text-success"></i> Login And Security</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger" href="../auth/logout.php"><i class="fa fa-lock"></i> Logout</a>
              </div>










            

            <?php }else if($isLogin){?>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item text-dark" href="../user/"><i class="fa fa-user"></i> Profile</a>
                <a class="dropdown-item text-dark" href="../user/orders.php"><i class="fa fa-cart-plus"></i> Booking</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-secondary" href="../user/edit_profile.php"><i class="fa fa-pencil"></i> Edit Profile</a>
                <a class="dropdown-item text-dark" href="../user/edit_password.php"><i class="fa fa-shield "></i> Edit Password</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger" href="../auth/logout.php"><i class="fa fa-lock"></i> Logout</a>
              </div>










            <?php }else{?>


              <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                
                <a class="dropdown-item text-danger" href="auth/logout.php"><i class="fa fa-lock"></i> Logout</a>
              </div> -->
            <?php }?>











        </div>
            <?php }?>
            <?php if(!$isSalon){?>
            <input 
            type="text" 
            placeholder="Search salon or Address..." 
            class="form-control  d-lg-none mt-1" 
            onclick="go()"
            style="max-width: 100%;">
            <?php } ?>

















            
      




        <?php if($isLogin && $isSalon){?>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="../salon/">Profile </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../salon/addproduct.php">Add new service</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../salon/products.php">View services</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Settings
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item text-warning" href="../salon/address.php"><i class="fa fa-map-marker"></i> Manage Address</a>
                <a class="dropdown-item" href="../salon/about.php"><i class="fa fa-briefcase"></i> Describe Business</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-success" href="../salon/login_security.php"><i class="fa fa-shield"></i> Login and Security</a>
              </div>
            </li>
          </ul>
            <a href="../salon/orders.php" class="btn btn-primary ml-2  w3-hide-small w3-hide-medium" type="button" ><b>
                <i class="fa fa-cart-plus"></i> New Booking
            </b></a>
            <a href="../auth/logout.php" class="btn btn-danger ml-2 w3-hide-small w3-hide-medium" type="button" ><b>
                Logout
            </b></a>

        </div>































        <?php }else if($isLogin){ ?>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="../user/">Profile </a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="user/orders.php">Booking</a>
            </li> -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Settings
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item text-dark" href="../user/edit_profile.php"><i class="fa fa-pencil"></i> Edit Profile</a>
                <a class="dropdown-item" href="../user/edit_password.php"><i class="fa fa-lock"></i> Change Password</a>
              </div>
            </li>
          </ul>
            <input 
                type="text" 
                class="form-control  w3-hide-small w3-hide-medium" 
                onclick="go()"
                placeholder="Search salon,address or services..."
                style="width: 50%;">
            <a href="../user/orders.php" class="btn btn-primary ml-2  w3-hide-small w3-hide-medium" type="button" ><b>
                <i class="fa fa-cart-plus"></i>
            </b></a>
            <a href="../auth/logout.php" class="btn btn-danger ml-2 w3-hide-small w3-hide-medium" type="button" ><b>
                Logout
            </b></a>
        </div>




























        <?php }else{?>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="../team/">About us </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../team/contact.php">Contact us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../team/guidelines.php">Guidelines</a>
            </li>
          </ul>   
            <input 
                type="text" 
                class="form-control  w3-hide-small w3-hide-medium" 
                onclick="go()"
                placeholder="Search salon,address or services..."
                style="width: 50%;">
            <a href="../register/login.php" class="btn btn-outline-success ml-2 w3-hide-small w3-hide-medium" type="button" ><b>
                Login/Register
            </b></a>
        </div>
        <?php }?>












    </nav>



<script>
go=()=>{
  window.open("../search/","_self");
}

</script>