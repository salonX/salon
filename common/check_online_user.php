<?php
session_start();
if (isset($_SESSION['user_id'])){

}else{
    // delete ALL COKIES AND CLEAN BROWSER
    header("Location: localhost/salonx/");
}




session_write_close();

?>