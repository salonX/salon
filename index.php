<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "common/all_header_files.php"; ?>
    <link rel="stylesheet" href="./import/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="./import/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <title>Home: Book your BOOKMYBARBER</title>
    <style>
        .centered-element {
            max-height: 450px;
        }

        .shadow-box {
            /* width: 250px; */
            /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); */
            text-align: center;
        }

        .shadow-box:hover {
            text-align: center;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

        }

        .icon-image {
            height: 100px;
        }

        .center-text {
            text-align: center;
        }
        /* Container holding the image and the text */
.container-img {
  position: relative;
  text-align: center;
  color: white;
}





/* Bottom right text */
.bottom-right {
  /* background-color: black; */
  /* opacity: 0.4; */
  position: absolute;
  bottom: 2px;
  right: 22px;
}


    </style>
</head>

<body style="font-family: 'Assistant', sans-serif;">

    <!-- code for NAVBAR -->
    <?php include "nav/top.php"?>

    <!-- carosal HERO 1 -->
    <!-- <div id="carousel" class="carousel slide" data-ride="carousel">
        
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class=" w-100 centered-element fluid" src="images/home_page/carousel/first.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 centered-element fluid" src="images/home_page/carousel/10.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 centered-element fluid" src="images/home_page/carousel/7.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> -->

    <div class="container">
        <diw class="row">
            <div class="col-4 mx-auto d-clock text-center">
                <div class=" shadow border border-primary rounded-circle p-2">
                    <img class="rounded-circle " src="images/home_page/women.jpg" alt="Snow" style="width:90%;">
                    <!-- <div class="bottom-right p-0 m-0 text-dark"><b>women</b></div>  -->
                  </div>
            </div>
            <div class="col-4 mx-auto d-clock text-center">
                <div class=" shadow border border-primary rounded-circle p-2">
                    <img class="rounded-circle " src="images/home_page/women.jpg" alt="Snow" style="width:90%;">
                    <!-- <div class="bottom-right p-0 m-0 text-dark"><b>women</b></div>  -->
                  </div>
            </div>
            <div class="col-4 mx-auto d-clock text-center">
                <div class=" shadow border border-primary rounded-circle p-2">
                    <img class="rounded-circle " src="images/home_page/women.jpg" alt="Snow" style="width:90%;">
                    <!-- <div class="bottom-right p-0 m-0 text-dark"><b>women</b></div>  -->
                  </div>
            </div>
        </diw>
    </div>








    <!-- icon for more sale advertise-->
    <!-- <br><br><br><br> -->


    <div 
        class="container-fluid m-0 p-0" 
        style="background-image: url('images/home_page/background.jpg');
                width: 100%;min-height: 400px;
                background-size: cover;
                background-position: center;" >
        <div class="row text-center m-0 p-0" style="background-color: black;opacity: 0.7; min-height: 400px;width: 100%;">
            <div class="col-md-12 ">
                <br>
                <h1 class="text-white text-center pt-5" style="font-size: 50px;"><b>Take The Hassle Out Of Running <br>Your Barbershop</b></h1>
                <br>
                <button class="btn btn-lg btn-primary" style="opacity:1;"><span style="font-size: 20px;opacity: 1; ">Get Started</span></button>
                <br><br><br>
            </div>
            
        </div>    

    </div>
<!-- 
    <div class="container mt-5 ">
        <h1 class="mt-5" style="font-family: 'Dancing Script', cursive;"><b>Trending categories</b></h1>
        <br>
        <div class="row p-3">
            <div class="col-2  rounded ">
                <div class="shadow-sm shadow-box">
                    <img class="rounded icon-image" src="images/home_page/icon/new-electronics.svg" alt="">
                    <p class="p-1"><b>50% off on new Product</b></p>
                </div>

            </div>

            <div class="col-2  rounded ">
                <div class="shadow-sm shadow-box">
                    <img class="rounded icon-image" src="images/home_page/icon/new-arrivals.svg" alt="">
                    <p class="p-1"><b>50% off on new Product</b></p>
                </div>

            </div>


            <div class="col-2  rounded ">
                <div class="shadow-sm shadow-box">
                    <img class="rounded icon-image" src="images/home_page/icon/new-appliances.svg" alt="">
                    <p class="p-1"><b>50% off on new Product</b></p>
                </div>

            </div>



            <div class="col-2  rounded ">
                <div class="shadow-sm shadow-box">
                    <img class="rounded icon-image" src="images/home_page/icon/new-furniture.svg" alt="">
                    <p class="p-1"><b>50% off on new Product</b></p>
                </div>

            </div>



            <div class="col-2  rounded ">
                <div class="shadow-sm shadow-box">
                    <img class="rounded icon-image" src="images/home_page/icon/new-packages.svg" alt="">
                    <p class="p-1"><b>50% off on new Product</b></p>
                </div>

            </div>



            <div class="col-2  rounded ">
                <div class="shadow-sm shadow-box">
                    <img class="rounded icon-image" src="images/home_page/icon/offer.svg" alt="">
                    <p class="p-1"><b>50% off on new Product</b></p>
                </div>

            </div>


        </div>
    </div> -->




    <!-- <br><br><br><br> -->







    <!-- testtimonial  -->
    <div class="jumbotron mt-0" style="background-color: #F5F7FA;">

        <div class="container ">
            <h1 class="" style="font-family: Dancing Script;"><b>You'll love to know our user experiance</b></h1>
            <div class="row">
                <div class="owl-carousel owl-theme owl-loaded">
                    <div class="owl-stage-outer">
                        <div class="owl-stage">
                            <div class="owl-item col-md-6 col-lg-4 ">
                                <div class="card shadow ">
                                    <img src="./images/home_page/carousel/10.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up
                                            the bulk of the card's
                                            content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere 1</a>
                                    </div>
                                </div>
                            </div>

                            <div class="owl-item col-md-6 col-lg-4 ">
                                <div class="card shadow">
                                    <img src="./images/home_page/carousel/10.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up
                                            the bulk of the card's
                                            content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere 2</a>
                                    </div>
                                </div>
                            </div>


                            <div class="owl-item col-md-6 col-lg-4 ">
                                <div class="card shadow">
                                    <img src="./images/home_page/carousel/10.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up
                                            the bulk of the card's
                                            content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere 3</a>
                                    </div>
                                </div>
                            </div>

                            <div class="owl-item col-md-6 col-lg-4 ">
                                <div class="card shadow">
                                    <img src="./images/home_page/carousel/10.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up
                                            the bulk of the card's
                                            content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere 4</a>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>










    <!-- testimonial ends -->
















    <div class="container">
        <h1 class="mt-5" style="font-family: 'Dancing Script', cursive;"><b>Let's Know <br>more about salonX</b></h1>
        <br>

        <div class="row">
            <div class="col-md-6 col-sm-12 col-lg-4 mb-5">
                <img class="rounded icon-image text-center " src="images/home_page/icon/new-appliances.svg" alt="">
                <h5><b>Finest-quality products</b></h5>
                <p>Quality matters to you, and us! That's why we do a strict quality-check for every
                    product.</p>
            </div>

            <div class="col-md-6 col-sm-12 col-lg-4 mb-5">
                <img class="rounded icon-image text-center " src="images/home_page/icon/new-appliances.svg" alt="">
                <h5><b>Finest-quality products</b></h5>
                <p>Quality matters to you, and us! That's why we do a strict quality-check for every
                    product.</p>
            </div>

            <div class="col-md-6 col-sm-12 col-lg-4 mb-5">
                <img class="rounded icon-image text-center " src="images/home_page/icon/new-appliances.svg" alt="">
                <h5><b>Finest-quality products</b></h5>
                <p>Quality matters to you, and us! That's why we do a strict quality-check for every
                    product.</p>
            </div>


            <div class="col-md-6 col-sm-12 col-lg-4 mb-5">
                <img class="rounded icon-image text-center " src="images/home_page/icon/new-appliances.svg" alt="">
                <h5><b>Finest-quality products</b></h5>
                <p>Quality matters to you, and us! That's why we do a strict quality-check for every
                    product.</p>
            </div>


            <div class="col-md-6 col-sm-12 col-lg-4 mb-5">
                <img class="rounded icon-image text-center " src="images/home_page/icon/new-appliances.svg" alt="">
                <h5><b>Finest-quality products</b></h5>
                <p>Quality matters to you, and us! That's why we do a strict quality-check for every
                    product.</p>
            </div>


            <div class="col-md-6 col-sm-12 col-lg-4 mb-5">
                <img class="rounded icon-image text-center " src="images/home_page/icon/new-appliances.svg" alt="">
                <h5><b>Finest-quality products</b></h5>
                <p>Quality matters to you, and us! That's why we do a strict quality-check for every
                    product.</p>
            </div>


        </div>

    </div>


    <?php include "./nav/bottom.php" ?>

</body>


<!-- <script src="jquery.min.js"></script> -->
<script src="./import/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
        // $(".owl-carousel").owlCarousel();
        if (window.innerWidth >= 700) {
            $(".owl-carousel").owlCarousel({
                items: 3,
                itemsDesktop: [700, 2],//1400:screen size, 3: number if items in the slide
                itemsDesktopSmall: [400, 1],
                itemsTablet: [700, 1],
                itemsMobile: [500, 1]
            });
        } else {
            $(".owl-carousel").owlCarousel({
                items: 2,
                itemsDesktop: [700, 2],//1400:screen size, 3: number if items in the slide
                itemsDesktopSmall: [400, 1],
                itemsTablet: [700, 1],
                itemsMobile: [500, 1]
            });
        }
    });


</script>

</html>