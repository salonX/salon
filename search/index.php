<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search: At BookMyBarber</title>
    <link rel="stylesheet" href="../import/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../import/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <link href="https://fonts.googleapis.com/css?family=Ibarra+Real+Nova&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php include "../common/all_header_files.php"; ?>


    <style> 
        .input-icons i { 
            position: absolute; 
            top: 20px;
            left: 88%;
        } 
        .list-group-item:hover{
            color:darkolivegreen;
        }
          
        
          
        .icon { 
            padding-top: 15px; 
            min-width: 40px; 
            cursor: pointer;
        } 
          
        .input-field { 
            /* width: 100%;  */
            padding-top: 10px; 
            /* text-align: center;  */
        } 


.spinner {
  margin-top:30px;
  margin-bottom:30px;
  text-align: center;
}

.spinner > div {
  width: 18px;
  height: 18px;
  background-color: red;

  border-radius: 100%;
  display: inline-block;
  -webkit-animation: sk-bouncedelay 1.4s infinite ease-in-out both;
  animation: sk-bouncedelay 1.4s infinite ease-in-out both;
}

.spinner .bounce1 {
  -webkit-animation-delay: -0.32s;
  animation-delay: -0.32s;
}

.spinner .bounce2 {
  -webkit-animation-delay: -0.16s;
  animation-delay: -0.16s;
}

@-webkit-keyframes sk-bouncedelay {
  0%, 80%, 100% { -webkit-transform: scale(0) }
  40% { -webkit-transform: scale(1.0) }
}

@keyframes sk-bouncedelay {
  0%, 80%, 100% { 
    -webkit-transform: scale(0);
    transform: scale(0);
  } 40% { 
    -webkit-transform: scale(1.0);
    transform: scale(1.0);
  }
}
    </style> 
</head>
<body  style="font-family: 'Ibarra Real Nova', serif;">

<!-- navigation for search bar start here -->
<div class="container-fluid " onclick="hideAndShow()"  style="background-image: linear-gradient(to right,red, rgb(226, 65, 92));" >
        <div class="row ">
            <div class="col-6 mx-auto d-block">
                <h1 class="text-white text-center" style="font-weight: bolder;font-family: 'Dancing Script'"><b>SalonX</b></h1>
                
            
            </div>
            <div class="col-12 mx-auto d-block pb-3">
                <input 
                type="text" 
                id="input" 
                onkeyup="pridiction(this.value)"
                style="font-size: 20px;font-weight: bolder;font-family: 'Dancing Script'" 
                placeholder="Type to search..."
                class="w-100 form-control p-2 input-field shadow-lg">
            </div>
        </div>
    </div>
    <!-- END>>navigation for search bar start here -->


<div class="container ">
    
    <!-- START>search query box -->
    <!-- <div class="row pl-1 pr-1 pt-1 input-icons"   style="display:none;">
        <input 
            type="text" 
            id="input" 
            onload="focus()"
            style="font-size: 20px;" 
            placeholder="Type to search..."
            
            class="w-100 form-control p-2 input-field">
        <i class="fa fa-search icon bg-danger"></i>
    </div> -->
    <!-- END>search query box -->
    

<!-- default item inside the container START -->
    <div id="default-card" >

        <!-- START>treanding search owl carosal -->
        <div class="row pl-1">
            <h6><b><span style="border-bottom: 2px solid black;">Tre</span>nding Search</b></h6>
        </div>
        
        <div class="row pl-3 mb-4 mt-2">
            <div class="owl-carousel owl-carousel-search owl-theme owl-loaded">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <div class="owl-item">
                            <button class="btn btn-outline-dark w3-round-xxlarge pl-4 pr-4">Hair cut</button>
                        </div>

                        <div class="owl-item">
                            <button class="btn btn-outline-dark w3-round-xxlarge pl-4 pr-4">Message & spa</button>
                        </div>


                        <div class="owl-item">
                            <button class="btn btn-outline-dark w3-round-xxlarge pl-4 pr-4">Hair Strjdhf</button>
                        </div>


                        <div class="owl-item">
                            <button class="btn btn-outline-dark w3-round-xxlarge pl-4 pr-4">Hair cut</button>
                        </div>

                        <div class="owl-item">
                            <button class="btn btn-outline-dark w3-round-xxlarge pl-4 pr-4">Message & spa</button>
                        </div>


                        <div class="owl-item">
                            <button class="btn btn-outline-dark w3-round-xxlarge pl-4 pr-4">Hair Strjdhf</button>
                        </div>


                        <div class="owl-item">
                            <button class="btn btn-outline-dark w3-round-xxlarge pl-4 pr-4">Hair cut</button>
                        </div>

                        <div class="owl-item">
                            <button class="btn btn-outline-dark w3-round-xxlarge pl-4 pr-4">Message & spa</button>
                        </div>


                        <div class="owl-item">
                            <button class="btn btn-outline-dark w3-round-xxlarge pl-4 pr-4">Hair Strjdhf</button>
                        </div>

                        
                        
                        
                    </div>
                </div>
            
            </div>
        </div>
        <!-- END>treanding search owl carosel -->

        <!-- START>trendings products carosel -->
        <div class="row pl-1">
            <h6><b><span style="border-bottom: 2px solid black;">Tre</span>nding Products</b></h6>
        </div>

        <div class="row ">
            <div class="owl-carousel owl-carousel-products owl-theme owl-loaded w3-hide-large">
                <div class="owl-stage-outer ">
                    <div class="owl-stage ">
                        <div class="owl-item p-2">
                            <div class="card shadow-sm" style="width: 100%">
                                <img class="card-img-top" src="../images/search/products/1.webp" alt="Card image cap">
                                <div class="card-body  p-0">
                                <p class="pl-2 mt-1" style="line-height: 0.8;"><small><b>Spa</b><br><br> get 50% off for the first time by salonX</small></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="owl-item p-2">
                            <div class="card shadow-sm" style="width: 100%">
                                <img class="card-img-top" src="../images/search/products/spa.jpg" alt="Card image cap">
                                <div class="card-body  p-0">
                                <p class="pl-2 mt-1" style="line-height: 0.8;"><small><b>Spa</b><br><br> get 50% off for the first time by salonX</small></p>
                                </div>
                            </div>
                        </div>

                        <div class="owl-item p-2">
                            <div class="card shadow-sm" style="width: 100%">
                                <img class="card-img-top" src="../images/search/products/1.webp" alt="Card image cap">
                                <div class="card-body  p-0">
                                <p class="pl-2 mt-1" style="line-height: 0.8;"><small><b>Spa</b><br><br> get 50% off for the first time by salonX</small></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="owl-item p-2">
                            <div class="card shadow-sm" style="width: 100%">
                                <img class="card-img-top" src="../images/search/products/spa.jpg" alt="Card image cap">
                                <div class="card-body  p-0">
                                <p class="pl-2 mt-1" style="line-height: 0.8;"><small><b>Spa</b><br><br> get 50% off for the first time by salonX</small></p>
                                </div>
                            </div>
                        </div>


                        <div class="owl-item p-2">
                            <div class="card shadow-sm" style="width: 100%">
                                <img class="card-img-top" src="../images/search/products/1.webp" alt="Card image cap">
                                <div class="card-body  p-0">
                                <p class="pl-2 mt-1" style="line-height: 0.8;"><small><b>Spa</b><br><br> get 50% off for the first time by salonX</small></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            
            </div>

            <div class="owl-carousel owl-carousel-products-large owl-theme owl-loaded w3-hide-small w3-hide-medium">
                <div class="owl-stage-outer ">
                    <div class="owl-stage ">
                        <div class="owl-item p-2">
                            <div class="card shadow-sm" style="width:100%">
                                <img class="p-2" src="../images/search/products/spa.jpg" class="card-img-top" alt="...">
                                <div class="card-body p-0 pl-2" >
                                <h5 class="card-title p-0 "><b>Message & Spa</b></h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>

                        <div class="owl-item p-2">
                            <div class="card shadow-sm" style="width:100%">
                                <img class="p-2" src="../images/search/products/1.webp" class="card-img-top" alt="...">
                                <div class="card-body p-0 pl-2" >
                                <h5 class="card-title p-0 "><b>Message & Spa</b></h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>


                        <div class="owl-item p-2">
                            <div class="card shadow-sm" style="width:100%">
                                <img class="p-2" src="../images/search/products/spa.jpg" class="card-img-top" alt="...">
                                <div class="card-body p-0 pl-2" >
                                <h5 class="card-title p-0 "><b>Message & Spa</b></h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>

                        <div class="owl-item p-2">
                            <div class="card shadow-sm" style="width:100%">
                                <img class="p-2" src="../images/search/products/spa.jpg" class="card-img-top" alt="...">
                                <div class="card-body p-0 pl-2" >
                                <h5 class="card-title p-0 "><b>Message & Spa</b></h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>


                        


                        <div class="owl-item p-2">
                            <div class="card shadow-sm" style="width:100%">
                                <img class="p-2" src="../images/search/products/1.webp" class="card-img-top" alt="...">
                                <div class="card-body p-0 pl-2" >
                                <h5 class="card-title p-0 "><b></b>Message & Spa</b></h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>



                        

                        
                    </div>
                </div>
            </div>

        </div>
        <!-- END>trendings products carosel -->

    </div>
<!-- default item inside the container ends -->
</div>



<div class="container-fluid  mt-0 " id="blank-card"  style="display: none;">
    <div class="row pl-1 pr-1 pb-1 pt-0">
        <div class="card w-100 pt-0">
            
            <div class="card-body pt-0 pb-0" >
                <ul class="list-group list-group-flush" id="search-result" style='font-size:16px'>
                    <li class="list-group-item ml-0 pl-0 pr-0">sponsered ssalon will be here</li>
                    <li class="list-group-item ml-0 pl-0 pr-0">New lokk salom</li>
                    <li class="list-group-item ml-0 pl-0 pr-0">khora colony</li>
                </ul>
            </div>

            
        </div>
    </div>
</div>
    










<?php //include "../nav/bottom.php"; ?>


    
</body>
</html>


<script src="../import/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
<script>

    function caros() {
        $('#input').focus();
        if (window.innerWidth >= 700) {
            var it=10
            var it_p=4
        } else {
            var it=3
            var it_p=2
        }

        $(".owl-carousel-search").owlCarousel({
            items: it,
            itemsDesktop: [700, 2],//1400:screen size, 3: number if items in the slide
            itemsDesktopSmall: [400, 1],
            itemsTablet: [700, 1],
            itemsMobile: [500, 1],
            margin:10,
            // loop:true,
            autoWidth:true,
            // items:4
        });
        $(".owl-carousel-products").owlCarousel({
            items: it_p,
            itemsDesktop: [700, 2],//1400:screen size, 3: number if items in the slide
            itemsDesktopSmall: [400, 1],
            itemsTablet: [700, 1],
            itemsMobile: [500, 1]
        });
        $(".owl-carousel-products-large").owlCarousel({
                items: 4,
                itemsDesktop: [700, 2],//1400:screen size, 3: number if items in the slide
                itemsDesktopSmall: [400, 1],
                itemsTablet: [700, 1],
                itemsMobile: [500, 1]
        });
    }
    // owl-carousel


    $(document).ready(caros());


</script>
<script src="index.js"></script>