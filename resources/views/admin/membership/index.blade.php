@extends('admin.admin')
@section('menu')
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item active">
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
            <h4 class="card-title">Demande d'adhésion dans le projet: {{$project->title}}</h4>
            <form method="POST" action="/member/projects/membership/{{$project->id}}" enctype="multipart/form-data" class="forms-sample">
            @csrf
                <div class="form-group">
                    <label>Comité</label>
                    <select class="form-control" name="comite">
                        <option name="comite" value="Comité sponsoring">Comité sponsoring</option>
                        <option name="comite" value="Comité communication">Comité communication</option>
                        <option name="comite" value="Comité événementiel">Comité événementiel</option>
                        <option name="comite" value="Comité 4">Comité 4</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Envoyer</button>
                <a href="/admin/projects" class="btn btn-light">Annuler</a>
            </form>
        </div>
    </div>
</div>
@endsection