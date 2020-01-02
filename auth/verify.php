<?php 
	
	include "connection.php" ;	

	if(isset($_GET['email']) && isset($_GET['hash'])){

		$email = $_GET['email'];
		$hash =  $_GET['hash'];

		$check_email = "SELECT * FROM authentication WHERE email = '$email' AND is_verified = '0' " ;
		$check_result = mysqli_query($conn , $check_email) ;

		if(mysqli_num_rows($check_result) == 0){
			header("Location: ../register/login.php?q=notfound") ;
		}
		else{
			$row = mysqli_fetch_assoc($check_result) ;
			$auth_id = $row['auth_id'] ;

			$verify_query = "SELECT * FROM verification_pass WHERE agent_id = $auth_id" ;
			$verify_result = mysqli_query($conn , $verify_query) ;

			if(!$verify_result){
				die("VERIFICATION ERROR ".mysqli_error($conn)) ;
			}

			$row = mysqli_fetch_assoc($verify_result) ;
			$db_hash = $row['secret_key'] ;

			if($hash == $db_hash) {
				$update_query = "UPDATE authentication SET is_verified = '1' WHERE auth_id = $auth_id" ;
				$update_result = mysqli_query($conn , $update_query) ;

				if(!$update_result){
					die('UPDATING VERIFICATION ERREO '.mysqli_error($conn)) ;
				}

				$delete_query = "DELETE FROM verification_pass WHERE agent_id = $auth_id" ;
				$delete_result = mysqli_query($conn , $delete_query) ;

				if(!$delete_result) {
					die("DELETING VERIFICATION PASS ERROR ".mysqli_error($conn)) ;
				}

				header("Location: ../index.php") ;
			}
			else{
				header("Location: ../register/login.php") ;
			}
		}
	}


?>