@extends('layouts.app2')
@section('menu')
<ul class="clearfix">
	<li ><a href="/">Accueil</a></li>
	<li><a href="/a-propos">À propos</a></li>
	<li><a href="/rejoindre_atd">Rejoindre ATD</a></li>
	<li class="active"><a href="/news">News</a></li>
    <li><a href="/nos-projets">Nos projets</a></li>
	<li><a href="/evenements">Événements à venir</a></li>
	<li><a href="/contact">Contact</a></li>
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
						<h2 class="title">{{$news->title}}</h2>
						<ul>
							<li><a href="index.html">Accueil</a></li>
							<li>.</li>
							<li><a href="#">News</a></li>
							<li>.</li>
							<li>{{$news->title}}</li>
						</ul>
					</div>
				</div> <!-- /.overlay -->
			</div> <!-- /.theme-inner-banner -->
			
			
			<!--
			=====================================================
				News Details
			=====================================================
			-->
			<div class="news-classic news-details section-spacing">
				<div class="container">
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-12">
							<div class="single-classic-news">
								<div class="title clearfix">
									<div class="date">{{date_format($news->created_at, "d M Y")}}</div>
									<h3>{{$news->title}}</h3>
								</div> <!-- /.title -->
								<div class="image-box" style="text-align: -webkit-center;"><img src="{{asset($news->image)}}" alt="{{$news->title}}"></div>
								<p class="upper-text">{!! nl2br(htmlspecialchars($news->description, ENT_NOQUOTES)) !!}</p>
							</div> <!-- /.single-classic-news -->
						</div> <!-- /.col- -->		
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</div> <!-- /.our-portfolio -->
@endsection