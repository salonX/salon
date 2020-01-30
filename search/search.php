
<?php

    include "../common/all_header_files.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BookMyBarber Search for <?php echo $_REQUEST['q'];?></title>
    <link href="https://fonts.googleapis.com/css?family=Amarante&display=swap" rel="stylesheet"> 
</head>
<body class="bg-light" style="font-family: 'Oswald', sans-serif;">
    <?php include "../nav/inner_top.php"?>

        <div class="container pt-1" id="result">



            
    </div>
</body>
<script>
    glob_data="<?php echo $_REQUEST['q'];?>";
    $.ajax({
          url: "../auth/search/index.php?pridiction="+glob_data,
    }).done(function (data){
        
        let arr=[JSON.parse(data)][0];
          let arr_name=arr['name'];
          let str="";

          if(arr_name!="null"){

            for(let i=0;i<arr_name.length;++i){
              str+=`
              
              <div class="row mt-2 w3-hide-large shadow p-1 rounded border broder-secondary bg-white shadow">
                <div class="col-4  " 
                    style="max-height:175px;
                        background-position: center;
                        background-repeat: no-repeat;
                        background-size: 250%;
                        width: 100%;
                        background-image: url('../images/products/cutting.jpg');
                        ">
                </div>
                <div class="col-8 ">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0" style="font-family: 'Amarante', cursive;"><b>
                               ${arr_name[i]['name']}
                            </b></h3>
                            <h6 class="mt-0"><b>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                            </b></h6>
                            <p class="text-secondary mb-0">
                                    <i class="fa fa-map-marker"></i>
                                    ${arr_name[i]['address']},${arr_name[i]['area']},${arr_name[i]['city']}
                            </p>
                            
                        </div>
                        <div class="col-sm-6 pt-1 pr-0 ">
                            
                            <!-- <br> -->
                            <span style="font-size: 14px; " class="text-danger btn ">
                                <b>Starts @ <i class="fa fa-rupee"></i>99 </b>
                            </span>
                            <a class="btn btn-success w3-right " href='../salon/products.php?salon_id=${arr_name[i]['salon_id ']}' >View Deals</a>

                            
                        </div>
                    </div>
                </div>
            </div>









    <div class="row  w3-hide-small w3-hide-medium mt-2">
        <div class="col-10 mx-auto d-block">
            <div class="row  bg-white shadow " >





                <div class="col-4 " style="border-right:2px s">
                    <img 
                        class="w-100 img rounded fluid img-thumbnail"
                        style="max-height:150px;"
                        src="http://localhost/salonx/images/home_page/carousel/10.png" 
                        alt="images for salon">
                </div>

                <div class="col-8">
                    <div class="row">
                        <div class="col-sm-6   b">
                            <h3 class="mb-0" style="font-family: 'Amarante', cursive;"><b>
                                ${arr_name[i]['name']}
                            </b></h3>
                            <h6 class="mt-0"><b>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                            </b></h6>
                            <p class="text-secondary">
                                    <i class="fa fa-map-marker"></i>
                                    ${arr_name[i]['address']},${arr_name[i]['area']},${arr_name[i]['city']}
                            </p>
                            <small>
                                <i class="fa fa-certificate text-success""></i>
                                Verified By SalonX
                            </small>
                        </div>

                        <div class="col-sm-6">
                            <br>
                            <p class="text-center  text-success"> 
                                Book your salon
                                <br>
                                <b>
                                    <span style="font-size:35px;"><i class="fa fa-rupee"></i>99</span>
                                </b>
                                <br>
                                <a class="btn btn-success text-center pl-5 pr-5"  href='../salon/products.php?salon_id=`+arr_name[i]['salon_id ']+`'>
                                 View Deals
                                </a>
                            </p>
                            
                        </div>

                    </div>
                </div>



            </div>
        </div>
    </div>


              `;
            }
          }
          let arr_city=arr['city']

          if(arr_city!="null"){
            for(let i=0;i<arr_city.length;++i){
              str+="<a class='list-group-item ml-0 pl-0 pr-0 pb-0 text-secondary'  href='../salon/products.php?salon_id="+arr_city[i]['salon_id']+"'>"
              +arr_city[i]['name']+"</br><i ><small class=''>"
              +arr_city[i]['address']+", <b>"+arr_city[i]['area']+", "+ arr_city[i]['city']+
              "</b></i></small><a>";
            }
          }
          if(str.length==0){
            str="<h6><b>No result found</b></h6>";
          }
          document.querySelector("#result").innerHTML=str;
    })
</script>
</html>