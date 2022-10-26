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
						<h2 class="title">Login</h2>
						<ul>
							<li><a href="/">Accueil</a></li>
						</ul>
					</div>
				</div> <!-- /.overlay -->
			</div> <!-- /.theme-inner-banner -->

<div class="container">
    <div class="row justify-content-center section-spacing">
        <div class="col-md-8">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="theme-button-one">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <!-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié') }}
                                    </a> -->
                                    <a class="btn btn-link" href="{{ route('register') }}">
                                        {{ __("S'inscrire") }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@endsection
