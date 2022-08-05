@extends('admin.admin')
@section('menu')
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item active">
            <a class="nav-link active" href="/admin/home">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/news">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">News</span>
            </a>
        </li>
    </ul>
</nav>
@endsection
@section('content')

@endsection