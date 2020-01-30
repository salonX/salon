<?php


$sql="SELECT * FROM salon where salon_id='$salon_id'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==1){
    $details=mysqli_fetch_assoc($result);
}else{
    $details=null;
}

?>
<div class="container pt-2">
    <div class=" card w-100 shadow m-0 p-1">
        <div class="row">




            <div class="col-sm-6 pl-4 pb-2">
                <h1 
                    style="font-weight:bolder;
                        font-family: 'Dancing Script' ; 
                        font-size: 40px;">
                  <?php echo $details['name'];?>
                </h1>
                <a 
                    href="mailto:<?php echo $details['email']; ?>" 
                    class="text-warning btn btn-light card-text mb-0">
                        <i class="fa fa-envelope"></i>
                        <?php echo $details['email']; ?>
                </a>
                <a 
                    href="tel:<?php echo $details['phone_number']; ?>" 
                    class="text-success btn btn-light  card-text">
                        <i class="fa fa-phone"></i> 
                        <?php echo $details['phone_number']; ?>
                </a>

                <p class="mt-2 pl-1" style="font-size: 18px;">
                    <i class="fa fa-map-marker"></i>
                    <?php echo $details['address']; ?>,
                    <?php echo $details['area']; ?>,
                    <?php echo $details['city']; ?>
                </p>
                <p class="btn rounded btn-lg text-white  shadow-lg " 
                    style="background: linear-gradient(to right,#f3062d, #ec6409);">
                    
                    <i class="fa fa-camera"></i>
                    view all photos
                </p>
            </div>






            <div class="col-sm-6">
                <img 
                    class="card-img-top img-fluid img-thumbnail rounded"  
                    src="../images/home_page/carousel/5.png" 
                    alt="Card image cap">
                    
            </div>
            <!-- col-6 end -->




        </div>
        <!-- row end -->
    </div> 
    <!-- card end -->
</div>
<!-- container end -->