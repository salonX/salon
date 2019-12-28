<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include "../common/all_header_files.php"; ?>
    <title id="title">Add Product: </title>
</head>
<body>
    <?php include "../nav/top.php" ?>
    <?php include "../common/check_online_salon.php";?>


    <!-- code -->





<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto d-block w3-border p-3 m-3">
            <h1>Add product</h1>
            <form>
                <div class="form-group">
                    <label for="inputEmail4">Product's Title</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Eg. Hair cut, message ">
                </div>
                
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" placeholder="Eg. Hair cut, message ">
                </div>
                <div class="form-group">
                    <label for="category">Price</label>
                    <select id="category" class="form-control">
                        <option selected>Category</option>
                        <option>Cutting</option>
                        <option>Massage</option>
                        <option>spa</option>
                        <option>other</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck" onchange="change(this)">
                    <label class="form-check-label" for="gridCheck">
                        In case of other category
                    </label>
                    </div>
                </div>

                <div class="form-group" id="category-other" style="display:none;">
                    <label for="category-other-1">Category</label>
                    <input type="text" class="form-control" id="category-other-1" placeholder="Massage, cutting etc ">
                </div>

                <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
        </div>
    </div>
</div>








    <!-- code ends -->

    <?php include "../nav/bottom.php" ?>
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