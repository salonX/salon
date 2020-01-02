<?php

  include "../../auth/connection.php" ;

	function emailService($conn , $id, $email, $role) {
		  //EMAIL VERIFICATION PHP CODE
          $hash = md5(rand(0,1000));
          $to = $email ;
          $subject = "Signup || Verification of Account";
          $msg = "           Welcome to SalonX

                  Thanks for signing up!
                  Your account has been created, you can login with Your submitted credentials after you have activated your account by pressing the url below.

                  Please click this link to activate your account:
                  http://localhost/salon/auth/verify.php?email={$email}&hash={$hash}" ;
                
                $header = "From: noreply@salonX.in";

                //INSERTING THE HASH INTO THE USERS DATABASE
                $hash_query = "INSERT INTO verification_pass (agent_id , is_salon , secret_key) VALUES ($id , '$role' , '{$hash}') ";
                $hash_result = mysqli_query($conn , $hash_query);

                if(!$hash_result) {
                	die('EMAIL SERVICE FAILED '.mysqli_error($conn)) ;
                }
	
                mail($to , $subject, $msg , $header);

                return ;
	}

 ?>