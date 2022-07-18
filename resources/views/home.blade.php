@extends('layouts.app2')
@section('menu')
<ul class="clearfix">
	<li class="active"><a href="/">Accueil</a></li>
	<li><a href="#about-us">À propos</a></li>
	<li><a href="#news">News</a></li>
	<li><a href="#project">Nos projets</a></li>
	<li><a href="#event">Événements à venir</a></li>
	<li><a href="/contact">Contact</a></li>
	<li><a href="/register">Adhésion</a></li>
</ul>
@endsection
@section('content')
			<!-- 
			=============================================
				Theme Main Banner
			============================================== 
			-->
			<div id="theme-main-banner" class="banner-two section-spacing">
				<div data-src="images/home/slide-3.jpg">
					<div class="camera_caption">
						<div class="container">
							<h1 class="wow fadeInUp animated">First-class <br>business consultant</h1>
							<p class="wow fadeInUp animated" data-wow-delay="0.2s">Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate</p>
							<a href="about.html" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.278s">Read more</a>

							<div class="consultation-form">
								<form action="#" class="wow fadeInRight animated" data-wow-delay="0.3s">
									<h3>Free Consultation</h3>
									<input type="text" placeholder="First Name">
									<input type="text" placeholder="Phone">
									<input type="email" placeholder="Email">
									<button class="theme-button-one">Send Request</button>
								</form>
							</div> <!-- /.consultation-form -->
						</div> <!-- /.container -->
					</div> <!-- /.camera_caption -->
				</div>
				<div data-src="images/home/slide-4.jpg">
					<div class="camera_caption">
						<div class="container">
							<h1 class="wow fadeInUp animated">We are <br>the Consulting</h1>
							<p class="wow fadeInUp animated" data-wow-delay="0.2s">Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate</p>
							<a href="about.html" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.278s">Read more</a>

							<div class="consultation-form">
								<form action="#" class="wow fadeInRight animated" data-wow-delay="0.3s">
									<h3>Free Consultation</h3>
									<input type="text" placeholder="First Name">
									<input type="text" placeholder="Phone">
									<input type="email" placeholder="Email">
									<button class="theme-button-one">Send Request</button>
								</form>
							</div> <!-- /.consultation-form -->
						</div> <!-- /.container -->
					</div> <!-- /.camera_caption -->
				</div>
			</div> <!-- /#theme-main-banner -->
			

			<!-- 
			=============================================
				About Company
			============================================== 
			-->
			<div id="about-us" class="about-compnay section-spacing">
				<div class="container">
					<div class="theme-title-one text-center">
						<h2 class="title">Une association culturelle</h2>
					</div> 
					<div class="row">
						<div class="col-lg-12 col-12 wow fadeInLeft animated">
							<div class="text-wrapper">
								<p>L’Alliance Tunisienne des Designers est une association crée en Mai 2012 par un groupe de designers soucieux de concevoir une structure tunisienne où se réunissent les professionnels du métier avec ses différentes spécialités.</p>
								<p> L’ATD est un organisme qui se veut représentatif de la profession qui vise à mettre en œuvre des actions design utiles pour le développement local et ouvertes à l’international.</p>
								<!-- <a href="/about-us" class="theme-button-one">Voir plus</a> -->
							</div>
						</div>
					</div>
				</div> 
			</div> 

			<!--
			=====================================================
				Theme Counter Section
			=====================================================
			-->
			<div id="counter" class="theme-counter-section section-spacing">
				<div class="overlay">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-6">
								<div class="single-counter">
									<i class="icon flaticon-target"></i>
									<div class="number"><span class="timer" data-from="0" data-to="7" data-speed="1200" data-refresh-interval="5">0</span></div>
									<p>Le nombre des membres du bureau exécutif</p>
								</div> <!-- /.single-counter -->
							</div> <!-- .col- -->
							<div class="col-md-6 col-6">
								<div class="single-counter">
									<i class="icon flaticon-suitcase"></i>
									<div class="number"><span class="timer" data-from="0" data-to="100" data-speed="1200" data-refresh-interval="5">0</span>+</div>
									<p>Le nombre d’adhérents</p>
								</div> <!-- /.single-counter -->
							</div> <!-- .col- -->
							<!-- <div class="col-md-6 col-6">
								<div class="single-counter">
									<i class="icon flaticon-trophy"></i>
									<div class="number"><span class="timer" data-from="0" data-to="1703" data-speed="1200" data-refresh-interval="5">0</span>+</div>
									<p>Mortgage Award Winnings</p>
								</div> 
							</div> -->
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.theme-counter-section -->

			<!--
			=====================================================
				Our News 
			=====================================================
			-->
			<div id="news" class="our-blog center-text-blog section-spacing">
				<div class="container">
					<div class="theme-title-one text-center">
						<h2 class="title">News</h2>
					</div> <!-- /.theme-title-one -->
					<div class="latest-news-slider">
						<div class="item">
							<div class="single-blog-meta">
								<div class="img-box">
									<img src="{{ asset('images/blog/1.jpg') }}" alt="">
									<a href="#" class="date">25 May 2018</a>
								</div>
								<div class="text">
									<h6 class="title"><a href="blog-details.html">Within the construction industry as their overdraft</a></h6>
									<p>Our approach is collaborative and adaptive. want clients to be immersed in the project and creative process. Through activities like </p>
								</div> <!-- /.text -->
							</div> <!-- /.single-blog-meta -->
						</div> <!-- /.item -->
						<div class="item">
							<div class="single-blog-meta">
								<div class="img-box">
									<img src="{{ asset('images/blog/2.jpg') }}" alt="">
									<a href="#" class="date">21 May 2018</a>
								</div>
								<div class="text">
									<h6 class="title"><a href="blog-details.html">Strategic and commercial approach with issues</a></h6>
									<p>Our approach is collaborative and adaptive. want clients to be immersed in the project and creative process. Through activities like </p>
								</div> <!-- /.text -->
							</div> <!-- /.single-blog-meta -->
						</div> <!-- /.item -->
						<div class="item">
							<div class="single-blog-meta">
								<div class="img-box">
									<img src="{{ asset('images/blog/3.jpg') }}" alt="">
									<a href="#" class="date">15 May 2018</a>
								</div>
								<div class="text">
									<h6 class="title"><a href="blog-details.html">Seven weeks working ‘pro bono’ with a charity</a></h6>
									<p>Our approach is collaborative and adaptive. want clients to be immersed in the project and creative process. Through activities like </p>
								</div> <!-- /.text -->
							</div> <!-- /.single-blog-meta -->
						</div> <!-- /.item -->
					</div> <!-- /.latest-news-slider -->
					<div class="text-center clearfix" style="padding-top: 50px;">
						<a href="/news" class="theme-button-one">Voir plus</a>
					</div> <!-- /.view-all-service -->
				</div> <!-- /.container -->
			</div> <!-- /.our-blog -->

			<!--
			=====================================================
				Latest Project
			=====================================================
			-->
			<div id="project" class="latest-project bg-color section-spacing">
				<div class="container">
					<div class="theme-title-one text-center">
						<h2 class="title">Nos derniers projets</h2>
					</div> <!-- /.theme-title-one -->
					<div class="row">
						<div class="col-lg-3 col-sm-6 col-12">
							<div class="single-block">
								<img src="images/portfolio/1.jpg" alt="">
								<div class="overlay">
									<div>
										<h6><a href="/nos-projets/detail">Thought Leadership</a></h6>
										<span>Current Project</span>
									</div>
								</div> <!-- /.overlay -->
							</div> <!-- /.single-block -->
						</div> <!-- /.col- -->
						<div class="col-lg-3 col-sm-6 col-12">
							<div class="single-block">
								<img src="images/portfolio/2.jpg" alt="">
								<div class="overlay">
									<div>
										<h6><a href="/nos-projets/detail">Thought Leadership</a></h6>
										<span>Current Project</span>
									</div>
								</div> <!-- /.overlay -->
							</div> <!-- /.single-block -->
						</div> <!-- /.col- -->
						<div class="col-lg-3 col-sm-6 col-12">
							<div class="single-block">
								<img src="images/portfolio/3.jpg" alt="">
								<div class="overlay">
									<div>
										<h6><a href="/nos-projets/detail">Thought Leadership</a></h6>
										<span>Current Project</span>
									</div>
								</div> <!-- /.overlay -->
							</div> <!-- /.single-block -->
						</div> <!-- /.col- -->
						<div class="col-lg-3 col-sm-6 col-12">
							<div class="single-block">
								<img src="images/portfolio/4.jpg" alt="">
								<div class="overlay">
									<div>
										<h6><a href="/nos-projets/detail">Thought Leadership</a></h6>
										<span>Current Project</span>
									</div>
								</div> <!-- /.overlay -->
							</div> <!-- /.single-block -->
						</div> <!-- /.col- -->
						<div class="col-lg-3 col-sm-6 col-12">
							<div class="single-block">
								<img src="images/portfolio/5.jpg" alt="">
								<div class="overlay">
									<div>
										<h6><a href="/nos-projets/detail">Thought Leadership</a></h6>
										<span>Current Project</span>
									</div>
								</div> <!-- /.overlay -->
							</div> <!-- /.single-block -->
						</div> <!-- /.col- -->
						<div class="col-lg-3 col-sm-6 col-12">
							<div class="single-block">
								<img src="images/portfolio/6.jpg" alt="">
								<div class="overlay">
									<div>
										<h6><a href="/nos-projets/detail">Thought Leadership</a></h6>
										<span>Current Project</span>
									</div>
								</div> <!-- /.overlay -->
							</div> <!-- /.single-block -->
						</div> <!-- /.col- -->
						<div class="col-lg-3 col-sm-6 col-12">
							<div class="single-block">
								<img src="images/portfolio/7.jpg" alt="">
								<div class="overlay">
									<div>
										<h6><a href="/nos-projets/detail">Thought Leadership</a></h6>
										<span>Current Project</span>
									</div>
								</div> <!-- /.overlay -->
							</div> <!-- /.single-block -->
						</div> <!-- /.col- -->
						<div class="col-lg-3 col-sm-6 col-12">
							<div class="single-block">
								<img src="images/portfolio/8.jpg" alt="">
								<div class="overlay">
									<div>
										<h6><a href="/nos-projets/detail">Thought Leadership</a></h6>
										<span>Current Project</span>
									</div>
								</div> <!-- /.overlay -->
							</div> <!-- /.single-block -->
						</div> <!-- /.col- -->
					</div> <!-- /.row -->

					<div class="view-all-project text-center clearfix"><a href="/nos-projets" class="theme-button-one">Voir plus</a></div> <!-- /.view-all-project -->
				</div> <!-- /.container -->
			</div> <!-- /.latest-project -->

			<!-- 
			=============================================
				Service Style Two
			============================================== 
			-->
			<div id="event" class="service-style-two section-spacing">
				<div class="container">
					<div class="theme-title-one text-center">
						<h2 class="title">Événements à venir</h2>
					</div> <!-- /.theme-title-one -->
					<div class="service-slider">
						<div class="item">
							<div class="single-block">
								<div class="img-box">
									<img src="images/service/1.jpg" alt="">
									<div class="overlay">
										<a data-fancybox href="https://www.youtube.com/embed/r-AuLm7S3XE?rel=0&amp;showinfo=0" class="play-button"><i class="flaticon-unlink"></i></a>
									</div> <!-- /.overlay -->
								</div> <!-- /.img-box -->
								<div class="text">
									<div class="srvc-name">
										<h5><a href="service-details.html">Business Consulting</a></h5>
										<span>We are Consulting Company</span>
									</div> <!-- /.srvc-name -->
								</div> <!-- /.text -->
							</div> <!-- /.single-block -->
						</div> <!-- /.item -->
						<div class="item">
							<div class="single-block">
								<div class="img-box">
									<img src="images/service/2.jpg" alt="">
									<div class="overlay">
										<a data-fancybox href="https://www.youtube.com/embed/r-AuLm7S3XE?rel=0&amp;showinfo=0" class="play-button"><i class="flaticon-unlink"></i></a>
									</div> <!-- /.overlay -->
								</div> <!-- /.img-box -->
								<div class="text">
									<div class="srvc-name">
										<h5><a href="service-details.html">IT Consulting</a></h5>
										<span>We are Consulting Company</span>
									</div> <!-- /.srvc-name -->
								</div> <!-- /.text -->
							</div> <!-- /.single-block -->
						</div> <!-- /.item -->
						<div class="item">
							<div class="single-block">
								<div class="img-box">
									<img src="images/service/3.jpg" alt="">
									<div class="overlay">
										<a data-fancybox href="https://www.youtube.com/embed/r-AuLm7S3XE?rel=0&amp;showinfo=0" class="play-button"><i class="flaticon-unlink"></i></a>
									</div> <!-- /.overlay -->
								</div> <!-- /.img-box -->
								<div class="text">
									<div class="srvc-name">
										<h5><a href="service-details.html">Lawyers Consulting</a></h5>
										<span>We are Consulting Company</span>
									</div> <!-- /.srvc-name -->
								</div> <!-- /.text -->
							</div> <!-- /.single-block -->
						</div> <!-- /.item -->
						<div class="item">
							<div class="single-block">
								<div class="img-box">
									<img src="images/service/1.jpg" alt="">
									<div class="overlay">
										<a data-fancybox href="https://www.youtube.com/embed/r-AuLm7S3XE?rel=0&amp;showinfo=0" class="play-button"><i class="flaticon-unlink"></i></a>
									</div> <!-- /.overlay -->
								</div> <!-- /.img-box -->
								<div class="text">
									<div class="srvc-name">
										<h5><a href="service-details.html">Financial Consulting</a></h5>
										<span>We are Consulting Company</span>
									</div> <!-- /.srvc-name -->
								</div> <!-- /.text -->
							</div> <!-- /.single-block -->
						</div> <!-- /.item -->
						<div class="item">
							<div class="single-block">
								<div class="img-box">
									<img src="images/service/2.jpg" alt="">
									<div class="overlay">
										<a data-fancybox href="https://www.youtube.com/embed/r-AuLm7S3XE?rel=0&amp;showinfo=0" class="play-button"><i class="flaticon-unlink"></i></a>
									</div> <!-- /.overlay -->
								</div> <!-- /.img-box -->
								<div class="text">
									<div class="srvc-name">
										<h5><a href="service-details.html">Products Consulting</a></h5>
										<span>We are Consulting Company</span>
									</div> <!-- /.srvc-name -->
								</div> <!-- /.text -->
							</div> <!-- /.single-block -->
						</div> <!-- /.item -->
						<div class="item">
							<div class="single-block">
								<div class="img-box">
									<img src="images/service/3.jpg" alt="">
									<div class="overlay">
										<a data-fancybox href="https://www.youtube.com/embed/r-AuLm7S3XE?rel=0&amp;showinfo=0" class="play-button"><i class="flaticon-unlink"></i></a>
									</div> <!-- /.overlay -->
								</div> <!-- /.img-box -->
								<div class="text">
									<div class="srvc-name">
										<h5><a href="service-details.html">Trades &amp; Stocks</a></h5>
										<span>We are Consulting Company</span>
									</div> <!-- /.srvc-name -->
								</div> <!-- /.text -->
							</div> <!-- /.single-block -->
						</div> <!-- /.item -->
					</div> <!-- /.service-slider -->
					<div class="view-all-service clearfix">
						<a href="/evenements" class="theme-button-one">Voir plus</a>
					</div> <!-- /.view-all-service -->
				</div> <!-- /.container -->
			</div> <!-- /.service-style-two -->
		

			<!--
			=====================================================
				Partner Section One
			=====================================================
			-->
			<div class="partner-section-one">
				<div class="overlay">
					<div class="container">
						<div class="partner-slider">
							<div class="item"><img src="{{ asset('images/logo/p-1.png') }}" alt=""></div>
							<div class="item"><img src="{{ asset('images/logo/p-2.png') }}" alt=""></div>
							<div class="item"><img src="{{ asset('images/logo/p-3.png') }}" alt=""></div>
							<div class="item"><img src="{{ asset('images/logo/p-4.png') }}" alt=""></div>
							<div class="item"><img src="{{ asset('images/logo/p-5.png') }}" alt=""></div>
						</div>
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.partner-section-one -->
@endsection
			