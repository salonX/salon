<script src="../js/cookie.js"></script>
<?php 
	

	function Login($conn , $email , $password) {
		echo "LOgin check";
		$email = mysqli_real_escape_string($conn , $email) ;
		// $password = mysqli_real_escape_string($conn , $password);
		// hashing of password
		$enc = new Encryption() ;
		$password=$enc->level_4($password);
		

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
			// there was a confusionhere coz passowd in db already encrypted
			$enc_password = $fetched_password;

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
				$_SESSION['role'] = $row['is_salon'];

				// set cookie for the data after login
				// THIS IS THE SCRIPT : WHICH SET DATA INTO BROWSER > DETAILS OF USER/SALON

				if($row['is_salon']==0){
					$sql_for_user_data="SELECT name,date_of_birth,gender,phone_number,email,area,city,image FROM user where user_id=".$row['auth_id'];
					$user_data=mysqli_query($conn,$sql_for_user_data);
					$count=mysqli_num_rows($user_data);
					if($count==1){
						$user_row=mysqli_fetch_assoc($user_data);
						$_SESSION['user_info']=json_encode($user_row);
						
					}else{
						header("Location: logout.php");
					}

				}else{
					$sql_for_salon_data="SELECT name,email,phone_number,address,area,city,image FROM salon where salon_id=".$row['auth_id'];
					$salon_data=mysqli_query($conn,$sql_for_salon_data);
					$count=mysqli_num_rows($salon_data);
					if($count==1){
						$salon_row=mysqli_fetch_assoc($salon_data);
						$_SESSION['salon_info']=json_encode($salon_row);
						header('Location: ../salon');
					}else{
						header("Location: logout.php");
					}
				}


				header("Location: ../index.php");
			}
		}
		header("Location: ../index.php");
	}


?>