<?php
    require_once "koneksi.php";
    session_start();
    if (empty($_SESSION['Nama_Pengguna'])) {
        header("Location:login.php");
	}
	$nama = $_SESSION['Nama_Pengguna'];
	//$data = mysqli_query($koneksi,"select * from akun where Nama_Pengguna='$nama' and password='$hash'");
	//$cek = mysqli_num_rows($data);
	$foto = mysqli_query($koneksi,"SELECT photo FROM akun WHERE Nama_Pengguna='$nama'");
	$ft = mysqli_fetch_assoc($foto);
    
?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>tu.skul&mdash;profil</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content=" " />
	<meta name="keywords" content=" " />
	<meta name="author" content=" " />

	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700" rel="stylesheet"
	>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container-wrap">
			<div class="top-menu">
				<div class="row">
					<div class="col-md-12 col-offset-0 text-center">
						<div id="fh5co-logo"><a href="index.php"><img src="logo/tu.png" width="150px" ></a></div>
					</div>
					<div class="col-md-12 col-md-offset-0 text-center menu-1">
						<ul>
							<li ><a href="homepage.php">Home</a></li>
							<li><a href="donasi_saya.php">Donasi Saya</a></li>
							<li class="has-dropdown">
								<a href="galangdana.html">Galang Dana</a>
								<ul class="dropdown">
									<li><a href="galangdam">Mahasiswa</a></li>
									<li><a href="#">SMA</a></li>
									
								</ul>
							</li>
							<li><a href="inbox.php">Inbox</a></li>
							<li class="has-dropdown" class="active">
								<a href="akun.php">Akun</a>
									<ul class="dropdown">
										<li><a href="profil.php">Profil</a></li>
										<li><a href="logout.php">Log out</a></li>
									</ul>
							</li>
							
							
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>
	<div class="container-wrap">
		<aside id="fh5co-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/profilakun.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 text-center">
				   				<div class="slider-text-inner">
                                    <div class="profil">
                                    <img src="images/profil/<?php echo $ft['photo'] ?>" />
                                    </div>
                                    <h1><?php echo  $_SESSION["Nama_Pengguna"]?></h1>
                                    <p><?php echo  $_SESSION["Nama"]?></p>
                                </div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		<div id="fh5co-about">
			<div class="row">
				<div >
					<h3>Data Diri #pemberiperubahan</h3>
					<blockquote class="dailyVerse">

                    <table>
					<tr>
						<td>Nama Lengkap</td>
						<td><?php echo " : "; echo $_SESSION['Nama'] ?></td>
					</tr>
					<tr>
						<td>Nama Pengguna</td>
						<td><?php echo " : "; echo $_SESSION['Nama_Pengguna'] ?></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><?php echo " : "; echo $_SESSION['email'] ?></td>
					</tr>
					<tr>
						<td>No.HP</td>
						<td><?php echo " : "; echo $_SESSION['No_hp'] ?></td>
					</tr>
							
					</blockquote>
					</table>
					
					
							
				</div>

			</div>
					<div class="kotakganti">
							<h3>Ganti Foto Profil</h3>
							<form action="upload.php" method="post" enctype="multipart/form-data">
							<input type="file" name="file" required="require">
							<input type="submit" class="prop" name="upload" value="Upload">
							<a><br>ukuran foto 500px*500px <br>max.1mb <br>jpg/png</a>
							</form>
					</div>
		</div>
		
	</div>

	<div class="container-wrap">
		<footer id="fh5co-footer" role="contentinfo">
			<div class="col-md-4 text-center">
				<h3>Institut Teknologi Sepuluh Nopember</h3>
			</div>
			<div class="col-md-4 text-center">
				<h2><a href="#">tuskul</a></h2>
			</div>
			<div class="col-md-4 text-center">
				<p>
					<ul class="fh5co-social-icons">
						<li><a href="#"><i class="icon-twitter2"></i></a></li>
						<li><a href="#"><i class="icon-facebook2"></i></a></li>
						<li><a href="#"><i class="icon-dribbble2"></i></a></li>
					</ul>
				</p>
			</div>
			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
					</p>
				</div>
			</div>
		</footer>
	</div><!-- END container-wrap -->
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

