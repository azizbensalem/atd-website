@extends('layouts.app2')

@section('menu')
<ul class="clearfix">
	<li ><a href="/">Accueil</a></li>
	<li class="active"><a href="/a-propos">À propos</a></li>
    <li><a href="/rejoindre_atd">Rejoindre ATD</a></li>
	<li><a href="/news">News</a></li>
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
			<div class="theme-inner-banner section-spacing" style="background: url() no-repeat center; background-size:cover;">
				<div class="overlay">
					<div class="container">
						<h2 class="title">À propos</h2>
					</div>
				</div> <!-- /.overlay -->
			</div> <!-- /.theme-inner-banner -->
			
	
			<!-- 
			=============================================
				Service Style Two
			============================================== 
			-->
			<div class="service-details section-spacing">
				<div class="container">
					<div class="row">
					<div class="col-xl-12 col-lg-12 col-12">
                    <div class="service-content">

                        <h3 class="main-title">Notre vision</h3><br>
                        <p>Le design se préoccupe d&#39;humaniser le monde et de changer la qualité de vie de
                        l’Homme, et c’est justement la principale devise de l’ATD que celle-ci tend à
                        affirmer, à appliquer et à faire profiter à ses différents adhérents, étudiants
                        soient-ils, enseignants ou professionnels.</p>
                        <p>L’ATD offre de ce fait un cadre dynamique permettant d’imaginer l’avenir, de
                        penser le monde, de vivre des expériences et de réinventer des comportements
                        autour du design. Ce projet est particulier parce qu’il met en pratique les
                        convictions des fondateurs et rallie les adhérents autour d’une même et unique
                        devise.</p><br>
                        <h3 class="main-title">Création</h3><br>
                        <p>Devant l’absence d’organisme qui réunit les designers, et le manque de
                        dynamisme constaté autour du design, l’Alliance Tunisienne des Designers a vu
                        le jour en 2012 et n’a cessé depuis de se développer au moyen de travaux,
                        d’évènements, de partenariats, de projets, de stages, d’activités, de réunions et
                        de formations.</p>
                    </div>
                    </div>
				</div> <!-- /.row -->
			</div> <!-- /.service-style-two -->

@endsection
