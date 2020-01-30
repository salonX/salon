// alert("hi khalid")

var blankCard=false;
var defaultCard=true;

var inputCard=document.querySelector("#input");
var bodyCard=document.querySelector("body");



function hideAndShow(){
    
    document.querySelector("#blank-card").style.display="block";
    document.querySelector("#default-card").style.display="none";
    // document.querySelector("#input-hide").style.display="none";
}
var first=0;
function pridiction(glob_data){
  // console.log("hi khad0");
    if(first==0){
      hideAndShow();
      first=1;
    }
    if(glob_data.length==0 || glob_data.indexOf(' ') == 0){
      str=""+
      "<div class='spinner'>"+
       "<div class='bounce1'></div>"+
        "<div class='bounce2'></div>"+
        "<div class='bounce3'></div>"+
     "</div>";
      document.querySelector("#search-result").innerHTML=str;
    }else{
      document.querySelector("#search-result").innerHTML=""+
      "<div class='spinner'>"+
       "<div class='bounce1'></div>"+
        "<div class='bounce2'></div>"+
        "<div class='bounce3'></div>"+
     "</div>";

      $.ajax({
          url: "../auth/search/index.php?pridiction="+glob_data,
        }).done(function(data) {

          let arr=[JSON.parse(data)][0];
          let arr_name=arr['name'];
          let str="<a class='list-group-item ml-0 pl-0 pr-0 pb-0'  href='search.php?q="+glob_data+"'>"+
          "Search  for <b>"+glob_data+
          "</b></a> ";
          console.log(arr);
          if(arr_name!="null"){
            // console.log(arr_name);
            // console.log("khalid");
            for(let i=0;i<arr_name.length;++i){
              str+="<a class='list-group-item ml-0 pl-0 pr-0 pb-0'  href='../salon/products.php?salon_id="+arr_name[i]['salon_id']+"'><b>"
              +arr_name[i]['name']+"</b></br><i ><small class='text-secondary'>"
              +arr_name[i]['address']+", <b>"+arr_name[i]['area']+", "+ arr_name[i]['city']+
              "</b></i></small><a>";
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
          document.querySelector("#search-result").innerHTML=str;
          
        });
      }
}


