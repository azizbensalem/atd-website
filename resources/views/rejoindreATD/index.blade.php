@extends('layouts.app2')

@section('menu')
<ul class="clearfix">
	<li ><a href="/">Accueil</a></li>
	<li><a href="/a-propos">À propos</a></li>
    <li class="active"><a href="/news">Rejoindre ATD</a></li>
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
			<div class="theme-inner-banner section-spacing" style="background: url('/images/home/accueil1.jpg') no-repeat center; background-size:cover;">
				<div class="overlay">
					<div class="container">
						<h2 class="title">Rejoindre l’ATD</h2>
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
						<div class="col-xl-6 col-lg-6 col-12">
							<div class="service-content">
								<h1 class="main-title" style="color: rgb(220,0,0);">REJOINDRE L’ATD</h1>
								<p>Devenir membre à l’ATD c’est l’occasion d’appartenir à une communauté
								solide qui permette de mettre en pratique son amour pour le design et son savoir-
								faire.</p>
								<p>En effet, les adhérents ont pour seul et unique intérêt l’amour du design, et
								c’est précisément pour cela que cet organisme se propose de les réunir et de
								valoriser ce secteur, tout en leur offrant les moyens de le faire.</p>
								<p>Parce que la force du collectif est primordiale pour avancer, et parce que le
								designer est capable d’améliorer la qualité de vie et le monde, l’ATD propose
								un espace de rassemblement pour mettre en pratique cette vision et mise sur ses
								adhérents pour avancer et évoluer.</p>
								<p>Par ailleurs, adhérer à l’ATD garanti un épanouissement communautaire, un
								développement associatif et une mobilisation des compétences et ce tant au
								niveau académique, universitaire que professionnel.</p>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-12 pt-lg-5 pt-xl-5">
							<img src="/images/home/rejoindre_atd2.jpg" />
						</div>
					</div>
			</div> <!-- /.service-style-two -->

@endsection
