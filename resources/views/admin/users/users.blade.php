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
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                  <h4 class="card-title">Liste des membres</h4>
                  <p class="card-description">
                  @if ( Auth::user()->role == '1')<a class="badge badge-info" href="/admin/users/create">Ajouter</a>@endif
                  </p>
                <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Prénom</th>
                          <th>Nom</th>
                          <th>Adhésion</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($users as $user)
                        <tr>
                          <td>{{$user->firstname}}</td>
                          <td>{{$user->lastname}}</td>
                          <td>@if ($user->approved == 1)<a class="badge badge-success">Accepté</a>@else<a class="badge badge-danger">En attente</a>@endif</td>
                          <td>
                            <a href="/admin/users/show/{{$user->id}}" class="badge badge-info">Afficher</a>
                            <a href="/admin/users/edit/{{$user->id}}" class="badge badge-success">Modifier</a>
                            <form class="badge badge-danger" method="POST" action="/admin/users/delete/{{$user->id}}" >
                              @csrf
                              @method("DELETE")
                              <input type="submit" value="Supprimer">
                            </form>
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