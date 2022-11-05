@extends('admin.admin')
@section('menu')
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        @if (Auth::user()->role == '2')
        <li class="nav-item">
            <a class="nav-link active" href="/admin/admins">
                <i class="ti-user menu-icon"></i>
                <span class="menu-title">Administrateurs</span>
            </a>
        </li>
        @endif
        <li class="nav-item active">
            <a class="nav-link" href="/admin/users">
                <i class="fa fa-users menu-icon"></i>
                <span class="menu-title">Membres</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/news">
                <i class="fa fa-newspaper-o menu-icon"></i>
                <span class="menu-title">News</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/event">
                <i class="fa fa-calendar menu-icon"></i>
                <span class="menu-title">Événements à venir</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/users">
                <i class="fa fa-building menu-icon"></i>
                <span class="menu-title">Les projets</span>
            </a>
        </li>
    </ul>
</nav>
@endsection
@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Membre num {{$user->id}}</h4>
                @if(Session::has('success'))
                    <div class="alert alert-success mt-1 mb-1">
                        {{Session::get('success')}}
                    </div>
                @endif
                <br>
                <div class="row">
                    <div class="col-xs-6 col-lg-6 col-12 form-group">
                        <label>Prénom</label>
                        <p>{{$user->firstname}}</p>
                    </div>
                    <div class="col-xs-6 col-lg-6 col-12 form-group">
                        <label>Nom</label>
                        <p>{{$user->lastname}}</p>
                    </div>
                    <div class="col-xs-6 col-lg-6 col-12 form-group">
                        <label>Email</label>
                        <p>{{$user->email}}</p>
                    </div>
                    <div class="col-xs-6 col-lg-6 col-12 form-group">
                        <label>Numéro de téléphone</label>
                        <p>{{$user->telephone}}</p>
                    </div>
                    <div class="col-xs-6 col-lg-6 col-12 form-group">
                        <label>Spécialité</label>
                        <p>{{$user->specialite}}</p>
                    </div>
                    <div class="col-xs-6 col-lg-6 col-12 form-group">
                        <label>Dans quelle institution avez-vous eu votre diplôme / suivez vos études ?</label>
                        <p>{{$user->diplome}}</p>
                    </div>
                    <div class="col-xs-6 col-lg-6 col-12 form-group">
                        <label>Votre activité professionnelle</label>
                        <p>{{$user->activitepro}}</p>
                    </div>
                    <div class="col-xs-6 col-lg-6 col-12 form-group">
                        <label>Si vous n'avez pas encore payé votre adhésion pour l'année 2022 (année administrative) d'un montant de 30dt, vous pouvez choisir l'une des options suivantes ?</label>
                        <p>{{$user->paiement}}</p>
                    </div>
                    <div class="col-xs-6 col-lg-6 col-12 form-group">
                        <label>Photo</label><br>
                        <img src="{{ asset($user->photo) }}" style="max-height: 200px;" />
                    </div>
                    <div class="col-xs-6 col-lg-6 col-12 form-group">
                        <label>Votre diplôme en design</label><br>
                        <a href="{{ asset($user->fdiplome) }}">Lien du diplôme</a>
                    </div>
                </div>
                <a href="/admin/users/edit/{{$user->id}}" class="btn btn-success mr-2">Modifier</a>
                <a href="/admin/users/newpassword/{{$user->id}}" class="btn btn-info mr-2">Changer le mot de passe</a>
                <a href="/admin/users/" class="btn btn-light">Retour</a>
        </div>
    </div>
</div>
@endsection