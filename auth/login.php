<?php 
	
	include "connection.php" ;	
	include "../services/login.service.php" ;

	$enc = new Encryption() ;

	if(isset($_POST['submit'])){

		$email = $_POST['email'] ;
		$password = $_POST['password'] ;

		Login($conn , $email , $password) ;
		
	}

?>