<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/hiltonHotelsLogo.svg.png" />
    <title>Hilton Holten Resort</title>
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/Kh??ch-s???n-Hilton-H??-N???i-Opera-2-1290x860.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="process-register.php" method="POST">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>
        
					<span class="login100-form-title p-b-34 p-t-27">
						????ng k??
					</span>

                    <?php
                    if (isset($_GET['response'])) {
                        if ($_GET['response'] == 'successfully') {
                        echo "<p class='text-danger'>B???n ???? ????ng k?? th??nh c??ng</p>";
                        }
                        if ($_GET['response'] == 'existed') {
                        echo "<p class='text-danger'>email ???? t???n t???i</p>";
                        }
                    }
                    ?>
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="fullname_guest" placeholder="H??? t??n">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username_guest" placeholder="T??n t??i kho???n">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass1_guest" placeholder="M???t kh???u">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass2_guest" placeholder="X??c nh???n m???t kh???u">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="text" name="email_guest" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xf159;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="text" name="phone_guest" placeholder="S??? ??i???n tho???i">
						<span class="focus-input100" data-placeholder="&#xf2b6;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="text" name="address_guest" placeholder="?????a ch???">
						<span class="focus-input100" data-placeholder="&#xf112;"></span>
					</div>


					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="Loginbtn">
							????ng k??
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main(login-index).js"></script>

</body>
</html>