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

        <?php 

          if(!isset($_GET['salon_id'])){
            header("Location: ../index.php") ;
          }

          $salon_id = $_GET['salon_id'] ;
          $totalProd = "SELECT * FROM products WHERE salon_id = $salon_id" ;
          $totalProdRes = mysqli_query($conn , $totalProd) ;
          $total = mysqli_num_rows($totalProdRes) ;

          $totalRows = ceil($total / 4) ;

          $prods = [] ;
          $i = 0 ;

          while($row = mysqli_fetch_assoc($totalProdRes)){
            array_push($prods, $row) ;
            $i++ ;
          }

          $curRow = 0 ;
          $curCol = 0 ;

         ?>

        <?php while($curRow < $totalRows){ ?>
          <div class="row">
            <?php while($curCol < 4 && ($curCol + 4*$curRow) < $total){ ?>
            <div class="col-md-3">
              <div class="card">
                <div class="card-header"><b><?php echo $prods[$curCol + ($curRow)*4]['title']?></b></div>
                <div class="card-body">
                  <img class="img-fluid" src="../images/logo.jpg">
                  <p><?php echo $prods[$curCol + ($curRow)*4]['category']?></p>
                  <p><?php echo $prods[$curCol + ($curRow)*4]['price']?></p>
                  <?php $id = $prods[$curCol + ($curRow)*4]['products_id'] ; ?>
                  <a href="../bookings/index.php?product_id=<?php echo $id ?>">
                    <button class="btn btn-primary btn-sm btn-block">Book</button>
                  </a>
                </div>
              </div>
            </div>
          <?php
              $curCol++ ;        
             } 
            $curRow++ ;
            $curCol = 0 ;
          ?>
          </div>
        <?php } ?>
      
     </div>  <!-- MAIN CONTENT ENDS -->  
      </div> <!-- MAIN ROW ENDS -->
      
          
    <br><br><br><br>      
      
      <!-- FOOTER GOES HERE -->
      <?php include "../nav/inner_bottom.php" ?>
      
  </body>
</html>