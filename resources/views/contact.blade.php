@extends('layouts.app2')

@section('menu')
<ul class="clearfix">
	<li ><a href="/">Accueil</a></li>
	<li><a href="/about-us">À propos</a></li>
	<li><a href="/news">News</a></li>
	<li><a href="/evenements">Événements à venir</a></li>
	<li><a href="/contact">Contact</a></li>
	<li class="active"><a href="/register">Adhésion</a></li>
</ul>
@endsection
@section('content')
			<!-- 
			=============================================
				Theme Inner Banner
			============================================== 
			-->
			<div class="theme-inner-banner section-spacing" style="background: url(images/home/inner-banner-5.jpg) no-repeat center; background-size:cover;">
				<div class="overlay">
					<div class="container">
						<h2 class="title">Contact</h2>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li>.</li>
							<li><a href="#">Pages</a></li>
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
						<h2>We alway here to helps you</h2>
						<p>Proactively envisioned multimedia based expertise and cross-media growth strategies. Seamlessly visualize quality intellectual capital without superior collaboration and idea-sharing. Holistically pontificate installed base portals after potentialities.</p>
					</div>
					<div class="address">
						<ul class="clearfix">
							<li>
								<i class="flaticon-map"></i>
								<p>1010 Avenue of the Moon <br> New York, NY 10018 </p>
							</li>
							<li>
								<i class="flaticon-clock"></i>
								<p>Mon - Sat 8.00 - 18.00 <br>Sunday CLOSED</p>
							</li>
							<li>
								<i class="flaticon-phone-call"></i>
								<p>+1 628 123 4000 <br>+023 628 123 7000</p>
							</li>
							<li>
								<i class="flaticon-email"></i>
								<p>negozu@consulting.com <br>consultancy@negozu.com</p>
							</li>
						</ul>
					</div>
					<form action="inc/sendemail.php" class="theme-form-one form-validation" autocomplete="off">
						<div class="row">
							<div class="col-lg-4 col-sm-6 col-12"><input type="text" placeholder="Name" name="name"></div>
							<div class="col-lg-4 col-sm-6 col-12"><input type="email" placeholder="Email" name="email"></div>
							<div class="col-lg-4 col-sm-6 col-12"><input type="text" placeholder="Phone" name="phone"></div>
							<div class="col-lg-12 col-sm-6 col-12"><input type="text" placeholder="Subject" name="sub"></div>
							<div class="col-12"><textarea placeholder="Enter Your Word..." name="message"></textarea></div>
							<div class="col-12"><button class="theme-button-one">Send</button></div>
						</div>
					</form>
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
