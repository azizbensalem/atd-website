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
        @if ((Auth::user()->role == '1') || (Auth::user()->role == '2'))
        <li class="nav-item">
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
            <a class="nav-link" href="/admin/projects">
                <i class="fa fa-building menu-icon"></i>
                <span class="menu-title">Les projets</span>
            </a>
        </li>
        @endif
        @if (Auth::user()->role == '0')
        <li class="nav-item">
            <a class="nav-link" href="/member/projects">
                <i class="fa fa-building menu-icon"></i>
                <span class="menu-title">Les projets</span>
            </a>
        </li>
        @endif
    </ul>
</nav>
@endsection
@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            @if(Session::has('success'))
                <div class="alert alert-success mt-1 mb-1">
                    {{Session::get('success')}}
                </div>
            @endif
            <br>
            <h4 class="card-title">Changer le mot de passe</h4>
            @if ((Auth::user()->role == '0'))
                <form method="POST" action="/member/profile/update/password/{{Auth::user()->id}}" enctype="multipart/form-data" class="forms-sample">
            @else 
                <form method="POST" action="/admin/profile/update/password/{{Auth::user()->id}}" enctype="multipart/form-data" class="forms-sample">
            @endif
            @method('PUT')
            @csrf
                <div class="row">
                    <div class="col-xs-6 col-lg-6 col-12 form-group">
                        <label>Mot de passe actuel</label>
                        @error('current_password')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <input type="password" class="form-control" name="current_password" required>
                    </div>
                    <div class="col-xs-6 col-lg-6 col-12 form-group">
                        <label>Nouveau mot de passe</label>
                        @error('password')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <div class="col-xs-6 col-lg-6 col-12 form-group">
                        <label>Confirmer le nouveau mot de passe</label>
                        <input type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mr-2">Confirmer</button>
                @if (Auth::user()->role == 1)
                    <a href="/admin/users" class="btn btn-light">Annuler</a>
                @elseif (Auth::user()->role == 2)
                    <a href="/admin/admins" class="btn btn-light">Annuler</a>
                @else
                    <a href="/admin/projects" class="btn btn-light">Annuler</a>
                @endif
            </form>
        </div>
    </div>
</div>
@endsection