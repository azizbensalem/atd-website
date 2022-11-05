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
<style>
	@font-face {
		font-family: barlow_condensed;
		src: url(/fonts/barlow-condensed.semibold.ttf);
	}
	p {text-align: justify;}
	h1 {color: rgb(230,0,0); font-family: barlow_condensed; font-size: 35px!important;}
</style>
			<!-- 
			=============================================
				Theme Inner Banner
			============================================== 
			-->
			<div class="theme-inner-banner section-spacing" style="background: url('/images/home/accueil1.jpg') no-repeat center; background-size:cover;">
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
                    <div class="service-content">
					<div class="row">
						<div class="col-xl-6 col-lg-6 col-12">
							<h1 class="main-title">L’ATD, C’EST QUOI?</h1>
							<p>Puisque c’est important d’appartenir à une communauté solide, de prendre une 
							part active à la vie de sa profession, et de partager son amour du design et le 
							mettre en pratique, l’ATD se propose d’offrir un espace convivial, culturel, 
							dynamique et sérieux afin de permettre aux designers de se réunir autour 
							d’objectifs communs, d’évoluer ensemble, de valoriser leurs travaux, et de 
							garantir la continuité et l’avenir du design.</p>
							<p>L’ATD c’est aussi un espace de rencontre, d’échange, de partage et de débat 
							permettant de motiver les designers dans un esprit d’ouverture tout en garantissant 
							l’éthique et la dynamique du métier. </p><br>
						</div>
						<div class="col-xl-6 col-lg-6 col-12 pt-xl-5 pt-lg-5 pl-xl-5 pl-lg-5">
							<video width="100%;" controls>
								<source src="/videos/274736370_267074598779707_5908083012527899771_n.mp4" type="video/mp4">
							</video>
						</div>
						<div style="width:98%;margin-top:50px;margin-bottom:50px;"></div>
						<div class="col-xl-6 col-lg-6 col-12">
							<img src="/images/blog/designers.jpg" />
						</div>
						<div class="col-xl-6 col-lg-6 col-12 pl-xl-5 pl-lg-5">
							<h1 class="main-title" style="line-height:45px!important;">L’ATD, UNE ASSOCIATION AU SERVICE DU 
							DESIGN ET DES DESIGNERS</h1><br>
							<p>L’ATD est une association qui s’adresse aux designers, amoureux du design, qui souhaitent 
							se rassembler et évoluer et ce, dans un esprit d’ouverture et d’éthique. En effet, les adhérents 
							se voient offrir l’opportunité de valoriser leur travail et mettre en pratique leur connaissance 
							dans un environnement de confiance, ou l’appartenance communautaire et l’identité commune sont les 
							maitres-mots. </p>
                    	</div>
						<div style="width:98%;margin-top:50px;margin-bottom:50px;"></div>
						<div class="col-xl-7 col-lg-7 col-12">
							<h1 class="main-title">L’ATD A POUR OBJECTIFS DE :</h1>
							<ul>
								<li>- Rassembler les designers, valoriser leur statut et définir leurs objectifs 
								communs pour apporter une notoriété et une plus-value importante au design en 
								Tunisie et ailleurs.</li><br>
								<li>- Développer les compétences, illustrer la créativité, l’inventivité et la responsabilisation 
								des designers adhérents ou souhaitant adhérer, ce qui leur permettra de prendre conscience d’eux-mêmes 
								et du monde qui les entoure, de cultiver leur confiance en l’avenir, et transmettre l’amour de la 
								spécialité.</li><br>
								<li>- Créer des liens entre les designers qui verront donc offrir la chance de s’épanouir, de 
								collaborer et d’évoluer dans la solidarité, la complémentarité et la transparence, encadrés par 
								des tuteurs expérimentés et passionnés.</li><br>
								<li>- Promouvoir le design en Tunisie et créer des liens complémentaires entre les designers et les 
								professionnels afin de mieux les encadrer quant à la demande du marché et créer des relations 
								d’échange culturel et économique.</li><br>
								<li>- Montrer le rôle imminent du designer dans la société tout en mettant en valeur ses compétences 
								et démocratiser le design dans tous les secteurs de la société en lui donnant la place qu’il 
								mérite.</li><br>
								<li>- Déclencher la prise de conscience du designer sur le potentiel du design dans l’ouverture 
								et l’innovation de manière plus rapide et de façon plus stratégique.</li><br>

							</ul>
                    	</div>
						<div class="col-xl-5 col-lg-5 col-12 pl-xl-4 pl-lg-4">
							<img src="/images/blog/rejoindre.jpg" />
						</div>
						<div style="width:98%;margin-top:50px;margin-bottom:50px;"></div>
						<div class="col-xl-6 col-lg-6 col-12">
							<img src="/images/blog/qualite.jpg" />
						</div>
						<div class="col-xl-6 col-lg-6 col-12 pl-xl-5 pl-lg-5">
							<h1 class="main-title" style="line-height:45px!important;">LE DESIGN POUR LA QUALITÉ DE VIE</h1><br>
							<p>Le design se préoccupe d'humaniser le monde et de changer la qualité de vie de l’Homme, et c’est 
							justement la principale devise de l’ATD que celle-ci tend à affirmer, à appliquer et à faire profiter 
							à ses différents adhérents, étudiants soient-ils, enseignants ou professionnels. </p>
							<p>L’ATD offre de ce fait un cadre dynamique permettant d’imaginer l’avenir, de penser le monde, de 
							vivre des expériences et de réinventer des comportements autour du design. Ce projet est 
							particulier parce qu’il met en pratique les convictions des fondateurs et rallie les adhérents 
							autour d’une même et unique devise</p>
                    	</div>
						<div style="width:98%;margin-top:50px;margin-bottom:50px;"></div>
						<div class="col-xl-6 col-lg-6 col-12">
							<h1 class="main-title">NAISSANCE DE L’ATD</h1>
							<p>Devant l’absence d’organisme qui réunit les designers, et le manque de dynamisme constaté 
							autour du design, l’Alliance Tunisienne des Designers a vu le jour en 2012 et n’a cessé 
							depuis de se développer au moyen de travaux, d’évènements, de partenariats, de projets, 
							de stages, d’activités, de réunions et de formations.</p>
                    	</div>
						<div class="col-xl-6 col-lg-6 col-12 pl-xl-5 pl-lg-5">
							<img src="/images/blog/naissance.jpg" />
						</div>
						<div style="width:98%;margin-top:50px;margin-bottom:50px;"></div>
                    </div>
				</div> <!-- /.row -->
			</div> <!-- /.service-style-two -->

@endsection
