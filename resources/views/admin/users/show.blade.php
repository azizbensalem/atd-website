@extends('admin.admin')
@section('menu')
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="/admin/home">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="/admin/users">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Membres</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/news">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">News</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/event">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Événements à venir</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/users">
                <i class="icon-grid menu-icon"></i>
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
                <div class="form-group">
                    <label>Prénom</label>
                    <p>{{$user->firstname}}</p>
                </div>
                <div class="form-group">
                    <label>Nom</label>
                    <p>{{$user->lastname}}</p>
                </div>
                <div class="form-group">
                    <label>Date de naissance</label>
                    <p>{{$user->birthday}}</p>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <p>{{$user->email}}</p>
                </div>
                <div class="form-group">
                    <img src="{{ asset($user->photo) }}" style="max-height: 200px;" />
                </div>
                <div class="form-group">
                    <a href="{{asset($user->cv)}}">CV</p>
                </div>
        </div>
    </div>
</div>
@endsection