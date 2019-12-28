<?php
session_start();
if (isset($_SESSION['salon_id'])){

}else{
    // delete ALL COKIES AND CLEAN BROWSER
    header("Location: http://localhost/salonx/");
}




session_write_close();




?>