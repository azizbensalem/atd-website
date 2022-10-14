@extends('layouts.app2')
@section('menu')
<ul class="clearfix">
	<li class="active"><a href="/">Accueil</a></li>
	<li><a href="/a-propos">À propos</a></li>
	<li><a href="/rejoindre_atd">Rejoindre ATD</a></li>
	<li><a href="#news">News</a></li>
	<li><a href="#project">Nos projets</a></li>
	<li><a href="#event">Événements à venir</a></li>
	<li><a href="/contact">Contact</a></li>
</ul>
@endsection
@section('content')
			<!-- 
			=============================================
				Theme Main Banner
			============================================== 
			-->
			<div id="theme-main-banner" class="banner-two section-spacing">
			<div data-src="images/home/accueil.jpg">
					<div class="camera_caption">
						<div class="container">
						<h1 class="wow fadeInUp animated">Alliance tunisienne des designers</h1>
							<p class="wow fadeInUp animated" data-wow-delay="0.2s">L’Alliance Tunisienne des Designers est une association crée en Mai 2012 par un groupe de designers soucieux de concevoir une structure tunisienne où se réunissent les professionnels du métier avec ses différentes spécialités.</p>
							<a href="about.html" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.278s">Read more</a>
						</div> <!-- /.container -->
					</div> <!-- /.camera_caption -->
				</div>
				<div data-src="images/home/accueil.jpg">
					<div class="camera_caption">
						<div class="container">
						<h1 class="wow fadeInUp animated">Alliance tunisienne des designers</h1>
							<p class="wow fadeInUp animated" data-wow-delay="0.2s">L’Alliance Tunisienne des Designers est une association crée en Mai 2012 par un groupe de designers soucieux de concevoir une structure tunisienne où se réunissent les professionnels du métier avec ses différentes spécialités.</p>
							<a href="about.html" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.278s">Read more</a>
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
						<h2 class="title">À propos</h2>
					</div> 
					<div class="row">
						<div class="col-lg-12 col-12 wow fadeInLeft animated">
							<div class="text-wrapper">
								<h3 class="main-title">Notre vision</h3><br>
								<p>Le design se préoccupe d&#39;humaniser le monde et de changer la qualité de vie de
								l’Homme, et c’est justement la principale devise de l’ATD que celle-ci tend à
								affirmer, à appliquer et à faire profiter à ses différents adhérents, étudiants
								soient-ils, enseignants ou professionnels...</p>
							</div><br>
							<a href="/a-propos" class="theme-button-one">Voir plus</a>
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
				<div class="overlay" style="padding: 50px;">
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
					@foreach ($news as $new)
						@continue($loop->iteration == 0)
							<div class="item">
								<div class="single-blog-meta">
									<div class="img-box">
										<img src="{{ asset($new->image) }}" alt="{{$new->title}}">
										<a href="#" class="date">{{date_format($new->created_at, "d M Y")}}</a>
									</div>
									<div class="text">
										<h6 class="title"><a href="/news/detail/{{$new->id}}">{{$new->title}}</a></h6>
									</div> <!-- /.text -->
								</div> <!-- /.single-blog-meta -->
							</div> <!-- /.item -->
						@break($loop->iteration == 6)
					@endforeach
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
					@foreach ($projects as $project)
						@continue($loop->iteration == 0)
						<div class="col-lg-3 col-sm-6 col-12">
							<div class="single-block">
								<img src="{{ asset($project->image) }}" alt="{{$project->title}}">
								<div class="overlay">
									<div>
										<h6><a href="/nos-projets/detail/{{$project->id}}">{{$project->title}}</a></h6>
									</div>
								</div> <!-- /.overlay -->
							</div> <!-- /.single-block -->
						</div> <!-- /.col- -->
						@break($loop->iteration == 8)
					@endforeach
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
					@foreach ($events as $event)
						@continue($loop->iteration == 0)
						<div class="item">
							<div class="single-block">
								<div class="img-box">
									<img src="{{ asset($event->photo) }}" alt="{{$event->nom}}">
									<!-- <div class="overlay">
										<a data-fancybox href="https://www.youtube.com/embed/r-AuLm7S3XE?rel=0&amp;showinfo=0" class="play-button"><i class="flaticon-unlink"></i></a>
									</div>  -->
									<!-- /.overlay -->
								</div> <!-- /.img-box -->
								<div class="text">
									<div class="srvc-name">
										<h5><a href="/event/detail/{{$event->id}}">{{$event->nom}}</a></h5>
										<!-- <span>We are Consulting Company</span> -->
									</div> <!-- /.srvc-name -->
								</div> <!-- /.text -->
							</div> <!-- /.single-block -->
						</div> <!-- /.item -->
						@break($loop->iteration == 6)
					@endforeach
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
			<!-- <div class="partner-section-one">
				<div class="overlay">
					<div class="container">
						<div class="partner-slider">
							<div class="item"><img src="{{ asset('images/logo/p-1.png') }}" alt=""></div>
							<div class="item"><img src="{{ asset('images/logo/p-2.png') }}" alt=""></div>
							<div class="item"><img src="{{ asset('images/logo/p-3.png') }}" alt=""></div>
							<div class="item"><img src="{{ asset('images/logo/p-4.png') }}" alt=""></div>
							<div class="item"><img src="{{ asset('images/logo/p-5.png') }}" alt=""></div>
						</div>
					</div> 
				</div> 
			</div>  -->
@endsection
			