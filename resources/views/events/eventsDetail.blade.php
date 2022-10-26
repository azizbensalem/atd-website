@extends('layouts.app2')

@section('menu')
<ul class="clearfix">
	<li ><a href="/">Accueil</a></li>
	<li><a href="/a-propos">À propos</a></li>
	<li><a href="/rejoindre_atd">Rejoindre ATD</a></li>
	<li><a href="/news">News</a></li>
	<li><a href="/nos-projets">Nos projets</a></li>
	<li class="active"><a href="/evenements">Événements à venir</a></li>
	<li><a href="/contact">Contact</a></li>
</ul>
@endsection

@section('content')
			<!-- 
			=============================================
				Theme Inner Banner
			============================================== 
			-->
			<div class="theme-inner-banner section-spacing" style="background: url({{asset($events->photo)}}) no-repeat center; background-size:cover;">
				<div class="overlay">
					<div class="container">
						<h2 class="title">{{ $events->nom }}</h2>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li>.</li>
							<li><a href="#">Evenement à venir</a></li>
							<li>.</li>
							<li>{{ $events->nom }}</li>
						</ul>
					</div>
				</div> <!-- /.overlay -->
			</div> <!-- /.theme-inner-banner -->


			<!-- 
			=============================================
				Service Details
			============================================== 
			-->
			<div class="service-details section-spacing">
				<div class="container">
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-12">
							<div class="service-content">
								<img src="images/home/13.jpg" alt="" class="cover-img">
								<h3 class="main-title">{{ $events->nom }}</h3>
								<p>{!! nl2br(htmlspecialchars($events->contenu, ENT_NOQUOTES)) !!}</p>
							</div> <!-- /.service-content -->
						</div> <!-- /.col- -->
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</div> <!-- /.service-details -->
@endsection
