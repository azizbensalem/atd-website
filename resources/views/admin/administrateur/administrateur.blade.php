@extends('admin.admin')
@section('menu')
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        @if (Auth::user()->role == '2')
        <li class="nav-item active">
            <a class="nav-link" href="/admin/admins">
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
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                  <h4 class="card-title">Liste des administrateurs</h4>
                  @if(Session::has('success'))
                      <div class="alert alert-success mt-1 mb-1">
                        {{Session::get('success')}}
                      </div><br>
                  @endif
                  <p class="card-description">
                  @if ( Auth::user()->role == '2')<a class="badge badge-info" href="/admin/admins/create">Ajouter</a>@endif
                  </p>
                <div class="table-responsive">
                    @if (count($users) > 0)
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Prénom</th>
                          <th>Nom</th>
                          <th>Email</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($users as $user)
                        <tr>
                          <td>{{$user->firstname}}</td>
                          <td>{{$user->lastname}}</td>
                          <td>{{$user->email}}</td>
                          <td>
                            <a href="/admin/admins/show/{{$user->id}}" class="badge badge-info">Afficher</a>
                            <a href="/admin/admins/edit/{{$user->id}}" class="badge badge-success">Modifier</a>
                            <form method="POST" action="/admin/admins/destroy/{{$user->id}}" >
                              @csrf
                              @method("DELETE")
                              <button type="submit" class="badge badge-danger">Supprimer</button>
                            </form>
                            @if (Auth::user()->role == '2')
                                @if (($user->role == '1'))
                                    <form  method="POST" action="/admin/admins/changerole/user/{{$user->id}}" >
                                    @csrf
                                    @method("PUT")
                                    <button type="submit" class="badge badge-info">Switcher vers le rôle membre</button>
                                    </form>
                                @endif
                            @endif
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <span>{{$users->links()}}
                    @else
                    <center><h4>Aucun administrateur trouvé</h4></center>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection