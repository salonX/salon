
<style type="text/css">
  
  .line{
    height: 0.5px ;
    width: 100% ;
    background-color: pink;
  }

</style>


<nav class="navbar navbar-expand-lg navbar-light container">
  <div class="contaner">
     <a class="navbar-brand" href="#"><img src="../images/logo.jpg" height="70" width="150"></a>
  </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="container">
      <ul class="nav justify-content-center">
        <!-- <li class="nav-link"> -->
         <form style="width: 60%">
          <div class="input-group">
            <input type="text" class="form-control p-3" onclick="go()" placeholder="Search" style="border-radius: 0">
            <div class="input-group-append">
              <div class="input-group-text" style="border-radius: 0"><i class="fas fa-search"></i></div>
            </div>
          </div>
         </form>
        <!-- </li> -->
      </ul>
    </div>
  </div>

  <?php if(isset($_SESSION['user'])){ ?>
    <a href="../auth/logout.php">
      <button class="btn btn-primary my-2 my-sm-0" type="button" style="border-radius: 0;">Logout</button>
    </a>
  <?php } else { ?>
    <a href="../register/login.php">
      <button class="btn btn-primary my-2 my-sm-0" type="button" style="border-radius: 0;">Login/signup</button>
    </a>
  <?php }?>

</nav>
<div class="line"></div>
<script>
go=()=>{
  window.open("/salonx/search/","_self");
}
</script>