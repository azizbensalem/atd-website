@extends('layouts.app2')
@section('menu')
<ul class="clearfix">
	<li ><a href="/">Accueil</a></li>
	<li><a href="/#about-us">À propos</a></li>
	<li class="active"><a href="/news">News</a></li>
    <li><a href="/nos-projets">Nos projets</a></li>
	<li><a href="/evenements">Événements à venir</a></li>
	<li><a href="/contact">Contact</a></li>
	<li><a href="/register">Adhésion</a></li>
</ul>
@endsection
@section('content')
			<!-- 
			=============================================
				Theme Inner Banner
			============================================== 
			-->
			<div class="theme-inner-banner section-spacing" style="background: url(images/home/inner-banner-4.jpg) no-repeat center; background-size:cover;">
				<div class="overlay">
					<div class="container">
						<h2 class="title">News Single</h2>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li>.</li>
							<li><a href="#">Pages</a></li>
							<li>.</li>
							<li>Blog details</li>
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
									<div class="date">May 29, 2018</div>
									<h3>{{$news->title}}</h3>
								</div> <!-- /.title -->
								<div class="image-box" style="text-align: -webkit-center;"><img src="{{asset($news->image)}}" alt=""></div>
								<p class="upper-text">{{$news->description}}</p>
							</div> <!-- /.single-classic-news -->
							<div class="comment-section">
								<h4 class="inner-section-title">1 Comment</h4>
								<div class="single-comment clearfix">
									<div class="author">
										<img src="/images/blog/32.jpg" alt="">
										<h6>John Doue</h6>
										<div class="date">29 May , 2018</div>
									</div> <!-- /.author -->
									<div class="comment">
										<p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from Brady who was busy with three boys of his own. It’s time to play the digital divide with additional t’s time to light the lights. Before any of the tech jargon, design chops, or programming skills related.</p>
										<ul class="social-icon">
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
										</ul>
										<a href="#" class="theme-button-one">Reply Now</a>
									</div> <!-- /.comment -->
								</div> <!-- /.single-comment -->
								
							</div> <!-- /.comment-section -->

							<div class="comment-reply-form">
								<h4 class="inner-section-title">Leave A Reply</h4>

								<form action="#" class="theme-form-one">
									<div class="row">
										<div class="col-md-6 order-md-last">
											<input type="email" placeholder="Email">
											<textarea placeholder="Enter Your Word..."></textarea>
										</div>
										<div class="col-md-6 order-md-first">
											<input type="text" placeholder="Name">
											<input type="text" placeholder="Phone">
											<input type="text" placeholder="Subject">
											<button class="theme-button-one">Post Comment</button>
										</div>
									</div>
								</form>
							</div> <!-- /.comment-reply-form -->
						</div> <!-- /.col- -->


						
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</div> <!-- /.our-portfolio -->
@endsection