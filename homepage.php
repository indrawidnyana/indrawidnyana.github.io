<?php
    require_once "koneksi.php";
    session_start();
    if (empty($_SESSION['Nama_Pengguna'])) {
        header("Location:index.php");
    }
    
?>



<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>tu.skul</title>



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

						<div id="fh5co-logo">
						<a href="homepage.php"><img src="logo/tu.png" width="150px" ></a>
						</div>

					</div>
					<div class="col-md-12 col-md-offset-0 text-center menu-1">
						<ul>
							<li class="active"><a href="homepage.php">Home</a></li>
							<li><a href="donasi_saya.php">Donasi Saya</a></li>
							<li class="has-dropdown">
								<a href="galangdana.html">Galang Dana</a>
								<ul class="dropdown">
									<li><a href="#">Mahasiswa</a></li>
									<li><a href="#">SMA</a></li>
									
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
		<aside id="fh5co-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/tra-nguyen-459276-unsplash.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 text-center">
				   				<div class="slider-text">
					   				<div class="slider-text-inner">
									   <h1>Selamat datang <?php echo $_SESSION['Nama_Pengguna']; ?></h1>
									   <h2>Sudah siap memberi perubahan hari ini ?</h2>
  									   <h1><b>DONASI SEKARANG !</b></h1>
											<p><a class="btn btn-primary btn-demo popup-vimeo" href="https://www.youtube.com/watch?v=k096O5M-c44"> <i class="icon-play4"></i> DONASI</a> 
												</p>
					   				</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/matt-ragland-02z1I7gv4ao-unsplash.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 text-center">
				   				<div class="slider-text">
					   				<div class="slider-text-inner">
					   					<h1>Let's Make A <b>Change</b></h1>
											<h2>Donasimu menentukan masa depan anak bangsa </h2>
											<p><a class="btn btn-primary btn-demo popup-vimeo" href="https://vimeo.com/channels/staffpicks/93951774"> <i class="icon-play4"></i> Watch Video</a> <a class="btn btn-primary btn-learn">Join us here! <i class="icon-arrow-right3"></i></a></p>
					   				</div>
					   			</div>
				   			</div>
				   		</div>
			   		</div>
			   	
			  	</ul>
		  	</div>
		</aside>
		<div id="fh5co-intro">
			<div class="row animate-box">
				<div class="col-md-12 col-md-offset-0 text-center">
					<h2>Ayo Donasi Sekarang. Jadilah #pemberiperubahan</h2>
				</div>
			</div>
		</div>
		<hr>

		<div id="fh5co-services" class="fh5co-light-grey">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Bantu siapa hari ini ?</h2>
					<p>Kami menyediakan layanan bantuan berupa dana yang dapat anda sumbangkan untuk adik-adik kita yang putus sekolah agar dapat melanjutkan kembali pendidikannya.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 animate-box">
					<div class="services">
						<a href="#" class="img-holder"><img class="img-responsive" src="images/img_bg_1.jpg"></a>
						<div class="desc">
							<h3><a href="#">Fina ingin bersekolah di SMAN 1 Jember</a></h3>
							<p>Bantu Fina dengan berdonasi agar dapat melanjutkan pendidikannya ke jenjang pendidikan SMA, yaitu pada sekolah impiannya di SMAN 1 Jember.</p>
							
						</div>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="services">
						<a href="#" class="img-holder"><img class="img-responsive" src="images/img_bg_2.jpg" alt="Free HTML5 Website Template by freehtml5.co"></a>
						<div class="desc">
							<h3><a href="#">Bantu Iqbal agar dapat bersekolah di sekolah favoritnya</a></h3>
							<p>Bantu Iqbal agar dapat melanjutkan sekolah di SMA favoritnya. Sekolah favoritnya adalah SMAN 1 Samarinda. Iqbal memiliki cita-cita yang sangat mulia yaitu menjadi seorang guru</p>
							
						</div>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="services">
						<a href="#" class="img-holder"><img class="img-responsive" src="images/img_bg_3.jpg" alt="Free HTML5 Website Template by freehtml5.co"></a>
						<div class="desc">
							<h3><a href="#">Kini Ria sudah dapat melanjutkan sekolahnya dan mendapat prestasi</a></h3>
							<p>Sekarang Ria sudah dapat melanjutkan sekolahnya dan ia juga dapat membuktikan bahwa ia dapat menjadi siswi yang berprestasi di SMA nya saat ini.</p>
							
						</div>
					</div>
				</div>
			</div>
		</div>

		
		<div id="fh5co-bible-verse">
			<div class="overlay"></div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row animate-box">
						<div class="owl-carousel owl-carousel-fullwidth">
							<div class="item">
								<div class="bible-verse-slide active text-center">
									<blockquote>
										<p>&ldquo;Kita harus menemukan waktu untuk berhenti dan berterima kasih kepada orang-orang yang telah membuat perbedaan dalam hidup kita.&rdquo;</p>
										<span>John F. Kennedy</span>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="bible-verse-slide active text-center">
									<blockquote>
										<p>&ldquo;Jika anda benar-benar bersyukur, apa yang anda lakukan? Anda akan suka berbagi.&rdquo;</p>
										<span>W. Clement Stone</span>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="bible-verse-slide active text-center">
									<blockquote>
										<p>&ldquo;Hanya ada dua cara untuk menjalani hidup anda. Salah satunya adalah seolah-olah ‘nothing is a miracle’. Yang kedua, seolah-olah segala sesuatu adalah keajaiban.&rdquo;</p>
										<span>Albert Einstein</span>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div id="fh5co-news" class="fh5co-light-grey">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Info Buat Kamu</h2>
					<p>informasi mengenai universitas dan sekolah di Indonesia.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 animate-box">
					<div class="news">
						<a href="#" class="img-holder"><img class="img-responsive" src="images/img-1.jpg" alt="Free HTML5 Website Template by freehtml5.co"></a>
						<div class="desc">
							<span class="date">March 30, 2017</span>
							<h3><a href="#">Universitas Indonesia</a></h3>
							<p>Universitas Indonesia disingkat sebagai UI, adalah sebuah perguruan tinggi di Indonesia. Kampus utamanya terletak di bagian Utara dari Depok, Jawa Barat tepat di perbatasan antara Depok dengan wilayah Jakarta Selatan, dan kampus utama lainnya terdapat di daerah Salemba di Jakarta Pusat.</p>
							
						</div>
					</div>
				</div>
				<div class="col-md-3 animate-box">
					<div class="news">
						<a href="#" class="img-holder"><img class="img-responsive" src="images/img-3.jpg" alt="Free HTML5 Website Template by freehtml5.co"></a>
						<div class="desc">
							<span class="date">March 30, 2017</span>
							<h3><a href="#">Institut Pertanian Bogor</a></h3>
							<p>Institut Pertanian Bogor adalah sebuah perguruan tinggi pertanian negeri yang berkedudukan di Bogor. Sebelum diresmikan pada tahun 1963, IPB adalah sebuah fakultas pertanian pada Universitas Indonesia.</p>
							
						</div>
					</div>
				</div>
				<div class="col-md-3 animate-box">
					<div class="news">
						<a href="#" class="img-holder"><img class="img-responsive" src="images/img-2.jpg" alt="Free HTML5 Website Template by freehtml5.co"></a>
						<div class="desc">
							<span class="date">March 30, 2017</span>
							<h3><a href="#">Universitas Negeri Malang</a></h3>
							<p>Institut Pertanian Bogor adalah sebuah perguruan tinggi pertanian negeri yang berkedudukan di Bogor. Sebelum diresmikan pada tahun 1963, IPB adalah sebuah fakultas pertanian pada Universitas Indonesia.</p>
							
						</div>
					</div>
				</div>
				<div class="col-md-3 animate-box">
					<div class="news">
						<a href="#" class="img-holder"><img class="img-responsive" src="images/img-4.jpg" alt="Free HTML5 Website Template by freehtml5.co"></a>
						<div class="desc">
							<span class="date">March 30, 2017</span>
							<h3><a href="#">Institut Teknologi Sepuluh Nopember</a></h3>
							<p>Institut Teknologi Sepuluh Nopember adalah perguruan tinggi negeri yang terletak di Surabaya. ITS awalnya didirikan oleh Yayasan Perguruan Tinggi Teknik yang diketuai oleh dr. Angka Nitisastro.</p>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- END container-wrap -->

	<div class="container-wrap">
		<footer id="fh5co-footer" role="contentinfo">
			<div class="col-md-4 text-center">
				<h3>Institut Teknologi Sepuluh Nopember Surabaya</h3>
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

