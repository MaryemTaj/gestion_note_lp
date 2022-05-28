<!doctype html>
<html lang="en">
<?php
session_start();
?>
<head>
	<title>page accueil</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/selectstyle.css">















</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.html"><img src="assets/img/logoApp1.jpg" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Search ...">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">CHERCHER</button></span>
					</div>
				</form>
				<div class="navbar-btn navbar-btn-right">
					<a class="btn btn-success update-pro" href="deconnecter.php" title="Upgrade to Pro" target="_blank"><i 
						class="fa fa-power-off"  ></i> <span>Deconnexion</span></a>
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						
						
						<li class="dropdown">
							<?php
							$nom=$_SESSION['nom_adm'];
							$prenom=$_SESSION['prenom_adm'];
							?>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user-circle" aria-hidden="true"></i> <span><?php echo "$nom $prenom"?></span> </a>
							
						</li>
						<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>

					<ul class="nav">
						
						<?php 
						$fil=$_GET['code_fil'];
						 ?>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>NOTES </span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="choixModAdmin.php?id_semestre=s5&code_fil=<?php echo $fil ?>" class="">SEMESTRE 5</a></li>
									<li><a href="choixModAdmin.php?id_semestre=s6&code_fil=<?php echo $fil ?>"  class="">SEMESTRE 6</a></li>
								</ul>
							</div>
						</li>

						<li>
							<a href="#subPages1" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>EXAMENS </span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages1" class="collapse ">
								<ul class="nav">
									<li><a href="planingAdmin.php?code_fil=<?php echo $fil ?>"  class="">planing des examens</a></li>
									
								</ul>
							</div>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					
					<div class="row">
						<div class="col-md-6">
							<!-- BUTTONS -->
							
							<!-- END BUTTONS -->
							<!-- INPUTS -->
							
							<!-- END INPUTS -->
							<!-- INPUT SIZING -->
							<?php require_once("connection.php");
							$fil=$_GET['code_fil'];
							$semt=$_GET['id_semestre'];

							$req="SELECT *from filiere join module_filiere using (id_fil) join module using (id_mod) where id_semestre='$semt' && code_fil='$fil'";

							$rs=$conn ->query($req);
							 ?>

							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">choisir le module :</h3>
								</div>
								<div class="panel-body">
									
									 
				  	
				  
				   <li>
							<a href="#subPages3" data-toggle="collapse" class="collapsed" ><span >Module </span> </a>
							<div id="subPages3" class="collapse ">
								<?php while($mod=mysqli_fetch_assoc($rs)){ ?>
								<ul class="nav" >
									<li><a href="etudiantAdmin.php?code_fil=<?php echo($fil)?>&id_semestre=<?php echo($semt)?>&id_mod=<?php echo ($mod['id_mod'])?>" style="color: black;"><?php echo ($mod['nom_mod']) ?></a></li>
									
								</ul>
								<?php } ?>
							</div>
						</li>
				   
				 

				</div>
									
							       <br><br>
									
									
									
									<br><br>
									
									<br><br>
									
									<br><br>
									
									<br><br>
									
									
									
									
									
											
								</div>
							</div>
							<!-- END INPUT SIZING -->
						</div>
						<div class="col-md-6">
							<!-- LABELS -->
							
							<!-- END LABELS -->
							<!-- PROGRESS BARS -->
							
							<!-- END PROGRESS BARS -->
							<!-- INPUT GROUPS -->
							
							
							<!-- END ALERT MESSAGES -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
</body>

</html>
