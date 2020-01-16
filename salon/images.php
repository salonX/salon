<!DOCTYPE html>
<html lang="en">
<head>
  <?php include "../auth/connection.php" ; ?>
  <?php include "../common/all_header_files.php";?>
  <title>Add Images</title>
</head>
<body>
  <?php include "../nav/inner_top.php"; ?>
  
  <style type="text/css">
    
    .card img{
      filter: grayscale(100%);
      transition: 0.7s ;
      cursor: pointer;
    }

    .card img:hover{
        filter: none;
      }


  </style>


  <h2 class="text-center">Gallery</h2>

  <br><br>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <?php 
            $salon_id = $_SESSION['user'] ;
            $number = "SELECT * FROM image WHERE product_id = $salon_id" ;
            $result = mysqli_query($conn , $number) ;
            $totalImages = mysqli_num_rows($result) ;
            $totalRows = ceil($totalImages / 6) ;
            $i = 0 ;
            $j = 0 ;
            $images = [] ;
            while($row = mysqli_fetch_assoc($result)){
              array_push($images , $row) ;
            }
          ?>

          <?php while($i < $totalRows) { ?>
            <div class="row">
               <?php while($j < 6 && ($j + 6*$i) < $totalImages){ ?>
               <div class="col-sm-2">
                <div class="card">
                  <div class="card-body p-1">
                    <img src="../images/salon/normal/<?php echo $images[$j + 6*$i]['image']; ?>" class="img-fluid">
                  </div>
                </div>
               </div> 
               <?php $j++ ; 
                    }
                 $i++ ;
                 $j = 0 ;   
               ?>
            </div>
          <?php } ?>      
      </div>
    </div>
  </div>

</body>
</html>
