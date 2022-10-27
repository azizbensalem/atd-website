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
@if ((Auth::user()->role == '1') || (Auth::user()->role == '2'))
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                @if(Session::has('success'))
                      <div class="alert alert-success mt-1 mb-1">
                        {{Session::get('success')}}
                      </div><br>
                @endif
                <h4 class="card-title">Liste des participants :</h4>
                    @if (count($projects->members) > 0)
                        <div class="table-responsive">
                            <table class="table">
                            <thead>
                                <tr>
                                <th>Nom et prénom</th>
                                <th>Email</th>
                                <th>Téléphone</th>
                                <th>Quelles sont vos attentes ?</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($projects->members as $member)
                                    <tr>
                                        <td>{{$member->firstname}}&nbsp;{{$member->lastname}}</td>
                                        <td>{{$member->email}}</td>
                                        @if ($member->question1)
                                            <td>{{$member->question1}}</td>
                                        @endif
                                        @if ($member->question2)
                                            <td>{{$member->question2}}</td>
                                        @endif
                                    </tr>
                            @endforeach
                            </tbody>
                            </table>
                        </div><br>
                    @else
                        <center><h4 class="card-title">Aucun participant trouvé</h4></center>
                    @endif
                    <a class="mt-1" href="/admin/projects/show/{{$projects->id}}">Retour</a>
            </div>
        </div>
    </div>
</div>
@endif
@endsection