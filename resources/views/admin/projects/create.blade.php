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
        <li class="nav-item active">
            <a class="nav-link" href="/admin/projects">
                <i class="fa fa-building menu-icon"></i>
                <span class="menu-title">Les projets</span>
            </a>
        </li>
        @endif
        @if (Auth::user()->role == '0')
        <li class="nav-item active">
            <a class="nav-link" href="/admin/projects">
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
            <h4 class="card-title">Ajouter un project</h4>
            <form method="POST" action="/admin/projects/store" enctype="multipart/form-data" class="forms-sample">
            @csrf
                <div class="row">
                <div class="col-xs-6 col-lg-6 col-12 form-group">
                    <label>Titre</label>
                    @error('title')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <input type="text" class="form-control" name="title" placeholder="Ajouter le titre du projet" required>
                </div>
                <div class="col-xs-6 col-lg-6 col-12 form-group">
                    <label>Type du projet</label>
                    @error('type')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <select class="form-control" name="type" required>
                        <option name="type" value="Formation">Formation</option>
                        <option name="type" value="Événement">Événement</option>
                    </select>
                </div>
                <div class="col-xs-6 col-lg-6 col-12 form-group">
                    <label>Chef du projet</label>
                    @error('chef_project_id')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <select class="form-control" name="chef_project_id" required>
                    @foreach ($users as $user)
                        <option name="type" value="{{$user->id}}">{{$user->firstname}}&nbsp;{{$user->lastname}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="col-xs-6 col-lg-6 col-12 form-group">
                    <label for="files">Image (la dimension de l'image doit être: 870 X 554)</label>
                    @error('image')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <div class="input-group col-xs-12">
                    <input type="file" id="files" name="image" class="file-upload-browse" required/>
                    </div>
                </div>
                <div class="col-xs-6 col-lg-6 col-12 form-group">
                    <label>Numéro de téléphone</label>
                    @error('question1')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror<br>
                    <input type="radio" name="question1" value="1" required>Oui</input>
                    <input type="radio" name="question1" value="0" required>Non</input>
                </div>
                <div class="col-xs-6 col-lg-6 col-12 form-group">
                    <label>Quelles sont vos attentes?</label>
                    @error('question2')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror<br>
                    <input type="radio" name="question2" value="1" required>Oui</input>
                    <input type="radio" name="question2" value="0" required>Non</input>
                </div>
                <div class="col-xs-12 col-lg-12 col-12 form-group">
                    <label>Description</label>
                    @error('description')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <textarea class="form-control" name="description" rows="12" placeholder="Ajouter la description du projet" required></textarea>
                </div>
                <div class="col-xs-6 col-lg-6 col-12 form-group">
                    <label>Tâches du comité 1</label>
                    @error('comite1')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <textarea class="form-control" name="comite1" rows="12" placeholder="Ajouter les tâches du comité 1"></textarea>
                </div>
                <div class="col-xs-6 col-lg-6 col-12 form-group">
                    <label>Tâches du comité 2</label>
                    @error('comite2')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <textarea class="form-control" name="comite2" rows="12" placeholder="Ajouter les tâches du comité 2"></textarea>
                </div>
                <div class="col-xs-6 col-lg-6 col-12 form-group">
                    <label>Tâches du comité 3</label>
                    @error('comite3')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <textarea class="form-control" name="comite3" rows="12" placeholder="Ajouter les tâches du comité 3"></textarea>
                </div>
                <div class="col-xs-6 col-lg-6 col-12 form-group">
                    <label>Tâches du comité 4</label>
                    @error('comite4')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <textarea class="form-control" name="comite4" rows="12" placeholder="Ajouter les tâches du comité 4"></textarea>
                </div>

                </div>
                <button type="submit" class="btn btn-primary mr-2">Envoyer</button>
                <a href="/admin/projects" class="btn btn-light">Annuler</a>
            </form>
        </div>
    </div>
</div>
@endsection