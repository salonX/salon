<?php 
	
	include "connection.php" ;	
	include "encryption.php" ;

	$enc = new Encryption() ;

	if(isset($_POST['submit'])){

		$email = $_POST['email'] ;
		$password = $_POST['password'] ;

		$query = "SELECT * FROM authentication WHERE email = '$email' " ;
		$result = mysqli_query($conn, $query) ;

		if(!$result){
			die('Query Failed') ;
		}
		else{
			$row = mysqli_fetch_assoc($result) ;
			$fetched_email = $row['email'] ;
			$fetched_password = $row['password'] ;

			$enc_password = $enc->level1($fetched_password) ;

			if($email !== $fetched_email){
				header("Location: ../register/login.php?r=izlea") ;
			}

			else if($password !== $enc_password){
				header("Location: ../register/login.php?r=qlkkowuj") ;
			}
			else{
				session_start() ;
				$_SESSION['user'] = $enc->level2($row['agent_id']);
				header("Location: ../register/login.php?r=yuri");
			}
		}
	}

?>