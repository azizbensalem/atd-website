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
        <li class="nav-item">
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
            @if(Session::has('success'))
                      <div class="alert alert-success mt-1 mb-1">
                        {{Session::get('success')}}
                      </div><br>
            @endif
            <h4 class="card-title">Article num {{$news->id}}</h4>
                <div class="form-group">
                    <label>Titre</label>
                    <p>{{$news->title}}</p>
                </div>
                <div class="form-group">
                    <label>Texte</label>
                    <p>{!! nl2br(htmlspecialchars($news->description, ENT_NOQUOTES)) !!}</p>
                </div>
                <div class="form-group">
                    <img src="{{ asset($news->image) }}" style="max-height: 200px;" />
                </div>
                <a href="/admin/news/edit/{{$news->id}}" class="btn btn-success mr-2">Modifier</button>
                <a href="/admin/news/" class="btn btn-light">Retour</a>
        </div>
    </div>
</div>
@endsection