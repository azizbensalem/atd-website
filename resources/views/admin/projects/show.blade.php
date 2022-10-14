@extends('admin.admin')
@section('menu')
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" href="/admin/home">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        @if ( Auth::user()->role == '1')
        <li class="nav-item">
            <a class="nav-link" href="/admin/news">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">News</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/users">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Membres</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/event">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Événements à venir</span>
            </a>
        </li>
        @endif
        <li class="nav-item active">
            @if ( Auth::user()->role == '1')
            <a class="nav-link " href="/admin/projects">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Les projets</span>
            </a>
            @endif
            @if ( Auth::user()->role == '0')
            <a class="nav-link " href="/member/projects">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Les projets</span>
            </a>
            @endif
        </li>
    </ul>
</nav>
@endsection
@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Article num {{$projects->id}}</h4>
                <div class="form-group">
                    <label>Titre</label>
                    <p>{{$projects->title}}</p>
                </div>
                <div class="form-group">
                    <label>Texte</label>
                    <p>{{$projects->description}}</p>
                </div>
                <div class="form-group">
                    <img src="{{ asset($projects->image) }}" style="max-height: 200px;" />
                </div>
                <div class="form-group">
                    <a href="/membership/{{ $projects->id }}"><label>Lien du formulaire</label></a>
                </div>
                @if ( Auth::user()->role == '1')
                <a href="/admin/projects/edit/{{$projects->id}}" class="btn btn-success mr-2">Modifier</button>
                <a href="/admin/projects/" class="btn btn-light">Retour</a>
                @endif
                @if ( Auth::user()->role == '0')
                    <a href="/member/projects/" class="btn btn-light">Retour</a>
                @endif
        </div>
    </div>
</div>
@if ( Auth::user()->role == '1')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Liste des participants {{$projects->id}}</h4>
                <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Prénom</th>
                          <th>Nom</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($projects->members as $member)
                        <tr>
                          <td>{{$member->firstname}}</td>
                          <td>{{$member->lastname}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
        </div>
    </div>
</div>
@endif
@endsection