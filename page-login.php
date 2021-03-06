<?php
session_start();
?>

<!doctype html>

<html lang="en" class="fullscreen-bg">

<head>
	<title>Login | Klorofil - Free Bootstrap Dashboard Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">





</head>


<body class="body-login">
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center">
									
									<img src="assets/img/logoap2.jpg" alt="Klorofil Logo" class="img-responsive logo" >
								</div>
								<h1 >CONNECTER A VOTRE COMPTE</h1>
							</div>
							
							<form class="form-auth-small" method="POST" action="Login1.php">
								<div class="form-group">
									<label for="text" class="control-label sr-only">login</label>
									<input type="text" class="form-control" name="login" value="" placeholder="LOGIN">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Mote De Passe</label>
									<input type="password" class="form-control" name="pwd" value="" placeholder="">
								</div>
								<div class="form-group clearfix">
									
								</div>
								<button  type="submit" name="submit" class="btn btn-primary btn-lg btn-block">SE CONNECTER</button>
								<div class="bottom">
									<span class="helper-text"><i class="fa fa-lock"></i> <a href="#">Mote De Passe Oublie?</a></span>
								</div>
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading"></h1>
							<p></p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
