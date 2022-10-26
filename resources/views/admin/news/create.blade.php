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
        <li class="nav-item">
            <a class="nav-link" href="/admin/users">
                <i class="fa fa-users menu-icon"></i>
                <span class="menu-title">Membres</span>
            </a>
        </li>
        <li class="nav-item active">
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
        <li class="nav-item ">
            <a class="nav-link" href="/admin/projects">
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
            <h4 class="card-title">Ajouter un article</h4>
            <form method="POST" action="/admin/news/store" enctype="multipart/form-data" class="forms-sample">
            @csrf
                <div class="form-group">
                    <label>Titre</label>
                    @error('title')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <input type="text" class="form-control" name="title" placeholder="Ajouter le titre de l'article">
                </div>
                <div class="form-group">
                    <label>Texte</label>
                    @error('description')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <textarea class="form-control" name="description" rows="12" placeholder="Ajouter le texte de l'article"></textarea>
                </div>
                <div class="form-group">
                    <label>Image (la dimension de l'image doit être: 870 X 554)</label>
                    @error('image')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <div class="input-group col-xs-12">
                    <input type="file" name="image" class="file-upload-browse" placeholder="Upload Image">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Envoyer</button>
                <a href="/admin/news" class="btn btn-light">Annuler</a>
            </form>
        </div>
    </div>
</div>
@endsection