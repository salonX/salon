<!DOCTYPE html>
<html lang="en">
<?php session_start();?>

<!-- THIS SCRIPT HELP IN CHANGE of LOCATION BASED ON LOGIN AND ROLE OF USER -->
<?php if(!isset($_SESSION['user'])){ header("Location: ../register/login.php");return;}?>
<?php if($_SESSION['role']==0){ header("Location: ../user");return;}?>
<!-- SCRIPT ENDS HERE -->



<head>
  <?php include "../auth/connection.php" ; ?>
  <?php include "../common/all_header_files.php";?>
  <?php include "../auth/decryption.php";?>
  <?php $dec=new Decryption(); ?>
  <title>Add Images</title>

  <style>
    <style>
      .fileContainer {
          overflow: hidden;
          /*position: relative;*/
      }
      .fileContainer [type=file] {
          cursor: inherit;
          font-size: 10px;
          filter: alpha(opacity=0);
         /* min-height: 100%;
          min-width: 100%;*/
          opacity: 0;
          /*position: absolute;*/
          /*right: 0;
          top: 0;*/
      }
      /* Example stylistic flourishes */
      .fileContainer {
         
          border-radius: 50%;
          padding: .5em;
      }
      .fileContainer [type=file] {
          cursor: pointer;
      }
  </style>
</head>
<body>
  <?php include "../nav/inner_top.php"; ?>

  <?php 
    function compressImage($source, $destination, $quality) {
      $info = getimagesize($source);
    //   print_r($info);
      return;
        if ($info['mime'] == 'image/jpeg') 
            $image = imagecreatefromjpeg($source);
        elseif ($info['mime'] == 'image/gif') 
            $image = imagecreatefromgif($source);
        elseif ($info['mime'] == 'image/png') 
            $image = imagecreatefrompng($source);
        imagejpeg($image, $destination, $quality);
        
    }
      if(isset($_POST['submit'])){
         $image = $_FILES['image']['name'];
         $tmp_image = $_FILES['image']['tmp_name'];
         $salon_id = $dec->level_2($_SESSION['user']) ;
         $valid_ext = array('png','jpeg','jpg');
         $location = "../images/salon/small/".$image;
         $location2 = "../images/salon/normal/".$image;
          $file_extension = pathinfo($location, PATHINFO_EXTENSION);
          $file_extension = strtolower($file_extension);
          if(in_array($file_extension,$valid_ext)){
              compressImage($_FILES['image']['tmp_name'],$location,60);
              compressImage($_FILES['image']['tmp_name'],$location2,100);
          }
          else{
            echo "Invalid file type.";
          }
         // move_uploaded_file($tmp_image , "../images/salon/normal/$image");
  
         $query = "INSERT INTO image (product_id , image) VALUES ($salon_id , '$image')" ;
         $result = mysqli_query($conn , $query) OR die('IMAGE ERROR '.mysqli_error($conn)) ;
         
         echo "<div class='alert alert-success text-center'><b>Upload Successfull</b></div>" ;
      }
  ?>

  <div class="container">
    <div class="row pt-3">
      <div class="col-sm-3"></div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <form method="post" action="" enctype="multipart/form-data">
              <h3 class="text-center"><b>Add Image</b></h3>
              <br>
              <label class="fileContainer text-center">
                  <img class="mx-auto d-block" height="100" width="100" src="../images/image_upload.png">
                  <input type="file" class="form-control" name="image">
              </label>
              <button class="btn btn-primary btn-block" name="submit">Submit</button>
            </form>  
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>