<?php 
	
	include "connection.php" ;	
	include "../services/login.service.php" ;
	include "encryption.php";
	$enc = new Encryption() ;

	if(isset($_POST['submit'])){

		$email = $_POST['email'] ;
		$password = $_POST['password'] ;
		// echo "after login.";

		Login($conn , $email , $password) ;
		// echo "after login.";
		
	}
	// echo "after login.";
?>