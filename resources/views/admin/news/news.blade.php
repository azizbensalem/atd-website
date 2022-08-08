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
            <a class="nav-link" href="/admin/news">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">News</span>
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
                  <h4 class="card-title">List news</h4>
                  <p class="card-description">
                  <a class="badge badge-info" href="/admin/news/create">Ajouter</a>
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
                      @foreach ($news as $new)
                        <tr>
                          <td>{{$new->title}}</td>
                          <td>12 May 2017</td>
                          <td>
                            <label class="badge badge-info">Afficher</label>
                            <label class="badge badge-success">Modifier</label>
                            <label class="badge badge-danger">Supprimer</label>
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