<?php 

	include "connection.php" ;	
	include "encryption.php" ;
	include "../services/email.service.php" ;
	include "../services/login.service.php" ;
	$enc = new Encryption() ;

	if(isset($_POST['signup'])){

		$name = $_POST['name'] ;
		$email = $_POST['email'] ;
		$password = $_POST['password'] ;
		$area = $_POST['area'] ;
		$address = $_POST['address'] ;
		$phone = $_POST['phone'] ;
		$role = $_POST['role'] ;

		$name = mysqli_real_escape_string($conn , $name) ;
		$email = mysqli_real_escape_string($conn , $email) ;
		$area = mysqli_real_escape_string($conn , $area) ;
		$address = mysqli_real_escape_string($conn , $address) ;
		$phone = mysqli_real_escape_string($conn , $phone) ;
		$role = mysqli_real_escape_string($conn , $role) ;
		$password_enc=$enc->level_4($password);

		if($role == "0") {
			$gender = mysqli_real_escape_string($conn , $_POST['gender']) ;
			$dob = mysqli_real_escape_string($conn , $_POST['dob']) ;
			$date = strtotime($dob);
			$dob =  date('y-m-d', $date);
		}

		$auth_query = "INSERT INTO authentication (email , password , is_verified , is_paid , is_salon , is_logged_in) 
					   VALUES ('$email' , '$password_enc' , '0' , '1' , '$role' , 0)" ;

		$auth_result = mysqli_query($conn, $auth_query) ;

		if(!$auth_result){
			die("QUERY ERROR ".mysqli_error($conn)) ;
		}
		else{

			// $id_query = "SELECT * FROM authentication WHERE email = '$email'" ;
			// $id_result = mysqli_query($conn , $id_query) ;
			// $row = mysqli_fetch_assoc($id_result) ;
			$id = mysqli_insert_id($conn);

			//SENDING VERIFICATION MAIL
			// emailService($conn , $id , $email , $role) ;

			if($role == '1'){
				$salon_query = "INSERT INTO salon (name , phone_number , email , address , area , salon_id , time) 
								VALUES ('$name' , {$phone} , '$email' , '$address' , '$area' , '$id' , now())" ;
				$salon_result = mysqli_query($conn , $salon_query) ;
				
				if(!$salon_result){
					die("QUERY ERROR ".mysqli_error($conn)) ;
				}	
				else{
					Login($conn , $email , $password) ;
				}			
			}
			else{
				$user_query = "INSERT INTO user (user_id , name , date_of_birth , gender , phone_number , email , area , time) 
								VALUES ('$id' , '$name' , '$dob' , '$gender' , {$phone} , '$email' , '$area' , now())" ;
				$user_result = mysqli_query($conn , $user_query) ;
				
				if(!$user_result){
					die("QUERY ERROR ".mysqli_error($conn)) ;
				}	
				else{
					echo "new user registered check";
					Login($conn , $email , $password) ;
					echo "new user registered check";
				}

			}
		}			   

	}
	else{
		header("Location: ../index.php") ;
	}

?>