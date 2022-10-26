@extends('layouts.app2')

@section('menu')
<ul class="clearfix">
	<li ><a href="/">Accueil</a></li>
	<li><a href="/about-us">À propos</a></li>
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
			<div class="theme-inner-banner section-spacing" style="background: url({{asset($projects->image)}}) no-repeat center; background-size:cover;">
				<div class="overlay">
					<div class="container">
						<h2 class="title">Formulaire de participation</h2>
						<h3 class="title">{{$projects->title}}</h3>
					</div>
				</div> <!-- /.overlay -->
			</div> <!-- /.theme-inner-banner -->
			
	
			<!-- 
			=============================================
				Service Style Two
			============================================== 
			-->
			<div class="service-style-two section-spacing">
				<div class="container">
					<div class="row" style="justify-content: center;">
					<div class="col-md-8">
                    @if(Session::has('success'))
                      <div class="alert alert-success mt-1 mb-1">
                        {{Session::get('success')}}
                      </div><br>
                    @endif
                    <form method="POST" action="/membership/create/{{$projects->id}}">
                        @csrf

                        <div class="row mb-3">
                            <label for="firstname" class="col-md-4 col-form-label text-md-end">{{ __('Prénom') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="firstname" required>

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
                                <input type="text" class="form-control" name="lastname" required>

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

						<div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Adresse email') }}</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" required>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        @if ($projects->question1)
						<div class="row mb-3">
                            <label for="question1" class="col-md-4 col-form-label text-md-end">{{ __('Numéro de téléphone') }}</label>

                            <div class="col-md-6">
                                <input type="tel" class="form-control" name="question1">

                                @error('question1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        @endif

                        @if ($projects->question2)
                        <div class="row mb-3">
                            <label for="question2" class="col-md-4 col-form-label text-md-end">{{ __('Quelles sont vos attentes') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="question2">

                                @error('question2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        @endif

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="theme-button-one">
                                    {{ __('Confirmer') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
					</div> <!-- /.row -->
			</div> <!-- /.service-style-two -->

@endsection
