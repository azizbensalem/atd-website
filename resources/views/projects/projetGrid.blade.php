@extends('layouts.app2')

@section('menu')
<ul class="clearfix">
	<li ><a href="/">Accueil</a></li>
	<li><a href="/a-propos">À propos</a></li>
	<li><a href="/rejoindre_atd">Rejoindre ATD</a></li>
	<li><a href="/news">News</a></li>
    <li class="active"><a href="/nos-projets">Nos projets</a></li>
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
			<div class="theme-inner-banner section-spacing" style="background: url(images/home/projets.jpg) no-repeat center; background-size:cover;">
				<div class="overlay">
					<div class="container">
						<h2 class="title">Nos projets</h2>
						<ul>
							<li><a href="/">Accueil</a></li>
							<li>.</li>
							<li>Nos projets</li>
						</ul>
					</div>
				</div> <!-- /.overlay -->
			</div> <!-- /.theme-inner-banner -->
			
			


			<!--
			=====================================================
				Latest Project
			=====================================================
			-->
			<div class="latest-project section-spacing">
				<div class="container">
					<div class="row">
						@foreach ($projects as $project)
							<div class="col-lg-3 col-sm-6 col-12">
								<div class="single-block">
									<img src="{{ asset($project->image) }}" alt="">
									<div class="overlay">
										<div>
											<h6><a href="/nos-projets/detail/{{$project->id}}">{{ $project->title }}</a></h6>
											<span>Current Project</span>
										</div>
									</div> <!-- /.overlay -->
								</div> <!-- /.single-block -->
							</div> <!-- /.col- -->
						@endforeach
					</div> <!-- /.row -->
				</div> <!-- /.container -->
				<!-- <div class="theme-pagination text-center">
					<ul class="clearfix">
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
					</ul>
				</div> -->
			</div> <!-- /.latest-project -->
@endsection
