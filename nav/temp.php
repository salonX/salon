<?php ob_start(); ?>
<style type="text/css">
  
  .line{
    height: 0.5px ;
    width: 100% ;
    background-color: pink;
  }

</style>

<div class="container-fluid" style="background-color:pink;">
<nav class="navbar navbar-expand-lg navbar-light container" >
  <div class="contaner">
     <a class="navbar-brand" href="../">
     <h3 class="text-white " style="font-weight: bolder;font-family: 'Dancing Script'"><b>SalonX</b></h3>
     </a>
  </div>
  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="container">
      <ul class="nav justify-content-center">
         <!-- <form style="width: 75%">
          <div class="input-group" style="border-radius: 25px;">
            <input type="text" class="form-control p-2" onclick="go()" placeholder="Search" style="border-radius: 0">
            <div class="input-group-append">
              <div class="input-group-text" style="border-radius: 0"><i class="fa fa-search icon"></i></div>
            </div>
          </div>
         </form> -->
      </ul>
    </div>
  </div>

  <?php if(isset($_SESSION['user'])){

    // ****---------------*******------------****
    // PHP DETAILS
  if($_SESSION['role']==1){
      $details=json_decode($_SESSION['salon_info'],true);
      ?>
      <a
        href="../salon/addproduct.php"
        class="btn btn-muted btn-lg shadow-lg" 
        style="position:fixed;bottom:3px;left:80%;z-index:100;border-radius:50%;">
          <i class="fa fa-plus-circle fa-2x text-danger"></i>
      </a>

      <?php
   }else{
    $details=json_decode($_SESSION['user_info'],true);
   }
    // ****---------------*******------------****
 
    ?>

    <!-- BUTTON GROUP OF CART BOOKING ADD PRODUCT -->
    <!-- <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
      <button type="button" class="btn btn-light">Left</button>
      <button type="button" class="btn btn-light">Middle</button>
      <button type="button" class="btn btn-light">Right</button>
    </div> -->
    <!-- HTML DROPDOWN WHEN LOGIN -->
    <div class="dropdown  pl-1 ">
      <button 
        class="btn btn-sm  dropdown-toggle " 
        type="button" id="dropdownMenuButton" 
        data-toggle="dropdown" 
        aria-haspopup="true"
        style="background-color: white;" 
        aria-expanded="false">
          <b><?php echo $details['name'];?>!</b>
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
      </div>
    </div>

    <a href="../auth/logout.php" class="pl-1">
      <button class="btn btn-danger btn-sm  my-2 my-sm-0" type="button" style="border-radius: 0;">Logout</button>
    </a>
<!--ENDS==> HTML DROPDOWN WHEN LOGIN -->
  <?php } else { ?>

  <!-- HTML DROPDOWN RESGITER -->
    <a href="../register/login.php">
      <button class="btn btn-primary my-2 my-sm-0" type="button" style="border-radius: 0;">Login/signup</button>
    </a>
  <!--ENDS==> HTML DROPDOWN RESGITER -->
  <?php }?>

</nav>
</div>
<div class="line"></div>
<script>
go=()=>{
  window.open("/salonx/search/","_self");
}
</script>