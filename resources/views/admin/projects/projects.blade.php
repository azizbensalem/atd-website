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
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                  <h4 class="card-title">Liste des projets</h4>
                  <p class="card-description">
                  @if ((Auth::user()->role == '1') || (Auth::user()->role == '2')) <a class="badge badge-info" href="/admin/projects/create">Ajouter</a>@endif
                  </p>
                  @if(Session::has('success'))
                      <div class="alert alert-success mt-1 mb-1">
                        {{Session::get('success')}}
                      </div><br>
                  @endif
                <div class="table-responsive">
                    @if (count($projects) > 0)
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Titre</th>
                          <th>Type</th>
                          <th>Date de création</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($projects as $project)
                        <tr>
                          <td>{{$project->title}}</td>
                          <td>{{$project->type}}</td>
                          <td>{{date_format($project->created_at, "d M Y")}}</td>
                          <td>
                          @if ((Auth::user()->role == '1') || (Auth::user()->role == '2'))
                            <a href="/admin/projects/show/{{$project->id}}" class="badge badge-info">Afficher</a>
                            <a href="/admin/projects/edit/{{$project->id}}" class="badge badge-success">Modifier</a>
                            <form method="POST" action="/admin/projects/delete/{{$project->id}}" >
                              @csrf
                              @method("DELETE")
                              <button class="badge badge-danger" type="submit">Supprimer</button>
                            </form>
                          @endif
                          @if (Auth::user()->role == '0')
                          <a href="/member/projects/show/{{$project->id}}" class="badge badge-info">Afficher</a>
                            @if (App\Http\Controllers\ProjectController::isParticipated($project->id))
                              @php $link=App\Http\Controllers\ProjectController::getMembershipId($project->id) @endphp
                              @if ($link->approved == 0)
                              <form method="POST" action="/member/projects/membership/delete/{{$link->id}}" >
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="badge badge-danger">Annuler la demande</button>
                              </form>
                              @endif
                            @else
                            <a href="/member/projects/membership/{{$project->id}}" class="badge badge-success">Demande l'adhésion</a>  
                          @endif
                          </td>
                          <td>
                          @if (count($project->memberships) > 0)
                            @foreach ($project->memberships as $membership) 
                                 @if ($membership->user_id == Auth::user()->id)
                                    @if ($membership->approved == 1)
                                    <a class="badge badge-success">Acceptée</a>
                                    @else
                                    <a class="badge badge-danger">En attente</a>
                                    @endif
                                 @endif
                             @endforeach
                          @endif
                          </td>
                          @endif
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <span>{{$projects->links()}}
                    @else
                    <center><h4>Aucun projet trouvé</h4></center>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection