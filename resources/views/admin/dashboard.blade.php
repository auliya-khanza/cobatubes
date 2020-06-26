<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Yogya Trip</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--CSS============================================= -->
			<link rel="stylesheet" href="/css/linearicons.css">
			<link rel="stylesheet" href="/css/font-awesome.min.css">
			<link rel="stylesheet" href="/css/bootstrap.css">
			<link rel="stylesheet" href="/css/magnific-popup.css">
			<link rel="stylesheet" href="/css/animate.min.css">
			<link rel="stylesheet" href="/css/owl.carousel.css">
			<link rel="stylesheet" href="/css/main.css">
		</head>
		<body>
			<!-- start banner Area -->
			<section class="banner-area" id="home">
				<!-- Start Header Area -->
				<header class="default-header">
					<nav class="navbar navbar-expand-lg navbar-light">
						<div class="container">
							  <a class="navbar-brand" href="/">
								  <img src="/img/logo_.png" alt="">
							  </a>
							  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							    <span class="text-white lnr lnr-menu"></span>
							  </button>

							  <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
							    <ul class="navbar-nav">
									
									<!-- <li><a href="/">Tentang</a></li>									 -->
									<li><a href="{{url('/admin/objek_wisata')}}">Obyek Wisata</a></li>
									<li><a href="{{url('/admin/merchandise')}}">Merchandise</a></li>
									<!-- Dropdown -->
								    <li class="dropdown">
										
                                        @if(Auth::check())
                                        <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        Welcome {{ ucfirst(Auth()->user()->name) }} 
										</a>
										<div class="dropdown-menu">
										  <a class="dropdown-item" href="{{url('logout')}}">Log Out</a>
										</div>
                                        @else
                                        <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        Pengguna
										</a>
										<div class="dropdown-menu">
										  <a class="dropdown-item" href="{{url('register')}}">Sign Up</a>
                                          <a class="dropdown-item" href="{{url('login')}}">Login</a>
										</div>
									  </li>
                                      @endif
								</ul>
							    </ul>
							  </div>						
						</div>
					</nav>
				</header>
				<!-- End Header Area -->

		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--CSS============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">

			<section class="default-banner active-blog-slider">
					<div class="item-slider relative" style="background: url(img/image19.png);background-size: cover;">
						<div class="overlay" style="background: rgba(0,0,0,.3)"></div>
						<div class="container">
							<div class="row fullscreen justify-content-center align-items-center">
								<div class="col-md-10 col-12">
									<div class="banner-content text-center">
										<h4 class="text-white mb-20 text-uppercase">Discover the Colorful Yogyakarta</h4>
										<h1 class="text-uppercase text-white">New Adventure</h1>
										
										<a href="#" class="text-uppercase header-btn">Discover Now</a>
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="item-slider relative" style="background: url(img/slider2.jpg);background-size: cover;">
						<div class="overlay" style="background: rgba(0,0,0,.3)"></div>
						<div class="container">
							<div class="row fullscreen justify-content-center align-items-center">
								<div class="col-md-10 col-12">
									<div class="banner-content text-center">
										<h4 class="text-white mb-20 text-uppercase">Discover the Colorful Yogyakarta</h4>
										<h1 class="text-uppercase text-white">New Trip</h1>
										
										<a href="#" class="text-uppercase header-btn">Discover Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item-slider relative" style="background: url(img/image101.jpg);background-size: cover;">
						<div class="overlay" style="background: rgba(0,0,0,.3)"></div>
						<div class="container">
							<div class="row fullscreen justify-content-center align-items-center">
								<div class="col-md-10 col-12">
									<div class="banner-content text-center">
										<h4 class="text-white mb-20 text-uppercase">Discover the Colorful Yogyakarta</h4>
										<h1 class="text-uppercase text-white">New Experience</h1>
										
										<a href="#" class="text-uppercase header-btn">Discover Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

			<!-- Start about Area -->
			<section class="section-gap info-area" id="about">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-40 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Tentang Yogyakarta</h1>
									<p>Kota penuh kenangan.</p>
							</div>
						</div>
					</div>					
					<div class="single-info row mt-40">
						<div class="col-lg-6 col-md-12 mt-120 text-center no-padding info-left">
							<div class="info-thumb">
								<img src="img/tugu.jpeg" class="img-fluid" alt="">
							</div>
						</div>
						<div class="col-lg-6 col-md-12 no-padding info-rigth">
							<div class="info-content">
								<p>
									Daerah Istimewa Yogyakarta adalah Daerah Istimewa setingkat provinsi di Indonesia yang merupakan peleburan Negara Kesultanan Yogyakarta dan Negara Kadipaten Paku Alaman. Daerah Istimewa Yogyakarta terletak di bagian selatan Pulau Jawa, dan berbatasan dengan Provinsi Jawa Tengah dan Samudera Hindia. Daerah Istimewa yang memiliki luas 3.185,80 km2 ini terdiri atas satu kotamadya, dan empat kabupaten, yang terbagi lagi menjadi 78 kecamatan, dan 438 desa/kelurahan. Menurut sensus penduduk 2010 memiliki populasi 3.452.390 jiwa dengan proporsi 1.705.404 laki-laki, dan 1.746.986 perempuan, serta memiliki kepadatan penduduk sebesar 1.084 jiwa per km2.									
								</p>
								<br>
								<p>
									Penyebutan nomenklatur Daerah Istimewa Yogyakarta yang terlalu panjang menimbulkan penyingkatan nomenklatur menjadi DI Yogyakarta atau DIY. Daerah Istimewa Yogyakarta sering dihubungkan dengan Kota Yogyakarta sehingga secara kurang tepat sering disebut dengan Jogja, Yogya, Yogyakarta, Jogjakarta. Walau secara geografis merupakan daerah setingkat provinsi terkecil kedua setelah DKI Jakarta, Daerah Istimewa ini terkenal di tingkat nasional, dan internasional, terutama sebagai tempat tujuan wisata andalan setelah Provinsi Bali. Daerah Istimewa Yogyakarta mengalami beberapa bencana alam besar termasuk bencana gempa bumi pada tanggal 27 Mei 2006, erupsi Gunung Merapi selama Oktober-November 2010, serta erupsi Gunung Kelud, Jawa Timur pada tanggal 13 Februari 2014.								
								</p>
								</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End about Area -->

			<!-- Start gallery Area -->
			<section class="gallery-area" id="gallery">
				<div class="container-fluid">
					<div class="row no-padding">
						<div class="active-gallery">
                        <div class="item single-gallery">
								<img src="img/fs1.jpg" alt="">
							</div>	
							<div class="item single-gallery">
								<img src="img/fs2.jpg" alt="">
							</div>	
							<div class="item single-gallery">
								<img src="img/fs3.jpg" alt="">
							</div>	
							<div class="item single-gallery">
								<img src="img/fs4.jpg" alt="">
							</div>	
							<div class="item single-gallery">
								<img src="img/fs5.jpg" alt="">
							</div>	
							<div class="item single-gallery">
								<img src="img/fs6.jpg" alt="">
							</div>																		
						</div>
					</div>
				</div>	
			</section>
			<!-- End gallery Area -->
			<br>
			<br>
			<!-- Start Video Area -->
			<section class="video-area pt-40 pb-40">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="video-content">
						<a href="https://www.youtube.com/watch?v=1V_4-f5Ocy4" class="play-btn"><img src="img/play-btn.png" alt=""></a>
						<div class="video-desc">
							<h3 class="h2 text-white text-uppercase">Tertarik dengan keindahan kota Yogya?</h3>
							<h4 class="text-white">Youtube video will appear in popover</h4>
						</div>
					</div>
				</div>
			</section>
			<!-- Start Video Area -->
			
			
			<!-- Start logo Area -->
			<section class="logo-area">
				<div class="container">
					<div class="row">
						
					</div>
				</div>	
			</section>
			<!-- End logo Area -->
			
			<!-- JS Script -->
			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/slick.js"></script>
			<script src="js/jquery.counterup.min.js"></script>
			<script src="js/waypoints.min.js"></script>		
			<script src="js/main.js"></script>	
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>
									Annida Rizki | Auliya Khanza | Ba'auliyaul Afifah | Maheswari Paramita
								</p>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            		<p class="footer-text">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
            		<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">

										<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

										<div class="d-flex flex-row">

											<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">


				                            	<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
				                            	<div style="position: absolute; left: -5000px;">
													<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
												</div>
				                          	
											<!-- <div class="col-lg-4 col-md-4">
												<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
											</div>  -->
										</div>		
										<div class="info"></div>
										</form>
								</div>
								</div>
						</div>						
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a>
								</div>
							</div>
						</div>							
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->			

			<script src="/js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="/js/vendor/bootstrap.min.js"></script>
			<script src="/js/jquery.ajaxchimp.min.js"></script>
			<script src="/js/jquery.magnific-popup.min.js"></script>	
			<script src="/js/owl.carousel.min.js"></script>			
			<script src="/js/jquery.sticky.js"></script>
			<script src="/js/slick.js"></script>
			<script src="/js/jquery.counterup.min.js"></script>
			<script src="/js/waypoints.min.js"></script>		
			<script src="/js/main.js"></script>	
	</body>
</html>