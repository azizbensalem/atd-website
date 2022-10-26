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
        <li class="nav-item active">
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
                  <h4 class="card-title">Liste des membres</h4>
                  @if(Session::has('success'))
                      <div class="alert alert-success mt-1 mb-1">
                        {{Session::get('success')}}
                      </div><br>
                  @endif
                  <p class="card-description">
                  @if ((Auth::user()->role == '1') || ( Auth::user()->role == '2'))<a class="badge badge-info" href="/admin/users/create">Ajouter</a>@endif
                  </p>
                <div class="table-responsive">
                    @if (count($users) > 0)
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
                            <form  method="POST" action="/admin/users/delete/{{$user->id}}" >
                              @csrf
                              @method("DELETE")
                              <button type="submit" class="badge badge-danger">Supprimer</button>
                            </form>
                            @if ((Auth::user()->role == '2'))
                                @if (($user->approved == '0'))
                                    <form  method="POST" action="/admin/admins/approuver/{{$user->id}}" >
                                    @csrf
                                    @method("PUT")
                                    <button type="submit" class="badge badge-success">Approuver le compte</button>
                                    </form>
                                @endif
                            @endif
                            @if (Auth::user()->role == '2')
                                @if (($user->role == '0'))
                                    <form  method="POST" action="/admin/admins/changerole/admin/{{$user->id}}" >
                                    @csrf
                                    @method("PUT")
                                    <button type="submit" class="badge badge-info">Switcher vers le rôle admin</button>
                                    </form>
                                @endif
                            @endif
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <span>{{$users->links()}}
                    @else
                        <center><h4>Aucun membre trouvé</h4></center>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection