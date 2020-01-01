// alert("hi khalid")

var blankCard=false;
var defaultCard=true;

var inputCard=document.querySelector("#input");
var bodyCard=document.querySelector("body");



function hideAndShow(){
    
    document.querySelector("#blank-card").style.display="block";
    document.querySelector("#default-card").style.display="none";
}

function pridiction(data){
    if(data.length==0 || data.indexOf(' ') == 0){
      str="white space problem";
      document.querySelector("#search-result").innerHTML=str;
    }else{
      document.querySelector("#search-result").innerHTML="this is loading image";
      $.ajax({
          url: "../auth/search/index.php?pridiction="+data,
        }).done(function(data) {
          let arr=[JSON.parse(data)][0];
          let arr_name=arr['name'];
          let str="";
          console.log(arr);
          if(arr_name!="null"){
            
            for(let i=0;i<arr_name.length;++i){
              str+="<li class='list-group-item ml-0 pl-0 pr-0' ><b style='font-size:20px;color:#F012BE;' >"
              +arr_name[i]['name']+
              "<br></b><i>"
              +arr_name[i]['address']+", "+arr_name[i]['area']+", "+ arr_name[i]['city']+
              "</i>"+
              "<br><p class='pt-1'><span class='badge badge-secondary p-1'>"+arr_name[i]['phone_number']+
              "</span> <span class='badge badge-secondary  p-1'>"
              +arr_name[i]['email']+
              "</span>"+
              "</span> <span class='badge badge-info  p-1'>"
              +"read more..."+
              "</span>"+
              "</p>"
              +"</li>";
            }
          }
          let arr_city=arr['city']

          if(arr_city!="null"){
            console.log("city");
            for(let i=0;i<arr_city.length;++i){
              str+="<li class='list-group-item ml-0 pl-0 pr-0 pb-0'  >"
              +"<span style='font-size:20px;color:#F012BE;' >"+arr_city[i]['name']+"</span>"+
              




              "</br><i>"
              +arr_city[i]['address']+", <b>"+arr_city[i]['area']+", "+ arr_city[i]['city']+
              "</b></i>"





              +"<br><p class='pt-1'><span class='badge badge-secondary p-1'>"+arr_city[i]['phone_number']+
              "</span> <span class='badge badge-secondary  p-1'>"
              +arr_city[i]['email']+
              "</span>"+
              " <span class='badge badge-info  p-1'>"
              +"read more..."+
              "</span>"+
              "</p>"+
              "</li>";
            }
          }
          if(str.length==0){
            str="<h6><b>No result found</b></h6>";
          }
          document.querySelector("#search-result").innerHTML=str;
          
        });
      }
}


