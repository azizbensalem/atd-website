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
			<div class="theme-inner-banner section-spacing" style="background: url(images/home/event.jpg) no-repeat center; background-size:cover;">
				<div class="overlay">
					<div class="container">
						<h2 class="title">Événements à venir</h2>
						<ul>
							<li><a href="index.html">Accueil</a></li>
							<li>.</li>
							<li>Événements à venir</li>
						</ul>
					</div>
				</div> <!-- /.overlay -->
			</div> <!-- /.theme-inner-banner -->
			
			


			<!-- 
			=============================================
				Service Style Two
			============================================== 
			-->
			<div class="service-style-two section-spacing">
				<div class="container">
					<div class="row">
					@foreach ($events as $event)
						<div class="col-lg-4 col-md-6">
							<div class="single-block">
								<div class="img-box">
									<img src="{{ asset($event->photo) }}" alt="{{$event->nom}}">
								</div> <!-- /.img-box -->
								<div class="text">
									<div class="srvc-name">
										<h5><a href="/event/detail/{{$event->id}}">{{$event->nom}}</a></h5>
									</div> <!-- /.srvc-name -->
									<!-- <p>{{$event->contenu}}</p> -->
								</div> <!-- /.text -->
							</div> <!-- /.single-block -->
						</div> <!-- /.item -->
						@endforeach
					</div> <!-- /.row -->
                    <!-- <div class="theme-pagination">
								<ul class="clearfix">
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
								</ul>
							</div>
				    </div>  -->
                    <!-- /.container -->
			</div> <!-- /.service-style-two -->

@endsection
