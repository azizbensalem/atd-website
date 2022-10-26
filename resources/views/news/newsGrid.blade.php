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
<style>
	</style>
			<!-- 
			=============================================
				Theme Inner Banner
			============================================== 
			-->
			<div class="theme-inner-banner section-spacing" style="background: url('/images/home/accueil1.jpg') no-repeat center; background-size:cover;">
				<div class="overlay">
					<div class="container">
						<h2 class="title">News</h2>
						<ul>
							<li><a href="/">Accueil</a></li>
							<li>.</li>
							<li>News</li>
						</ul>
					</div>
				</div> <!-- /.overlay -->
			</div> <!-- /.theme-inner-banner -->
			
			


			<!--
			=====================================================
				News Grid
			=====================================================
			-->
			<div class="our-blog blog-inner-page section-spacing">
				<div class="container">
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-12">
						<div class="row">
						@foreach ($news as $new)
								<div class="col-md-6">
									<div class="single-blog-meta">
										<div class="img-box">
											<img src="{{ asset($new->image) }}" style="max-height: 554px!important;" alt="{{ $new->title }}">
											<a href="#" class="date">{{date_format($new->created_at, "d M Y")}}</a>
										</div>
										<div class="text">
											<h6 class="title"><a href="/news/detail/{{$new->id}}">{{ $new->title }}</a></h6>
										</div> <!-- /.text -->
									</div> <!-- /.single-blog-meta -->
								</div>
						@endforeach
						</div>
						<span>{{$news->links()}}</span>
							<!-- <div class="theme-pagination">
								<ul class="clearfix">
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
								</ul>
							</div> -->
						</div>


						
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</div> <!-- /.our-portfolio -->
@endsection
