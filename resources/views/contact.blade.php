@extends('layouts.app2')

@section('menu')
<ul class="clearfix">
	<li ><a href="/">Accueil</a></li>
	<li><a href="/a-propos">À propos</a></li>
	<li><a href="/rejoindre_atd">Rejoindre ATD</a></li>
	<li><a href="/#news">News</a></li>
	<li><a href="/#project">Nos projets</a></li>
	<li><a href="/#event">Événements à venir</a></li>
	<li class="active"><a href="/contact">Contact</a></li>
</ul>
@endsection
@section('content')
			<!-- 
			=============================================
				Theme Inner Banner
			============================================== 
			-->
			<div class="theme-inner-banner section-spacing" style="background: url('/images/home/accueil1.jpg') no-repeat center; background-size:cover;">
				<div class="overlay">
					<div class="container">
						<h2 class="title">Contact</h2>
						<ul>
							<li><a href="/">Accueil</a></li>
							<li>.</li>
							<li>Contact</li>
						</ul>
					</div>
				</div> <!-- /.overlay -->
			</div> <!-- /.theme-inner-banner -->
			
			


			<!--
			=====================================================
				Contact us
			=====================================================
			-->
			<div class="contact-us-page section-spacing">
				<div class="container">
					<div class="title">
						<h2>Nous sommes toujours là pour vous aider</h2>
						<!-- <p>Proactively envisioned multimedia based expertise and cross-media growth strategies. Seamlessly visualize quality intellectual capital without superior collaboration and idea-sharing. Holistically pontificate installed base portals after potentialities.</p> -->
					</div>
					<div class="address">
						<ul class="clearfix" style="margin-left: 20%!important;">
							<li>
								<i class="flaticon-map"></i>
								<p>Route EL Ain Km 3.5<br>Sfax 3042, Tunisie</p>
							</li>
							<li>
								<i class="flaticon-phone-call"></i>
								<p>Appelez-nous :<br>+ 216 55 149 149</p>
							</li>
							<li>
								<i class="flaticon-email"></i>
								<p>Envoyez-nous un email à :<br>atd.designers.tn@gmail.com</p>
							</li>
						</ul>
					</div>
				</div> <!-- /.container -->
				<!--Contact Form Validation Markup -->
				<!-- Contact alert -->
				<div class="alert-wrapper" id="alert-success">
					<div id="success">
						<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
						<div class="wrapper">
			               	<p>Your message was sent successfully.</p>
			             </div>
			        </div>
			    </div> <!-- End of .alert_wrapper -->
			    <div class="alert-wrapper" id="alert-error">
			        <div id="error">
			           	<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
			           	<div class="wrapper">
			               	<p>Sorry!Something Went Wrong.</p>
			            </div>
			        </div>
			    </div> <!-- End of .alert_wrapper -->
			</div> <!-- /.contact-us-page -->


			<!--
			=====================================================
				Google Map
			=====================================================
			-->
			<!-- Google Map -->
			<!-- <div class="google-map"><div class="map-canvas"></div></div> -->
			
@endsection
