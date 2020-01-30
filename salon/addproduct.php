<!DOCTYPE html>
<html lang="en">
<?php session_start();?>

<!-- THIS SCRIPT HELP IN CHANGE of LOCATION BASED ON LOGIN AND ROLE OF USER -->
<?php if(!isset($_SESSION['user'])){ header("Location: ../register/login.php");return;}?>
<?php if($_SESSION['role']==0){ header("Location: ../user");return;}?>
<!-- SCRIPT ENDS HERE -->

<head>
  <?php include "../common/all_header_files.php";?>
  <title>salon Orders</title>
  <link rel="stylesheet" href="style.css">
  
</head>
<body>
    <?php include "../nav/inner_top.php";?>




<div class="container">
    <!-- row start: acount>booking -->
    <div class="row pl-2 mt-1">
      
        <p>
            <a href="../salon/" style="text-decoration:underline;" class="link-a">Your Acount</a>
            <small class="text-secondary"> > </small>
            <a href="" style="color:chocolate;">add new product</a>
        </p>
    </div>
    <!-- ends of row -->
    <!-- alert -->
    <?php if(isset($_REQUEST['status'])){
        ?>
            <div class="row p-1">
              <div class="col-md-8 mx-auto d-block p-0">
                <?php if($_REQUEST['status']=="success"){?>
                    <div class="alert alert-success ">
                        <strong>Success!</strong> product has been successfully added
                    </div>
                <?php }else{ ?>
                    <div class="alert alert-danger">
                        <strong>Error!</strong> while submitting query. please try later
                    </div>
                <?php } ?>
              </div>
            </div>
        <?php
    }
    ?>
    
    <!-- alert end -->
    <!-- start row for form  -->
    <div class="row p-1 ">
        <div class="col-md-8 mx-auto d-block w3-border pb-2">
            <h1>Add product</h1>
            <form action="../auth/salon/addproduct.php" method="POST">
                <div class="form-group">
                    <label for="inputEmail4">Product's Title</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Eg. Hair cut, message " name="title">
                </div>
                
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" placeholder="Eg. Hair cut, message " name="price">
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select id="category" class="form-control" name="category">
                        <option selected>Category</option>
                        <option>cutting</option>
                        <option>massage</option>
                        <option>spa</option>
                        <option>other</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck" onchange="change(this)" name="optional_category">
                    <label class="form-check-label" for="gridCheck">
                        In case of other category
                    </label>
                    </div>
                </div>

                <div class="form-group" id="category-other" style="display:none;">
                    <label for="category-other-1">Category</label>
                    <input type="text" class="form-control" id="category-other-1" placeholder="Massage, cutting etc " name="category_got">
                </div>

                <button type="submit" class="btn btn-primary" name="submit">Add service</button>
                <a href="products.php" class=" w3-right btn btn-warning " >Back to all Services</a>
            </form>
        </div>
    </div>
</div>








    <!-- code ends -->

    <?php //include "../nav/bottom.php" ?>
</body>
<script>
    document.querySelector('#title').innerHTML +=JSON.parse(localStorage.getItem("salon_detail")).name;


    function change(el){
        if(el.checked){
            document.querySelector('#category-other').style.display="block";
        }else{
            document.querySelector('#category-other').style.display="none";
        }
    }
</script>
</html>