@extends('layouts.app2')
@section('menu')
<ul class="clearfix">
	<li ><a href="/">Accueil</a></li>
	<li><a href="/a-propos">À propos</a></li>
	<li><a href="/rejoindre_atd">Rejoindre ATD</a></li>
	<li><a href="/#news">News</a></li>
	<li><a href="/#project">Nos projets</a></li>
	<li><a href="/#event">Événements à venir</a></li>
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
						<h2 class="title">S'inscrire</h2>
						<ul>
							<li><a href="/">Accueil</a></li>
						</ul>
					</div>
				</div> <!-- /.overlay -->
			</div> <!-- /.theme-inner-banner -->

        
<div class="container">
    <div class="row justify-content-center section-spacing">
        <div class="col-md-8 ">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="firstname" class="col-md-4 col-form-label text-md-end">{{ __('Prénom') }}</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="row mb-3">
                            <label for="lastname" class="col-md-4 col-form-label text-md-end">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="telephone" class="col-md-4 col-form-label text-md-end">{{ __('Numéro de téléphone') }}</label>

                            <div class="col-md-6">
                                <input id="telephone" type="tel" class="form-control @error('telephone') is-invalid @enderror" name="telephone" required autocomplete="telephone" autofocus>
                                @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="specialite" class="col-md-4 col-form-label text-md-end">{{ __('Votre spécialité') }}</label>

                            <div class="col-md-6">
                                <select id="specialite" type="text" class="form-control @error('specialite') is-invalid @enderror" name="specialite" value="{{ old('specialite') }}" required autocomplete="specialite" autofocus>
                                    <option name="specialite" value="Design espace/ Architecture d'intérieur">Design espace/ Architecture d'intérieur</option>
                                    <option name="specialite" value="Design image/Design graphique">Design image/Design graphique</option>
                                    <option name="specialite" value="Design produit">Design produit</option>
                                    <option name="specialite" value="Design textile">Design textile</option>
                                    <option name="specialite" value="Design industriel">Design industriel</option>
                                    <option name="specialite" value="Design mobilier">Design mobilier</option>
                                    <option name="specialite" value="Audiovisuel">Audiovisuel</option>
                                    <option name="specialite" value="Autres">Autres</option>
                                </select>
                                @error('specialite')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="diplome" class="col-md-4 col-form-label text-md-end">{{ __('Dans quelle institution avez-vous eu votre diplôme / suivez vos études') }}</label>

                            <div class="col-md-6">
                                <input id="diplome" type="text" class="form-control @error('diplome') is-invalid @enderror" name="diplome" value="{{ old('diplome') }}" required autocomplete="diplome" autofocus>

                                @error('diplome')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="activitepro" class="col-md-4 col-form-label text-md-end">{{ __('Votre activité professionnelle') }}</label>

                            <div class="col-md-6">
                                <select id="activitepro" type="text" class="form-control @error('activitepro') is-invalid @enderror" name="activitepro" value="{{ old('activitepro') }}" required autocomplete="activitepro" autofocus>
                                    <option name="activitepro" value="Etudiant(e)">Etudiant(e)</option>
                                    <option name="activitepro" value="Designer en Freelance">Designer en Freelance</option>
                                    <option name="activitepro" value="Fondateur d'une boite de design">Fondateur d'une boite de design</option>
                                    <option name="activitepro" value="Salarié(e)">Salarié(e)</option>
                                    <option name="activitepro" value="Enseignant(e)">Enseignant(e)</option>
                                    <option name="activitepro" value="Entrepreneur, vous avez votre propre marque">Entrepreneur, vous avez votre propre marque</option>
                                    <option name="activitepro" value="Designer reconverti dans un autre domaine">Designer reconverti dans un autre domaine</option>
                                    <option name="activitepro" value="A la recherche d'emploi">A la recherche d'emploi</option>
                                </select>
                                @error('activitepro')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="lieutravail" class="col-md-4 col-form-label text-md-end">{{ __('Indiquez le nom du lieu où vous travaillez') }}</label>

                            <div class="col-md-6">
                                <input id="lieutravail" type="text" class="form-control @error('lieutravail') is-invalid @enderror" name="lieutravail" value="{{ old('lieutravail') }}" autocomplete="lieutravail" autofocus>

                                @error('lieutravail')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                        </div>

                        <div class="row mb-3">
                            <label for="paiement" class="col-md-4 col-form-label text-md-end">Si vous n'avez pas encore payé votre adhésion pour l'année 2022 (année administrative) d'un montant de 30dt, vous pouvez choisir l'une des options suivantes.</label>

                            <div class="col-md-6">
                                <select id="paiement" type="text" class="form-control @error('paiement') is-invalid @enderror" name="paiement" value="{{ old('paiement') }}" required autocomplete="paiement" autofocus>
                                    <option name="paiement" value="Faire un virement et envoyer ensuite le justificatif par mail à : atd.designers.tn@gmail.com">Faire un virement et envoyer ensuite le justificatif par mail à : atd.designers.tn@gmail.com(e)</option>
                                    <option name="paiement" value="Prendre contact avec un responsable en appelant le 95 991 992 ou en envoyant un mail à : atd.designers.tn@gmail.com">Prendre contact avec un responsable en appelant le 95 991 992 ou en envoyant un mail à : atd.designers.tn@gmail.com</option>
                                    <option name="paiement" value="J'ai déjà payé mon adhésion pour l'année 2022">J'ai déjà payé mon adhésion pour l'année 2022</option>
                                </select>
                                @error('paiement')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="photo" class="col-md-4 col-form-label text-md-end">{{ __('Photo') }}</label>

                            <div class="col-md-6">
                                <input id="photo" type="file" class="@error('photo') is-invalid @enderror" name="photo" value="{{ old('photo') }}" required autocomplete="photo" autofocus>

                                @error('photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="fdiplome" class="col-md-4 col-form-label text-md-end">{{ __('Votre diplôme en design') }}</label>

                            <div class="col-md-6">
                                <input id="fdiplome" type="file" class="@error('fdiplome') is-invalid @enderror" name="fdiplome" value="{{ old('fdiplome') }}" required autocomplete="fdiplome" autofocus>

                                @error('fdiplome')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmer le mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                            <button type="submit" class="theme-button-one">
                                    {{ __("S'inscrire") }}
                            </button>

                            @if (Route::has('register'))
                                    <a class="btn btn-link" href="{{ route('login') }}">
                                        {{ __("Login") }}
                                    </a>
                            @endif
                            </div>
                        </div>
                    </form>
    </div>
</div>
@endsection
