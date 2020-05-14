



<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>tu.skul&mdash;galang-dana </title>
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
						<div id="fh5co-logo"><a href="index.html"><img src="logo/tu.png" width="150px" ></a></div>
					</div>
					<div class="col-md-12 col-md-offset-0 text-center menu-1">
						<ul>
								<li><a href="homepage.php">Home</a></li>
								<li><a href="donasi_saya.php">Donasi Saya</a></li>
								<li class="has-dropdown">
									<a href="galdan.php">Galang Dana</a>
									<ul class="dropdown">
										<li><a href="galdan.php">Mahasiswa</a></li>
										<li><a href="galdan.php">SMA</a></li>
										
									</ul>
								</li>
								<li><a href="inbox.php">Inbox</a></li>
								<li class="has-dropdown">
									<a href="profil.php">Akun</a>
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
		<div id="fh5co-news">
								<?php 
                                if(isset($_GET['pesan'])){
                                    if($_GET['pesan']=="gagal"){
                                        echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
                                    }
                                }
                                ?>
                                <link rel="stylesheet" href="style.css">
                                    <div class="kotak_login2">

                                    <p class="tega">LOGIN</p>
                            
                                    <form action="cek_login.php" method="post">
                                        <center><label><b>Nama Pengguna</b></label></center>
                                        <input type="text" name="Nama" class="form_login" placeholder="Username .." required="required">
                            
                                        <center><label><b>Kata Sandi</b></label></center>
                                        <input type="password" name="sandi" class="form_login" placeholder="Password .." required="required">
                            
                                        <input type="submit" class="tombol_login" value="MASUK" >
                            
                                        <br/>
                                        <br/>
                                        <center>
                                            <p class="link">belum punya akun ?<a href="add.php"> daftar disini</a></p>
                                        </center>
                                    </form>
            
                                    </div>

	</div><!-- END container-wrap -->

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

