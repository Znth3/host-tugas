<?php 
	session_destroy();
	session_start();
	include "koneksi.php";
?>
<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login Gudang</title>
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

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							
							<div class="header">
								<div class="text-center"><h3>Gudangku</h3></div>
								<p class="lead">Login With Yours</p>
							</div>

							<form class="form-auth-small" action="index.php" method="POST">
								<?php
									if(isset($_POST['login'])){
										$nama=$_POST['nama'];
										$pass=$_POST['pass'];
										
										$sql=mysqli_query($db,"SELECT * FROM petugas WHERE username='$nama'");
										
										if($sql){
											$hasil=mysqli_fetch_array($sql);
											
											if($nama==$hasil['username']){
												if($pass==$hasil['pass']){
													echo $_SESSION['nama']=$hasil['nama'];
													$_SESSION['nip']=$hasil['nip'];
													$_SESSION['akses']=$hasil['akses'];
													$_SESSION['auth']=1;
													header('Location: menu.php');

												}else{
													echo "kombinasi salah";
												}
											}else{
												echo "user tak ada";
											}
										}else{
											echo "sql error";
										}
									}
								?>
								<div class="form-group">
									<label for="signin-name" name="nama" class="control-label sr-only">Username</label>
									<input type="text" class="form-control" id="signin-email" name="nama" placeholder="Username">
								</div>
								<div class="form-group">
									<label for="signin-password" name="pass" class="control-label sr-only">Password</label>
									<input type="password" class="form-control" id="signin-password" name="pass" placeholder="Password">
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block" name="login">LOGIN</button>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Sebelum Bekerja Silahkan Login Terlebih dahulu</h1>
							<p>by Pengawas Gudang</p>
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