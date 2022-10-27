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
						</div>
						<div class="col-lg-4 col-12">
							<div class="project-tab">
								<ul class="nav nav-tabs">
								    <li class="nav-item">
								      <a class="nav-link active" data-toggle="tab" href="#info">Project Info</a>
								    </li>
								</ul>
								<!-- Tab panes -->
								<div class="tab-content">
								    <div id="info" class="tab-pane active">
								    	<ul>
											<li>
								    			<h6>Type du projet</h6>
								    			<p>{{$projects->type}}</p>
								    		</li>
								    		<li>
								    			<h6>Chef du projet</h6>
								    			<p>{{$projects->chef_project->firstname}}&nbsp;{{$projects->chef_project->lastname}}</p>
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
