<script>

    localStorage.setItem("user_detail", JSON.stringify({
"name":"khalid",
"date_of_birth":15-00-1997,
"gender":"male",
"email":"modkhalid5@gmail.com",
"phone_number":"7210378472",
"area":"delhi",
"city":"ghaziabad",
"image":"imageLink",
"user_id":12

}));

    localStorage.setItem("salon_detail",JSON.stringify({
        "name":"khalid",
"email":"modkhalid5@gmail.com",
"phone_number":"7210378472",
"area":"delhi",
"city":"ghaziabad",
"image":"imageLink",
"salon_id":14,
"address":"khora colony"
}));
{/* localStorage.removeItem("salon_detail")
localStorage.removeItem("user_detail") */}
</script>
<?php
    include "../auth/encryption.php";
    $enc=new Encryption();
    session_start();
    
    $_SESSION['salon_id']=$enc->level_2(14);
    session_write_close();


?>
<p>khalid khan<?php echo $_SESSION['salon_id'];

?></p>