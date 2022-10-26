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
            @if(Session::has('success'))
                      <div class="alert alert-success mt-1 mb-1">
                        {{Session::get('success')}}
                      </div><br>
            @endif
            <h4 class="card-title">Projet num {{$projects->id}}</h4>
                <div class="row">
                    <div class="col-xs-6 col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Titre</label>
                            <p>{{$projects->title}}</p>
                        </div>
                        <div class="form-group">
                            <label>Type</label>
                            <p>{{$projects->type}}</p>
                        </div>
                        <div class="form-group">
                            <label>Chef du projet</label>
                            <p>{{$projects->chef_project->firstname}}&nbsp;{{$projects->chef_project->lastname}}</p>
                        </div>
                        <div class="form-group">
                            <a href="/membership/{{ $projects->id }}"><label>Lien du formulaire</label></a>
                        </div>
                    </div>
                    <div class="col-xs-6 col-lg-6 col-sm-6 col-12 form-group">
                        <img src="{{ asset($projects->image) }}" style="max-height: 200px;" />
                    </div>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <p>{!! nl2br(htmlspecialchars($projects->description, ENT_NOQUOTES)) !!}</p>
                </div>
                <div class="row">
                @if (isset($projects->comite1))
                    <div class="col-xs-6 col-lg-6 col-sm-6 col-12 form-group">
                        <label>Tâches du comité 1</label>
                        <p>{!! nl2br(htmlspecialchars($projects->comite1, ENT_NOQUOTES)) !!}</p>
                    </div>
                @endif
                @if (isset($projects->comite2))
                    <div class="col-xs-6 col-lg-6 col-sm-6 col-12 form-group">
                        <label>Tâches du comité 2</label>
                        <p>{!! nl2br(htmlspecialchars($projects->comite2, ENT_NOQUOTES)) !!}</p>
                    </div>
                @endif
                @if (isset($projects->comite3))
                    <div class="col-xs-6 col-lg-6 col-sm-6 col-12 form-group">
                        <label>Tâches du comité 3</label>
                        <p>{!! nl2br(htmlspecialchars($projects->comite3, ENT_NOQUOTES)) !!}</p>
                    </div>
                @endif
                @if (isset($projects->comite3))
                    <div class="col-xs-6 col-lg-6 col-sm-6 col-12 form-group">
                        <label>Tâches du comité 4</label>
                        <p>{!! nl2br(htmlspecialchars($projects->comite4, ENT_NOQUOTES)) !!}</p>
                    </div>
                @endif
                </div>

                @if ((Auth::user()->role == '1') || (Auth::user()->role == '2'))
                <a class="btn btn-info mr-2" href="/admin/projects/show/members/{{$projects->id}}">Liste des membres</a>
                <a class="btn btn-info mr-2" href="/admin/projects/show/participants/{{$projects->id}}">Liste des participants</a>
                <br><br>
                <a href="/admin/projects/edit/{{$projects->id}}" class="btn btn-success mr-2">Modifier</button>
                <a href="/admin/projects/" class="btn btn-light">Retour</a>
                @endif
                @if ( Auth::user()->role == '0')
                    <a href="/member/projects/" class="btn btn-light">Retour</a>
                @endif
        </div>
    </div>
</div>
@endsection