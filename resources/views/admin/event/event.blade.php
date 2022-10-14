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
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                  <h4 class="card-title">List des événements à venir</h4>
                  <p class="card-description">
                  <a class="badge badge-info" href="/admin/event/create">Ajouter</a>
                  </p>
                  @if(Session::has('success'))
                      <div class="alert alert-success mt-1 mb-1">
                        {{Session::get('success')}}
                      </div>
                  @endif
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
                      @foreach ($events as $event)
                        <tr>
                          <td>{{$event->nom}}</td>
                          <td>{{date_format($event->created_at, "d M Y")}}</td>
                          <td>
                            <a href="/admin/event/show/{{$event->id}}" class="badge badge-info">Afficher</a>
                            <a href="/admin/event/edit/{{$event->id}}" class="badge badge-success">Modifier</a>
                            <form class="badge badge-danger" method="POST" action="/admin/event/delete/{{$event->id}}" >
                              @csrf
                              @method("DELETE")
                              <input type="submit" value="Supprimer">
                            </form>
                          </td>
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