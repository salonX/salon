<?php
$sql="SELECT time,appointment,order_id,title,name,email,phone_number,price ,icon,seen
    FROM booking join products on booking.product_id=products.products_id 
    where products.salon_id='$salon_id' order by order_id desc";
$result=mysqli_query($conn,$sql);
// echo $sql;
if(mysqli_num_rows($result)>0){
    
    $booking=[];
    while($row=mysqli_fetch_assoc($result)){
        array_push($booking,$row);
    }
   // print_r($booking);
    
}
else{
    // header("Location: ../?q=error");
    return;
}



?>
