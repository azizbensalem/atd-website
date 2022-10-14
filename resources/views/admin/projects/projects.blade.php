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
        <li class="nav-item">
            @if ( Auth::user()->role == '1')
            <a class="nav-link active" href="/admin/projects">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Les projets</span>
            </a>
            @endif
            @if ( Auth::user()->role == '0')
            <a class="nav-link active" href="/member/projects">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Les projets</span>
            </a>
            @endif
        </li>
    </ul>
</nav>
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                  <h4 class="card-title">Liste des projets</h4>
                  <p class="card-description">
                  @if ( Auth::user()->role == '1')<a class="badge badge-info" href="/admin/projects/create">Ajouter</a>@endif
                  </p>
                <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Titre</th>
                          <th>Date de création</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($projects as $project)
                        <tr>
                          <td>{{$project->title}}</td>
                          <td>{{date_format($project->created_at, "d M Y")}}</td>
                          <td>
                          @if ( Auth::user()->role == '1')
                            <a href="/admin/projects/show/{{$project->id}}" class="badge badge-info">Afficher</a>
                            <a href="/admin/projects/edit/{{$project->id}}" class="badge badge-success">Modifier</a>
                            <form class="badge badge-danger" method="POST" action="/admin/projects/delete/{{$project->id}}" >
                              @csrf
                              @method("DELETE")
                              <input type="submit" value="Supprimer">
                            </form>
                          @endif
                          @if ( Auth::user()->role == '0')
                          <a href="/member/projects/show/{{$project->id}}" class="badge badge-info">Afficher</a>
                          </td>
                          @endif
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection