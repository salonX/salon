<?php session_start(); ?>
<?php include "connection.php" ;?>
<script src="../js/cookie.js"></script>
<script>
setCookie("user_info","",-1);
setCookie("salon_info","",-1);
</script>
<?php 

    // USER LOGOUT SUCCESSFULLY
	 $agent_id = $_SESSION['user'] ;

	 // TO CHANGE IS LOGGIN IN THE AUTHENTICATION TABLE
	 $update_query = "UPDATE authentication SET is_logged_in = 0 WHERE auth_id = $agent_id" ;
	 $update_result = mysqli_query($conn, $update_query) ;

	 if(!$update_result) {
	   	die("QUERY FAILED AT LOGIN UPDATE AUTHENTICATION TABLE ".mysqli_error($conn)) ;
	 }

     $_SESSION['user'] = NULL ;
	 $_SESSION['role'] = NULL ;
	 

   header("Location: ../index.php") ;

?>