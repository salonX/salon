<!-- remember profile will convert into the index.php which shows the profile of salon -->

<?php include "../auth/connection.php" ; ?>


<!doctype html>
<html lang="en">
  <head>
    <script type="text/javascript" src="../js/cookie.js"></script>
    <?php include "../common/all_header_files.php" ; ?>

    <style>
      
        .text{
            text-align: center;
        }
        
        .background{
            border-right: solid #CCC4B4 1px;
            /*margin-bottom: 80px;*/
        }
        
        .mybtn{
            border-top-left-radius: 30px;
            border-top-right-radius: 30px;
            border-bottom-left-radius: 30px;
            border-bottom-right-radius: 30px;
            width: 60%;
        }

        .set_bar{
            border-top-left-radius: 40px;
            border-top-right-radius: 40px;
            border-bottom-left-radius: 40px;
            border-bottom-right-radius: 40px;
            width: 50%;
            background-color: #97A9EA;
        }

        .post_box{
            margin-bottom: 20px;
            line-height: 10px;
        }

        .post_box span {
          float: right;
          color: blue;
        }

        .heading{
          text-align: center;
        }
        
        .set_bar a{
          cursor: pointer;
        }

        #settings{
            display: none;
        }


    </style>  
      
    <title>SalonX</title>
  </head>
  <body  style="font-family: 'Assistant', sans-serif;">
      
      <!-- NAVBAR  -->  
      
		  <?php include "../nav/inner_top.php" ?>
      
       <!-- NAVBAR ENDS HERE -->

      
      
      <!--PAGE CONTENT STARTS -->
      <div class="row ">

        <!-- SIDE PANEL -->  
       <div class="col-sm-3 background">
          <img src="../images/logo.jpg" class=" mx-auto d-block" height="110" width="110" style="border-radius:50%;"><br>
           <h3 class="text">YoYo Salon</h3>
           <h5 class="text-muted text">Mohammad Anas</h5><br><br>
           <h5 class="text-muted text"><i class="fas fa-briefcase"></i> Salon</h5>
           <h5 class="text-muted text"><i class="fas fa-envelope"></i> anas.1633.m@gmail.com</h5><br>
           <p class="text-muted text"><a href="profile.php?delete_acc=success" ><b><i class="fas fa-trash-alt"></i> Delete Account</b></a></p>
           <p class="text-muted text"><a href="change_password.php" ><b><i class="fas fa-key"></i> Change Password</b></a></p>
            <br>
          <!--  <button type="button" class="btn btn-success btn-md mx-auto d-block mybtn"><i class="fab fa-github"></i> <b>Connect</b></button> --><br>
       </div>
          
          
        <!-- MAIN CONTENT -->  
      <div class="col-sm-9"><br><br>

        <!-- SETTING BAR -->

        <nav class="navbar navbar-expand-lg navbar-dark mx-auto d-block set_bar" >
      
          <ul class="navbar-nav container justify-content-center">
            <li class="nav-item active">
              <a class="nav-link"  id="all_product_link"><b><i class="fas fa-paste"></i> All Products</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  id="add_product_link"><b><i class="far fa-plus-square"></i> Add Products</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  id="setting_link"><b><i class="fas fa-cog"></i> Settings</b></a>
            </li>
          </ul>
        </nav>

         
        <!-- SETTING BAR ENDS -->

        <div id="all_product" class="container">
          <h2 style="font-family: 'Dancing Script'">All Product</h2><br>

          <div class="row">
            <div class="col-md-3">
              <div class="card">
                <div class="card-header"><b>Comb</b></div>
                <div class="card-body">
                  <img class="img-fluid" src="../images/logo.jpg">
                  <p>The best comb in the market</p>
                  <p>Rs : 1000</p>
                  <button class="btn btn-primary btn-sm btn-block">Edit</button>
                  <button class="btn btn-danger btn-sm btn-block">Delete</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <div class="card-header"><b>Comb</b></div>
                <div class="card-body">
                  <img class="img-fluid" src="../images/logo.jpg">
                  <p>The best comb in the market</p>
                  <p>Rs : 3000</p>
                  <button class="btn btn-primary btn-sm btn-block">Edit</button>
                  <button class="btn btn-danger btn-sm btn-block">Delete</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <div class="card-header"><b>Comb</b></div>
                <div class="card-body">
                  <img class="img-fluid" src="../images/logo.jpg">
                  <p>The best comb in the market</p>
                  <p>Rs : 3000</p>
                  <button class="btn btn-primary btn-sm btn-block">Edit</button>
                  <button class="btn btn-danger btn-sm btn-block">Delete</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <div class="card-header"><b>Comb</b></div>
                <div class="card-body">
                  <img class="img-fluid" src="../images/logo.jpg">
                  <p>The best comb in the market</p>
                  <p>Rs : 2500</p>
                  <button class="btn btn-primary btn-sm btn-block">Edit</button>
                  <button class="btn btn-danger btn-sm btn-block">Delete</button>
                </div>
              </div>
            </div>
          </div>
        </div>

      
        <div id="add_product" class="container" style="display: none;">
          <h2 style="font-family: 'Dancing Script'" >Add Product</h2><br>

          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-body">
                 <form>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label>Product Name</label>
                        <input type="text" class="form-control" placeholder="Product Name" name="name">
                      </div>
                      <div class="form-group col-md-6">
                        <label >Cost</label>
                        <input type="number" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label >Image</label>
                      <input type="text" class="form-control" >
                    </div>
                   <div class="form-group">
                     <textarea class="form-control" name="description" rows="3"></textarea>
                   </div>
                    <button type="submit" class="btn btn-primary btn-sm btn-block">Sign in</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div id="setting" class="container" style="display: none;">
          <h2 style="font-family: 'Dancing Script'" >Setting</h2><br>
          <div class="card">
            <div class="card-body">
              Coming soon
            </div>
          </div>
        </div>

      



         
     </div>  <!-- MAIN CONTENT ENDS -->  
      </div> <!-- MAIN ROW ENDS -->
      
      
      
     
          
    <br><br><br><br>      
      
      <!-- FOOTER GOES HERE -->
      <?php include "../nav/inner_bottom.php" ?>

      <script>
        
        let all_product_link = document.querySelector('#all_product_link') ;
        let add_product_link = document.querySelector('#add_product_link') ;
        let setting_link = document.querySelector('#setting_link') ;

        let all_product = document.querySelector('#all_product') ;
        let add_product = document.querySelector('#add_product') ;
        let setting = document.querySelector('#setting') ;
        

        all_product_link.addEventListener('click' , () => {

          all_product.style.display = "inherit" ;
          add_product.style.display = "none" ;
          setting.style.display = "none" ;

          all_product_link.style.color = "white" ;
          add_product_link.style.color = "#dadcde" ;
          setting_link.style.color = "#dadcde" ;

        });


        add_product_link.addEventListener('click' , () => {

          add_product.style.display = "inherit" ;
          all_product.style.display = "none" ;
          setting.style.display = "none" ;

          add_product_link.style.color = "white" ;
          all_product_link.style.color = "#dadcde" ;
          setting_link.style.color = "#dadcde" ;
          
        });



        setting_link.addEventListener('click' , () => {

          setting.style.display = "inherit" ;
          add_product.style.display = "none" ;
          all_product.style.display = "none" ;

          setting_link.style.color = "white" ;
          add_product_link.style.color = "#dadcde" ;
          all_product_link.style.color = "#dadcde" ;
          
        });



      </script>
      
  </body>
</html>