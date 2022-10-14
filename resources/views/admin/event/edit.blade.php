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
        <li class="nav-item">
            <a class="nav-link" href="/admin/news">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">News</span>
            </a>
        </li>
        <li class="nav-item active">
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
            <h4 class="card-title">Modifier l'événement num {{$events->id}}</h4>
            <form method="POST" action="/admin/event/update/{{$events->id}}" enctype="multipart/form-data" class="forms-sample">
            @method('PUT')
            @csrf
                <div class="form-group">
                    <label>Titre</label>
                    @error('title')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <input type="text" class="form-control" name="nom" value="{{$events->nom}}" placeholder="Ajouter le titre de l'événement">
                </div>
                <div class="form-group">
                    <label>Texte</label>
                    @error('description')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <textarea class="form-control" name="contenu" rows="12"placeholder="Ajouter le texte de l'événement">{{$events->contenu}}</textarea>
                </div>
                <div class="form-group">
                    <label>Image</label>
                    @error('photo')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <div class="input-group col-xs-12">
                    <input type="file" name="photo" value="{{$events->photo}}" class="file-upload-browse" placeholder="Upload Image">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Envoyer</button>
                <a href="/admin/event" class="btn btn-light">Annuler</a>
            </form>
        </div>
    </div>
</div>
@endsection