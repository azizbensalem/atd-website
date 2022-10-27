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
        @endif
        @if (Auth::user()->role == '0')
        <li class="nav-item">
            <a class="nav-link" href="/member/projects">
                <i class="fa fa-building menu-icon"></i>
                <span class="menu-title">Les projets</span>
            </a>
        </li>
        @endif
    </ul>
</nav>
@endsection
@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Modifier le profil</h4>
            @if(Session::has('success'))
                <div class="alert alert-success mt-1 mb-1">
                    {{Session::get('success')}}
                </div>
            @endif
            <br>
            <form method="POST" action="@if (Auth::user()->role == '0') /member/profile/update/{{Auth::user()->id}} @else /admin/profile/update/{{Auth::user()->id}} @endif" enctype="multipart/form-data" class="forms-sample">
            @method('PUT')
            @csrf
                <div class="row">
                <div class="col-xs-6 col-lg-6 col-12 form-group">
                    <label>Prénom</label>
                    @error('firstname')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <input type="text" class="form-control" name="firstname" value="{{Auth::user()->firstname}}" placeholder="Prénom" required>
                </div>
                <div class="col-xs-6 col-lg-6 col-12 form-group">
                    <label>Nom</label>
                    @error('lastname')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <input type="text" class="form-control" name="lastname" value="{{Auth::user()->lastname}}" placeholder="Nom" required>
                </div>
                <div class="col-xs-6 col-lg-6 col-12 form-group">
                    <label>Numéro de téléphone</label>
                    @error('telephone')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <input type="tel" class="form-control" name="telephone" value="{{Auth::user()->telephone}}" placeholder="Numéro de téléphone" required>
                </div>
                <div class="col-xs-6 col-lg-6 col-12 form-group">
                    <label>Spécialité</label>
                    @error('specialite')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <select id="specialite" type="text" class="form-control" name="specialite" value="{{Auth::user()->specialite}}" required>
                        <option name="specialite" value="Design espace/ Architecture d'intérieur" <?php if(Auth::user()->specialite=="Design espace/ Architecture d'intérieur"){ echo "selected=selected";}  ?>>Design espace/ Architecture d'intérieur</option>
                        <option name="specialite" value="Design image/Design graphique" <?php if(Auth::user()->specialite=="Design image/Design graphique"){ echo "selected=selected";}  ?>>Design image/Design graphique</option>
                        <option name="specialite" value="Design produit" <?php if(Auth::user()->specialite=="Design produit"){ echo "selected=selected";}  ?>>Design produit</option>
                        <option name="specialite" value="Design textile" <?php if(Auth::user()->specialite=="Design textile"){ echo "selected=selected";}  ?>>Design textile</option>
                        <option name="specialite" value="Design industriel" <?php if(Auth::user()->specialite=="Design industriel"){ echo "selected=selected";}  ?>>Design industriel</option>
                        <option name="specialite" value="Design mobilier" <?php if(Auth::user()->specialite=="Design mobilier"){ echo "selected=selected";}  ?>>Design mobilier</option>
                        <option name="specialite" value="Audiovisuel" <?php if(Auth::user()->specialite=="Audiovisuel"){ echo "selected=selected";}  ?>>Audiovisuel</option>
                        <option name="specialite" value="Autres" <?php if(Auth::user()->specialite=="Autres"){ echo "selected=selected";}  ?>>Autres</option>
                    </select>
                </div>
                <div class="col-xs-6 col-lg-6 col-12 form-group">
                    <label>Dans quelle institution avez-vous eu votre diplôme / suivez vos études</label>
                    @error('diplome')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <input type="text" class="form-control" name="diplome" value="{{Auth::user()->diplome}}" placeholder="Dans quelle institution avez-vous eu votre diplôme / suivez vos études" required>
                </div>
                <div class="col-xs-6 col-lg-6 col-12 form-group">
                    <label>Votre activité professionnelle</label>
                    @error('activitepro')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <select id="activitepro" class="form-control" name="activitepro" required>
                        <option id="activitepro" value="Etudiant(e)" <?php if(Auth::user()->activitepro=="Etudiant(e)"){ echo "selected=selected";}  ?>>Etudiant(e)</option>
                        <option id="activitepro" value="Designer en Freelance" <?php if(Auth::user()->activitepro=="Designer en Freelance"){ echo "selected=selected";}  ?>>Designer en Freelance</option>
                        <option id="activitepro" value="Fondateur d'une boite de design" <?php if(Auth::user()->activitepro=="Fondateur d'une boite de design"){ echo "selected=selected";}  ?>>Fondateur d'une boite de design</option>
                        <option id="activitepro" value="Salarié(e)" <?php if(Auth::user()->activitepro=="Salarié(e)"){ echo "selected=selected";}  ?>>Salarié(e)</option>
                        <option id="activitepro" value="Enseignant(e)" <?php if(Auth::user()->activitepro=="Enseignant(e)"){ echo "selected=selected";}  ?>>Enseignant(e)</option>
                        <option id="activitepro" value="Entrepreneur, vous avez votre propre marque" <?php if(Auth::user()->activitepro=="Entrepreneur, vous avez votre propre marque"){ echo "selected=selected";}  ?>>Entrepreneur, vous avez votre propre marque</option>
                        <option id="activitepro" value="Designer reconverti dans un autre domaine" <?php if(Auth::user()->activitepro=="Designer reconverti dans un autre domaine"){ echo "selected=selected";}  ?>>Designer reconverti dans un autre domaine</option>
                        <option id="activitepro" value="A la recherche d'emploi" <?php if(Auth::user()->activitepro=="A la recherche d'emploi"){ echo "selected=selected";}  ?>>A la recherche d'emploi</option>
                    </select>
                </div>
                <div class="col-xs-6 col-lg-6 col-12 form-group">
                    <label>Indiquez le nom du lieu où vous travaillez</label>
                    @error('lieutravail')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <input type="text" class="form-control" name="lieutravail" value="{{Auth::user()->lieutravail}}" placeholder="Indiquez le nom du lieu où vous travaillez">
                </div>
                <div class="col-xs-6 col-lg-6 col-12 form-group">
                    <label for="photo">Photo</label><br>
                    @error('photo')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <input type="file" class="file-upload-browse" name="photo" value="{{Auth::user()->photo}}" id="photo">
                </div>
                </div>
                <button type="submit" class="btn btn-success mr-2">Modifier</button>
                @if (Auth::user()->role == 1)
                    <a href="/admin/profile/edit/password" class="btn btn-info">Changer le mot de passe</a>
                    <a href="/admin/users" class="btn btn-light">Annuler</a>
                @elseif (Auth::user()->role == 2)
                    <a href="/admin/profile/edit/password" class="btn btn-info">Changer le mot de passe</a>
                    <a href="/admin/admins" class="btn btn-light">Annuler</a>
                @else
                    <a href="/member/profile/edit/password" class="btn btn-info">Changer le mot de passe</a>
                    <a href="/admin/projects" class="btn btn-light">Annuler</a>
                @endif
            </form>
        </div>
    </div>
</div>
@endsection