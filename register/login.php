<!DOCTYPE html>
<html>
<head>
	<?php include "../common/all_header_files.php" ?>
	<title>Login</title>

	<style type="text/css">
		
		.my-border{
			border: solid grey 1px ;
		}

		.form-control {
			/*font-size: 16px;*/
			transition: all 0.4s;
			box-shadow: none;
		}
		.form-control:focus {
	        border-color: #5cb85c;
	    }
	    .form-control, .btn {
	        border-radius: 50px;
			outline: none !important;
	    }
		.signin-form {
			width: 400px;
	    	margin: 0 auto;
			padding: 0px 0;
		}
	    .signin-form form {
			border-radius: 5px;
	    	margin-bottom: 20px;
	        background: #fff;
	        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	        padding: 40px;
	    }

		.signin-form .form-group {
			margin-bottom: 20px;
		}
	    .signin-form .btn {        
	        font-size: 18px;
			line-height: 26px;        
	        font-weight: bold;
			text-align: center;
	    }
	    .signin-form .small {
	        font-size: 13px;
	    }
		.signup-btn {
			text-align: center;
			border-color: #5cb85c;
			transition: all 0.4s;
		}
		.signup-btn:hover {
			background: #5cb85c;
			opacity: 0.8;
		}
	    .or-seperator {
	        margin: 50px 0 0px;
	        text-align: center;
	        border-top: 1px solid #e0e0e0;
	    }
	    .or-seperator b {
	        padding: 0 10px;
			width: 40px;
			height: 40px;
			font-size: 16px;
			text-align: center;
			line-height: 40px;
			background: #fff;
			display: inline-block;
	        border: 1px solid #e0e0e0;
			border-radius: 50%;
	        position: relative;
	        top: -22px;
	        z-index: 1;
	    }
	    .social-btn .btn {
			color: #fff;
	        margin: 10px 0 0 30px;
			font-size: 15px;
	        width: 55px;
	        height: 55px;
	        line-height: 38px;
	        border-radius: 50%;
			font-weight: normal;
	        text-align: center;
			border: none;
			transition: all 0.4s;
	    }	
		.social-btn .btn:first-child {
			margin-left: 0;
		}
		.social-btn .btn:hover {
			opacity: 0.8;
		}
		.social-btn .btn-primary {
			background: #507cc0;
		}
		.social-btn .btn-info {
			background: #64ccf1;
		}
		.social-btn .btn-danger {
			background: #df4930;
		}
		.social-btn .btn i {
			font-size: 20px;
		}

		h1{
			font-family: Dancing script ;
		}

	</style>
</head>








































<body>

	<div class="option container px-3">
		<div class="row pt2">
			<!-- <div class="col-sm-1"></div> -->
			<div class="col-6"  id="login_option_check">
				<h2 style=" font-family: 'Dancing script'; cursor: pointer;" class="text-center">
					<span id="login_option"><b>Login</b></span>
				</h2>
			</div>
			<!-- <div class="col-sm-2"></div> -->
			<div class="col-6"  id="signup_option_check">
				<h2 style=" font-family: 'Dancing script' ; cursor: pointer;" class="text-center">
					<span id="signup_option"><b>Signup</b></span>
				</h2>
			</div>
		</div>
	</div>
	<!-- <span id="signup_option"><b>Signup</b></span>
					<span id="login_option"><b>Login</b></span> -->




























					

	<div class="container p-3" id="login" >

		
		<?php 

			if(isset($_GET['r'])){

				$value = $_GET['r'] ;

				if($value == "izlea"){ ?>
					<div class="alert alert-danger text-center d-block mx-auto" role="alert"><b>Wrong Email</b></div>
				<?php } 

				if($value == "qlkkowuj"){ ?>
					<div class="alert alert-danger text-center d-block" role="alert"><b>Wrong Password</b></div>
				<?php }

				if($value == "yuri"){
					header("Location: ../index.php") ;
				}
			}
		?>


		

		<div class="row fadeIn animated">
			<div class="col-sm-1"></div>
			<div class="col-sm-3 my-border d-flex flex-wrap align-items-center w3-hide-small">
				<img src="../images/logo.jpg" class="img-fluid">
			</div>

			<div class="col-sm-6 my-border">
				<div class="row">
					<div class="col-2"></div>
					<div class="col-sm-8">
					 <form action="../auth/login.php" method="post">
						<h3 class="text-center text-success"><b>Login</b></h3>
				        <!-- <p class="text-center text-muted">Sign in with your social media account</p> -->
						<!-- <div class="social-btn text-center">
							<a href="#" class="btn btn-primary btn-lg" title="Facebook"><i class="fa fa-facebook"></i></a>
							<a href="#" class="btn btn-info btn-lg" title="Twitter"><i class="fa fa-twitter"></i></a>
							<a href="#" class="btn btn-danger btn-lg" title="Google"><i class="fa fa-google"></i></a>
						</div> -->
						<!-- <div class="or-seperator"><b>or</b></div> -->
				        <div class="form-group">
				        	<input type="email" class="form-control input-lg" name="email" placeholder="Email" required="required">
				        </div>
						<div class="form-group">
				            <input type="password" class="form-control input-lg" name="password" placeholder="Password" required="required">
				        </div>  
				        <div class="form-group">
				            <button type="submit" class="btn btn-success btn-lg btn-block signup-btn" name="submit">Login</button>
				        </div>
				        <div class="text-center small"><a href="#" class="text-success">Forgot Your password?</a></div>
			    	 </form>
			    	  <div class="text-center small">Don't have an account? <a href="#" class="text-success">Sign up</a></div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</div>
			<div class="col-sm-3"></div>
		</div>
	</div>




	<!-- ############# SIGNUPP #################### -->


	<div class="container p-3" id="signup" style="display: none; padding: 0;">

		
		<?php 

			if(isset($_GET['r'])){

				$value = $_GET['r'] ;

				if($value == "izlea"){ ?>
					<div class="alert alert-danger text-center d-block mx-auto" role="alert"><b>Wrong Email</b></div>
				<?php } 

				if($value == "qlkkowuj"){ ?>
					<div class="alert alert-danger text-center d-block" role="alert"><b>Wrong Password</b></div>
				<?php }

				if($value == "yuri"){
					header("Location: ../index.php") ;
				}
			}
		?>


		

		<div class="row animated fadeIn">
			<div class="col-sm-1"></div>
			<div class="col-sm-3 my-border d-flex flex-wrap align-items-center w3-hide-small">
				<img src="../images/logo.jpg" class="img-fluid">
			</div>

			<div class="col-sm-6 my-border">
				<div class="row">
					<div class="col-1"></div>
					<div class="col-sm-10">
						<h3 class="text-center text-success"><b>Sign Up</b></h3>
				        

						<div class="row" style="margin: 0">
							<div class="col-6" id="user_option" style="border-bottom: solid green 1px; cursor: pointer; color: green">
								<h4 class="text-center" style="font-family: 'Dancing script';"><b>User</b></h4>
							</div>
							<div class="col-6" id="salon_option" style="cursor: pointer;"> 
								<h4 class="text-center" style="font-family: 'Dancing script'"><b>Salon</b></h4>
							</div>
						</div>
						<br>




















						<!-- ###### USER FORM ########### -->
					<form action="../auth/signup.php" method="post" enctype="multipart/form-data">
						<div id="user_form" class="animated fadeIn">
							<div class="form-row">
								<div class="form-group col-md-12">
							      <input type="text" class="form-control" placeholder="Name" name="name" required="required">
							    </div>
							    <div class="form-group col-md-6">
							      <input type="email" class="form-control" placeholder="Email" name="email" required="required">
							    </div>
							    <div class="form-group col-md-6">
							      <input type="password" class="form-control"  placeholder="Password" name="password" required="required">
							    </div>
							    <div class="form-group col-md-6">
							      <input type="text" class="form-control" placeholder="Gender" name="gender" required="required">
							    </div>
							    <div class="form-group col-md-6">
							      <input type="date" class="form-control"  placeholder="DOB" name="dob" required="required">
							    </div>
							    <div class="form-group col-md-6">
							      <input type="text" class="form-control" placeholder="Area" name="area" required="required">
							    </div>
							    <div class="form-group col-md-6">
							      <input type="number" class="form-control"  placeholder="Phone" name="phone" required="required">
							    </div>
							  </div>
							  	<input type="hidden" name="role" value="0">
							  <div class="form-group">
							    <textarea type="text" class="form-control" rows="2" name="address" placeholder="Address"></textarea>
							  </div>
							  <div class="form-group">
				           		 <button type="submit" class="btn btn-success btn-lg btn-block signup-btn" name="signup">Signup</button>
				        	</div>
						</div>
					 </form>





















						<!-- ######## SALON FORM ############ -->
					 <form action="../auth/signup.php" method="post" enctype="multipart/form-data">
						<div id="salon_form" class="animated fadeIn" style="display: none;">
							<div class="form-row">
								<div class="form-group col-md-12">
							      <input type="text" class="form-control" placeholder="Salon Name" name="name" required="required">
							    </div>
							    <div class="form-group col-md-12">
							      <input type="email" class="form-control" placeholder="Email" name="email" required="required">
							    </div>
							    <div class="form-group col-md-12">
							      <input type="password" class="form-control"  placeholder="Password" name="password" required="required">
							    </div>
							    <div class="form-group col-md-6">
							      <input type="text" class="form-control" placeholder="Area" name="area" required="required">
							    </div>
							    <div class="form-group col-md-6">
							      <input type="number" class="form-control"  placeholder="Phone" name="phone" required="required">
							    </div>
							  </div>
							  	<input type="hidden" name="role" value="1">
							  <div class="form-group">
							    <textarea type="text" class="form-control" rows="2" placeholder="Address" name="address"></textarea>
							  </div>
							   <div class="form-group">
				            	<button type="submit" class="btn btn-success btn-lg btn-block signup-btn" name="signup">Signup</button>
				        	   </div>
						</div>
			    	  </form>
					</div>

					<div class="col-sm-3"></div>
				</div>
			</div>
			<div class="col-sm-3"></div>
		</div>
	</div>





























































	<script>
		
		let login = document.querySelector('#login') ;
		let signup = document.querySelector('#signup') ;
		let signup_option = document.querySelector("#signup_option") ;
		let login_option = document.querySelector("#login_option") ;
		let login_option_check = document.querySelector('#login_option_check') ;
		let signup_option_check = document.querySelector('#signup_option_check');


		let user_option = document.querySelector("#user_option") ;
		let salon_option = document.querySelector('#salon_option') ;
		let user_form = document.querySelector('#user_form') ;
		let salon_form = document.querySelector("#salon_form") ;

		signup_option.style.opacity = 0.6 ;

		signup_option.addEventListener('click' , () => {
			login.style.display = "none" ;
			signup.style.display = "inherit" ;
			login_option.style.opacity = 0.6 ;
			signup_option.style.opacity = 1 ;

			// signup_option_check.style.borderBottom = "solid black 1px" ;
			login_option_check.style.borderBottom = "solid white 0px" ;
		});

		login_option.addEventListener("click" , () => {
			login.style.display = "inherit" ;
			signup.style.display = "none" ;
			login_option.style.opacity = 1 ;
			signup_option.style.opacity = 0.6 ;

			signup_option_check.style.borderBottom = "solid white 0px" ;
			// login_option_check.style.borderBottom = "solid black 1px" ;
		});


		user_option.addEventListener('click' , () =>{
			user_option.style.borderBottom = "solid green 1px" ;
			salon_option.style.borderBottom = "solid white 0px" ;
			user_option.style.color = "green" ;
			salon_option.style.color = "black" ;

			user_form.style.display = "inherit" ;
			salon_form.style.display = "none" ;
		});

		salon_option.addEventListener('click' , () =>{
			salon_option.style.color = "green" ;
			salon_option.style.borderBottom = "solid green 1px" ;
			user_option.style.borderBottom = "solid white 0px" ;
			user_option.style.color = "black" ;

			user_form.style.display = "none" ;
			salon_form.style.display ="inherit";
		});


	</script>

</body>
</html>