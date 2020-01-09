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
          
        <!-- MAIN CONTENT -->  
      <div class="col-sm-12"><br><br>


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
                  <button class="btn btn-primary btn-sm btn-block">Book</button>
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
                  <button class="btn btn-primary btn-sm btn-block">Book</button>
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
                  <button class="btn btn-primary btn-sm btn-block">Book</button>
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
                  <button class="btn btn-primary btn-sm btn-block">Book</button>
                </div>
              </div>
            </div>
          </div>
        </div>

      
     </div>  <!-- MAIN CONTENT ENDS -->  
      </div> <!-- MAIN ROW ENDS -->
      
          
    <br><br><br><br>      
      
      <!-- FOOTER GOES HERE -->
      <?php include "../nav/inner_bottom.php" ?>
      
  </body>
</html>