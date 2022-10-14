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
        <li class="nav-item">
            <a class="nav-link" href="/admin/users">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Membres</span>
            </a>
        </li>
        <li class="nav-item active">
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
            <a class="nav-link" href="/admin/projects">
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
            <h4 class="card-title">Article num {{$news->id}}</h4>
                <div class="form-group">
                    <label>Titre</label>
                    <p>{{$news->title}}</p>
                </div>
                <div class="form-group">
                    <label>Texte</label>
                    <p>{{$news->description}}</p>
                </div>
                <div class="form-group">
                    <img src="{{ asset($news->image) }}" style="max-height: 200px;" />
                </div>
                <a href="/admin/news/edit/{{$news->id}}" class="btn btn-success mr-2">Modifier</button>
                <a href="/admin/news/delete/{{$news->id}}" class="btn btn-danger">Supprimer</a>
                <a href="/admin/news/" class="btn btn-light">Retour</a>
        </div>
    </div>
</div>
@endsection