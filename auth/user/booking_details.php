<?php
$sql="SELECT booking.time,salon.salon_id,salon.address,salon.area,booking.seen,salon.city,appointment,order_id,title,salon.name,salon.email,salon.phone_number,price ,icon FROM booking join products on booking.product_id=products.products_id JOIN salon on products.salon_id=salon.salon_id
where booking.user_id='$user_id' order by order_id desc";
$result=mysqli_query($conn,$sql);
// echo $sql;
if(mysqli_num_rows($result)>0){
    
    $booking=[];
    while($row=mysqli_fetch_assoc($result)){
        array_push($booking,$row);
    }
//    print_r($booking);
    
}
else{
    // header("Location: ../?q=error");
    return;
}



?>
