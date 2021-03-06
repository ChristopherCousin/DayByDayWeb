<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login" style="background-image: url('images/bg-01.jpg');">
			<form method="get" action="index.php">
				<button class="login-form-btn2">
					Back
				</button>
			  </form>
			<div class="wrap-login p-t-30 p-b-50">
				<span class="login-form-title p-b-41">
					Login
				</span>
				<form action = "php/DataBaseManager.php" method = "post" class="login-form validate-form p-b-33 p-t-5">

					<div class="wrap-input validate-input" data-validate = "Enter username">
						<input class="input" type="text" name="username" placeholder="User name">
						<span class="focus-input" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input validate-input" data-validate="Enter password">
						<input class="input" type="password" name="password" placeholder="Password">
						<span class="focus-input" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login-form-btn m-t-32">

						<button class="login-form-btn">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
