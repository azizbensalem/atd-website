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
        <li class="nav-item">
            <a class="nav-link" href="/admin/news">
                <i class="fa fa-newspaper-o menu-icon"></i>
                <span class="menu-title">News</span>
            </a>
        </li>
        <li class="nav-item active">
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
                    @if (count($events) > 0)
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
                            <form  method="POST" action="/admin/event/delete/{{$event->id}}" >
                              @csrf
                              @method("DELETE")
                              <button type="submit" class="badge badge-danger">Supprimer</button>
                            </form>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <span>{{$events->links()}}
                    @else
                        <center><h4>Aucun événement trouvé</h4></center>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection