<?php 
	

	function Login($conn , $email , $password) {
		$email = mysqli_real_escape_string($conn , $email) ;
		$password = mysqli_real_escape_string($conn , $password);

		$enc = new Encryption() ;

		$query = "SELECT * FROM authentication WHERE email = '$email' " ;
		$result = mysqli_query($conn, $query) ;

		if(!$result){
			die('Query Failed '.mysqli_error($conn)) ;
		}
		else{
			$row = mysqli_fetch_assoc($result) ;
			$fetched_email = $row['email'] ;
			$fetched_password = $row['password'] ;
			$agent_id = $row['auth_id'] ;
			$isSalon = $row['is_salon'] ;

			$enc_password = $enc->level_1($fetched_password) ;

			if($email !== $fetched_email){
				header("Location: ../register/login.php?r=izlea") ;
			}

			else if($password !== $enc_password){
				header("Location: ../register/login.php?r=qlkkowuj") ;
			}
			else{
				$check_log_query = "SELECT agent_id FROM log_information WHERE agent_id = $agent_id";
				$check_log_result = mysqli_query($conn , $check_log_query) ;
				$count = mysqli_num_rows($check_log_result) ;

				if($count == 0){
					$ip = $_SERVER['REMOTE_ADDR'] ;
					$time_out = Date('y-m-d', strtotime("+3 days")) ;
					$log_query = "INSERT INTO log_information (agent_id , time_in , time_out , is_salon , ip_address ) 
									VALUES ($agent_id , now() , '$time_out' , $isSalon , '$ip')" ;
					$log_result = mysqli_query($conn , $log_query) ;

					if(!$log_result){
						die("QUERY FAILED ".mysqli_error($conn)) ;
					}
				}

				// TO CHANGE IS LOGGIN IN THE AUTHENTICATION TABLE
				$update_query = "UPDATE authentication SET is_logged_in = 1 WHERE auth_id = $agent_id" ;
				$update_result = mysqli_query($conn, $update_query) ;

				if(!$update_result) {
					die("QUERY FAILED AT LOGIN UPDATE AUTHENTICATION TABLE ".mysqli_error($conn)) ;
				}

				ob_start() ;
				session_start() ;
				$_SESSION['user'] = $enc->level_2($row['auth_id']);
				$_SESSION['role'] = $enc->level_2($row['is_salon']) ;

				header("Location: ../index.php");
			}
		}
	}

?>