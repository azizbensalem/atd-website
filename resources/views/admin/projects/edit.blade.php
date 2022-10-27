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
            <h4 class="card-title">Modifier l'article num {{$projects->id}}</h4>
            <form method="POST" action="/admin/projects/update/{{$projects->id}}" enctype="multipart/form-data" class="forms-sample">
            @method('PUT')
            @csrf
                <div class="row">
                    <div class="col-xs-6 col-lg-6 col-12 form-group">
                        <label>Titre</label>
                        <input type="text" class="form-control" name="title" value="{{$projects->title}}" placeholder="Modifier le titre du projet">
                    </div>
                    <div class="col-xs-6 col-lg-6 col-12 form-group">
                        <label>Type du projet</label>
                        <select class="form-control" name="type">
                            <option name="type" value="Formation" <?php if($projects->type=="Formation"){ echo "selected=selected";}  ?>>Formation</option>
                            <option name="type" value="Événement" <?php if($projects->type=="Événement"){ echo "selected=selected";}  ?>>Événement</option>
                        </select>
                    </div>
                    <div class="col-xs-6 col-lg-6 col-12 form-group">
                        <label>Chef du projet</label>
                        <select class="form-control" name="chef_project_id">
                            @foreach ($users as $user)
                                <option name="chef_project_id" value="{{$user->id}}" <?php if($projects->chef_project_id==$user->id){ echo "selected=selected";}  ?>>{{$user->firstname}}&nbsp;{{$user->lastname}}</option>
                            @endforeach                        
                        </select>                    
                    </div>
                    <div class="col-xs-6 col-lg-6 col-12 form-group">
                        <label>Image (la dimension de l'image doit être: 291 X 253)</label><br>
                        <input type="file" name="image" value="{{$projects->image}}" class="file-upload-browse" placeholder="Upload Image">
                    </div>
                    <div class="col-xs-6 col-lg-6 col-12 form-group">
                        <label>Numéro de téléphone</label>
                        <input type="radio" name="question1" value="1" <?php if($projects->question1=='1'){ echo "checked=checked";}  ?>>Oui</input>
                        <input type="radio" name="question1" value="0" <?php if($projects->question1=='0'){ echo "checked=checked";}  ?>>Non</input>
                    </div>
                    <div class="col-xs-6 col-lg-6 col-12 form-group">
                        <label>Quelles sont vos attentes?</label>
                        <input type="radio" name="question2" value="1" <?php if($projects->question2=='1'){ echo "checked=checked";}  ?>>Oui</input>
                        <input type="radio" name="question2" value="0" <?php if($projects->question2=='0'){ echo "checked=checked";}  ?>>Non</input>
                    </div>
                    <div class="col-xs-12 col-lg-12 col-12 form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description" rows="12" placeholder="Modifier les tâches du comité 1">{{$projects->description}}</textarea>
                    </div>
                    <div class="col-xs-6 col-lg-6 col-12 form-group">
                        <label>Tâches du comité 1</label>
                        <textarea class="form-control" name="comite1" rows="12" placeholder="Modifier les tâches du comité 1">{{$projects->comite1}}</textarea>
                    </div>
                    <div class="col-xs-6 col-lg-6 col-12 form-group">
                        <label>Tâches du comité 2</label>
                        <textarea class="form-control" name="comite2" rows="12" placeholder="Modifier les tâches du comité 2">{{$projects->comite2}}</textarea>
                    </div>
                    <div class="col-xs-6 col-lg-6 col-12 form-group">
                        <label>Tâches du comité 3</label>
                        <textarea class="form-control" name="comite3" rows="12" placeholder="Modifier les tâches du comité 3">{{$projects->comite3}}</textarea>
                    </div>
                    <div class="col-xs-6 col-lg-6 col-12 form-group">
                        <label>Tâches du comité 4</label>
                        <textarea class="form-control" name="comite4" rows="12" placeholder="Modifier les tâches du comité 4">{{$projects->comite4}}</textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mr-2">Modifier</button>
                <a href="/admin/projects" class="btn btn-light">Annuler</a>
            </form>
        </div>
    </div>
</div>
@endsection