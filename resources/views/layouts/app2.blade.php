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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
            <header class="theme-main-header theme-header-one">
				<div class="top-header">
					<div class="container">
						<nav class="menuTop">
							<ul>
								@guest
									<li class="float-right"><a href="/register" class="textStyle">Adhérer à l'ATD</a></li>
									<li class="float-right"><a href="/login" class="textStyle">Se connecter</a></li>
								@else
									<li class="float-right"><a href="/member/projects" class="textStyle">Dashboard</a></li>
									<li class="float-right">
										<a href="{{ route('logout') }}" class="textStyle" onclick="event.preventDefault(); 
										document.getElementById('logout-form').submit();">Se déconnecter</a>
									</li>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
										@csrf
									</form>
								@endguest
							</ul>
						</nav>
					</div> <!-- /.container -->
				</div> <!-- /.top-header -->

				<div class="theme-menu-wrapper">
					<div class="container">
						<div class="inner-wrapper clearfix">
							<!-- ================= Logo ==================== -->
							<div class="logo"><a href="/"><img src="/images/logo/atd.png" alt="logo"></a></div>
							<!-- ============== Menu Warpper ================ -->
					   		<div class="menu-wrapper float-right">
					   			<nav id="mega-menu-holder" class="clearfix">
								   @yield('menu')
								</nav> <!-- /#mega-menu-holder -->
					   		</div> <!-- /.menu-wrapper -->
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
			<footer class="theme-footer-one">
				<div class="container">
					<div class="top-footer">
						<div class="logo"><a href="/"><img src="{{asset('images/logo/atd-footer.png')}}" alt="logo"></a></div>
						<ul class="clearfix">
							<li>
								<i class="icon flaticon-smartphone"></i>
								<h6>Appelez-nous :</h6>
								<a href="#">+ 216 55 149 149</a>
							</li>
							<li>
								<i class="icon flaticon-message"></i>
								<h6>Envoyez-nous un email à :</h6>
								<a href="#">atd.designers.tn@gmail.com</a>
							</li>
						</ul>
					</div> <!-- /.top-footer -->
				</div> <!-- /.container -->

				<div class="main-footer-widget">
					<div class="container">
						<div class="row">
							<div class="col-lg-3 col-sm-6">
								<h6 class="title">Adresse</h6>
								<p>Route EL Ain Km 3.5 3042 Sfax, Tunisie</p>
							</div> <!-- /.about-widget -->

							<div class="col-lg-4 col-sm-6">
								<h6 class="title">À propos</h6>
								<p>L’Alliance Tunisienne des Designers est une association crée en Mai 2012 par un groupe de designers soucieux de concevoir une structure tunisienne où se réunissent les professionnels du métier avec ses différentes spécialités.</p>
							</div> <!-- /.about-widget -->

							<div class="col-lg-2 col-sm-6 list-widget">
								<h6 class="title">Lien externe</h6>
								<ul>
									<li><a href="/">Accueil</a></li>
									<li><a href="/about-us">À propos</a></li>
									<li><a href="/">Rejoindre ATD</a></li>
									<li><a href="/news">News</a></li>
									<li><a href="/nos-projets">Nos projets</a></li>
									<li><a href="/evenements">Événements à venir</a></li>
									<li><a href="/contact">Contact</a></li>
								</ul>
							</div> <!-- /.list-widget -->

							<div class="col-lg-3 col-md-6 col-12 subscribe-widget">
								<h6 class="title">Réseaux sociaux</h6>
								<ul class="social-icon">
									<li><a href="https://www.facebook.com/atdtunisie"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
								</ul>
							</div> <!-- /.subscribe-widget -->
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div> <!-- /.main-footer-widget -->

				<div class="bottom-footer">
					<div class="container clearfix">
						<p class="float-left">Copyright 2022 ATD</p>
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
	    <script src="{{ asset('vendor/Camera-master/scripts/camera.js') }}"></script>
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