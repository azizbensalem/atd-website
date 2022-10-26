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
			<div class="theme-inner-banner section-spacing" style="background: url({{asset($projects->image)}}) no-repeat center; background-size:cover;">
				<div class="overlay">
					<div class="container">
						<h2 class="title">{{$projects->title}}</h2>
						<ul>
							<li><a href="/">Accueil</a></li>
							<li>.</li>
							<li><a href="/nos-projets">Nos projets</a></li>
							<li>.</li>
							<li>{{$projects->title}}</li>
						</ul>
					</div>
				</div> <!-- /.overlay -->
			</div> <!-- /.theme-inner-banner -->
			
			
			<!--
			=====================================================
				Project Details
			=====================================================
			-->
			<div class="project-details section-spacing">
				<div class="container">
					<div class="row project-details-info">
						<div class="col-lg-8 col-12">
							<h5 class="inner-title">{{$projects->title}}</h5>
							<p>{!! nl2br(htmlspecialchars($projects->description, ENT_NOQUOTES)) !!}</p>
							<!-- <ul class="list-text clearfix">
								<li>Rapaciously seize tive infomediaries</li>
								<li>Financial Services Consulting</li>
								<li>Business ServicesConsulting</li>
								<li>Surface Transport & Logistics Consulting</li>
								<li>Consumer Products Consulting</li>
								<li>Consumer Products Consulting</li>
								<li>Travel and AviationConsulting</li>
							</ul> -->
						</div>
						<div class="col-lg-4 col-12">
							<div class="project-tab">
								<ul class="nav nav-tabs">
								    <li class="nav-item">
								      <a class="nav-link active" data-toggle="tab" href="#info">Project Info</a>
								    </li>
								    <li class="nav-item">
								      <a class="nav-link" data-toggle="tab" href="#quickContact">QuickContact</a>
								    </li>
								</ul>
								<!-- Tab panes -->
								<div class="tab-content">
								    <div id="info" class="tab-pane active">
								    	<ul>
								    		<li>
								    			<h6>Clients</h6>
								    			<p>Apache Consult Trusted Client</p>
								    		</li>
								    		<li>
								    			<h6>Categories</h6>
								    			<p>Investment, Trading</p>
								    		</li>
								    		<li>
								    			<h6>Completed</h6>
								    			<p>August 01, 2015</p>
								    		</li>
								    		<li>
								    			<h6>Project Budgets</h6>
								    			<p>$25,0000</p>
								    		</li>
								        </ul>
								    </div>
								    <div id="quickContact" class="tab-pane fade">
								    	<ul>
									      	<li>
									      		<h6>Email us</h6>
									      		<p>info@negozuonsultancy.com</p>
									      	</li>
									      	<li>
									      		<h6>Call us</h6>
									      		<p>(088) 987 555 123</p>
									      	</li>
									      	<li>
									      		<h6>Completed</h6>
									      		<p>August 01, 2015</p>
									      	</li>
									      	<li>
									      		<h6>Project Budgets</h6>
									      		<p>$25,0000</p>
									      	</li>
								      </ul>
								    </div>
								</div>
							</div> <!-- /.project-tab -->
						</div>
					</div> <!-- /.project-details-info -->
				</div> <!-- /.container -->
			</div> <!-- /.project-details -->
@endsection
