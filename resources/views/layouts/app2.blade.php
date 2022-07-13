<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- For Window Tab Color -->
		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="#151515">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#151515">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#151515">
		<title>Alliance Tunisienne des Designers</title>
		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="{{ asset('images/fav-icon/icon.png') }}">
		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
		<!-- Theme-Color css -->
		<link rel="stylesheet" id="jssDefault" href="{{ asset('css/color.css') }}">

	</head>

	<body>
		<div class="main-page-wrapper">

			<!-- ===================================================
				Loading Transition
			==================================================== -->
			<div id="loader-wrapper">
				<div id="loader"></div>
			</div>
			

			<!-- 
			=============================================
				Theme Header
			============================================== 
			-->
            <header class="theme-main-header theme-header-two">
				<div class="top-header bg-color">
					<div class="container clearfix">
						<p class="float-left email-us">Envoyez-nous un email à : <a href="mailto:contact@atd.com">info@negozuonsultancy.com</a></p>
						<p class="float-right call-us">Appelez-nous pour toute question : <a href="tel:77 000 000">77 000 000</a></p>
					</div> <!-- /.container -->
				</div> <!-- /.top-header -->

				<div class="middle-header">
					<div class="container clearfix">
						<!-- ================= Logo ==================== -->
						<div class="logo"><a href="index.html"><img src="{{ asset('images/logo/atd.png') }}" alt="atd-logo"></a></div>

						<ul class="our-address clearfix">
							<li>
								<i class="icon flaticon-map"></i>
								<p>Avenue ----<br>Sfax, <span>Tunisie</span> </p>
							</li>
							<li>
								<i class="icon flaticon-clock"></i>
								<p>Lundi - <span>Samedi 8.00 - 18.00</span> <br>Dimanche FERMÉ</p>
							</li>
							<li>
								<i class="icon flaticon-phone-call"></i>
								<p><a href="#">77 000 000</a> <br>Appelez-nous</p>
							</li>
						</ul>
					</div>
				</div> <!-- /.middle-header -->

				<div class="theme-menu-wrapper">
					<div class="container">
						<div class="inner-wrapper clearfix">
							<!-- ============== Menu Warpper ================ -->
					   		<div class="menu-wrapper float-left">
					   			<nav id="mega-menu-holder" class="clearfix">
                                   @yield('menu')
								</nav> <!-- /#mega-menu-holder -->
					   		</div> <!-- /.menu-wrapper -->

					   		<ul class="social-icon float-right">
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
							</ul>
						</div> <!-- /.inner-wrapper -->
					</div> <!-- /.container -->
				</div> <!-- /.theme-menu-wrapper -->
			</header> <!-- /.theme-main-header -->

			
            <div>
                @yield('content')
            </div>

            <!--
			=====================================================
				Footer
			=====================================================
			-->
			<footer class="theme-footer-two">
				<div class="main-footer-widget">
					<div class="container">
						<div class="row">
							<div class="col-lg-3 col-sm-6 about-widget">
								<div class="logo"><a href="index.html"><img src="{{ asset('images/logo/atd.png') }}" alt="atd-logo"></a></div>
								<p>Donald M. Palmer 2595 Pearlman Avenue Sudbury, <span>MA 01776</span> </p>
								<ul class="social-icon">
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
								</ul>
							</div> <!-- /.about-widget -->

							<div class="col-lg-2 col-sm-6 list-widget">
								<h6 class="title">Extra links</h6>
								<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="about.html">About Us</a></li>
									<li><a href="service-v1.html">Services</a></li>
									<li><a href="#">Cases</a></li>
									<li><a href="blog-classic.html">News</a></li>
									<li><a href="project-grid.html">Portfolio</a></li>
									<li><a href="contact.html">Contacts</a></li>
								</ul>
							</div> <!-- /.list-widget -->

							<div class="col-lg-4 col-sm-6 twitter-widget">
								<h6 class="title">Latest Tweets</h6>
								<ul>
									<li class="clearfix">
										<div class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></div>
										<p>Starting a new website? Don't this Ultimate <a href="#">#WordPress and #SEO</a> Setup Guide… <a href="#">https://t.co/C8OO98cA5e</a></p>
										<div class="date"><i class="icon flaticon-clock"></i> 20 hours ago</div>
									</li>
									<li class="clearfix">
										<div class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></div>
										<p>When you have terrible metrics on your #website, expect to have lesser <a href="#">#conversion rates</a></p>
										<div class="date"><i class="icon flaticon-clock"></i> 20 hours ago</div>
									</li>
								</ul>
							</div> <!-- /.twitter-widget -->

							<div class="col-lg-3 col-sm-6 subscribe-widget">
								<h6 class="title">Subscribe Us</h6>
								<form action="#">
									<input type="email" placeholder="Email Address">
									<button><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
								</form>
								<img src="images/home/map.png" alt="">
								
							</div> <!-- /.subscribe-widget -->
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div> <!-- /.main-footer-widget -->

				<div class="bottom-footer">
					<div class="container clearfix">
						<p class="float-left">Copyright 2022 ATD – All Right Reserved</p>
						<!-- <p class="float-right"></p> -->
					</div>
				</div> <!-- /.bottom-footer -->
			</footer> <!-- /.theme-footer -->
			

	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</button>
			
		<!-- Optional JavaScript _____________________________  -->

    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    	<!-- jQuery -->
		<script src="{{ asset('vendor/jquery.2.2.3.min.js') }}"></script>
		<!-- Popper js -->
		<script src="{{ asset('vendor/popper.js/popper.min.js') }}"></script>
		<!-- Bootstrap JS -->
		<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
		<!-- Style-switcher  -->
		<script src="{{ asset('vendor/jQuery.style.switcher.min.js') }}"></script>
		<!-- Camera Slider -->
		<script src="{{ asset('vendor/Camera-master/scripts/jquery.mobile.customized.min.js') }}"></script>
	    <script src="{{ asset('vendor/Camera-master/scripts/jquery.easing.1.3.js') }}"></script> 
	    <script src="{{ asset('vendor/Camera-master/scripts/camera.min.js') }}"></script>
	    <!-- menu  -->
		<script src="{{ asset('vendor/menu/src/js/jquery.slimmenu.js') }}"></script>
		<!-- WOW js -->
		<script src="{{ asset('vendor/WOW-master/dist/wow.min.js') }}"></script>
		<!-- owl.carousel -->
		<script src="{{ asset('vendor/owl-carousel/owl.carousel.min.js') }}"></script>
		<!-- js count to -->
		<script src="{{ asset('vendor/jquery.appear.js') }}"></script>
		<script src="{{ asset('vendor/jquery.countTo.js') }}"></script>
		<!-- Fancybox -->
		<script src="{{ asset('vendor/fancybox/dist/jquery.fancybox.min.js') }}"></script>

		<!-- Theme js -->
		<script src="{{ asset('js/theme.js') }}"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>