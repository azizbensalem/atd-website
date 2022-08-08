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
            <a class="nav-link" href="/admin/news">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">News</span>
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
                    <input type="text" class="form-control" name="title" placeholder="Ajouter le titre de l'article">
                </div>
                <div class="form-group">
                    <label>Texte</label>
                    <textarea class="form-control" name="description" rows="12" placeholder="Ajouter le texte de l'article"></textarea>
                </div>
                <div class="form-group">
                    <label>Image</label>
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