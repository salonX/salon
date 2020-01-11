<?php
// session_start();
if (isset($_SESSION['user'])){
	if($_SESSION['role'] == 0){
		 header("Location: http://localhost/salonx/");
	}
}else{
    // delete ALL COKIES AND CLEAN BROWSER
    header("Location: http://localhost/salonx/");
}




// session_write_close();




?>