@extends('admin.admin')
@section('menu')
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        @if (Auth::user()->role == '2')
            <li class="nav-item @if ($var === 'admins') active @endif">
                <a class="nav-link" href="/admin/admins">
                    <i class="ti-user menu-icon"></i>
                    <span class="menu-title">Administrateurs</span>
                </a>
            </li>
        @endif
        <li class="nav-item @if ($var === 'users') active @endif">
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
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            @if ($var === "admins")<h4 class="card-title">Créer un administrateur</h4>@endif
            @if ($var === "users")<h4 class="card-title">Créer un membre</h4>@endif
            @if ($var === "admins")<form method="POST" action="/admin/admins/store" enctype="multipart/form-data" class="forms-sample">@endif
            @if ($var === "users")<form method="POST" action="/admin/users/store" enctype="multipart/form-data" class="forms-sample">@endif
            @csrf
                <div class="row">
                <div class="col-xs-6 col-lg-6 col-12 form-group">
                    <label>Prénom</label>
                    @error('firstname')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <input type="text" class="form-control" name="firstname" required>
                </div>
                <div class="col-xs-6 col-lg-6 col-12 form-group">
                    <label>Nom</label>
                    @error('lastname')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <input type="text" class="form-control" name="lastname" required>
                </div>
                <div class="col-xs-6 col-lg-6 col-12 form-group">
                    <label>Adresse email</label>
                    @error('email')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="col-xs-6 col-lg-6 col-12 form-group">
                    <label>Numéro de téléphone</label>
                    @error('telephone')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <input type="tel" class="form-control" name="telephone" required>
                </div>
                <div class="col-xs-6 col-lg-6 col-12 form-group">
                    <label>Mot de passe</label>
                    @error('password')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <input type="password" class="form-control" name="password" required>
                </div>
                <div class="col-xs-6 col-lg-6 col-12 form-group">
                    <label>Confirmer le mot de passe</label>
                    <input type="password" class="form-control" name="password_confirmation" required>
                </div>
                <div class="col-xs-6 col-lg-6 col-12 form-group">
                    <label>Spécialité</label>
                    @error('specialite')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <select id="specialite" type="text" class="form-control" name="specialite" required>
                        <option name="specialite" value="Design espace/ Architecture d'intérieur">Design espace/ Architecture d'intérieur</option>
                        <option name="specialite" value="Design image/Design graphique">Design image/Design graphique</option>
                        <option name="specialite" value="Design produit">Design produit</option>
                        <option name="specialite" value="Design textile">Design textile</option>
                        <option name="specialite" value="Design industriel">Design industriel</option>
                        <option name="specialite" value="Design mobilier">Design mobilier</option>
                        <option name="specialite" value="Audiovisuel">Audiovisuel</option>
                        <option name="specialite" value="Autres">Autres</option>
                    </select>
                </div>
                <div class="col-xs-6 col-lg-6 col-12 form-group">
                    <label>Dans quelle institution avez-vous eu votre diplôme / suivez vos études</label>
                    @error('diplome')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <input type="text" class="form-control" name="diplome" required>
                </div>
                <div class="col-xs-6 col-lg-6 col-12 form-group">
                    <label>Votre activité professionnelle</label>
                    @error('activitepro')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <select id="activitepro" class="form-control" name="activitepro" required>
                        <option id="activitepro" value="Etudiant(e)">Etudiant(e)</option>
                        <option id="activitepro" value="Designer en Freelance">Designer en Freelance</option>
                        <option id="activitepro" value="Fondateur d'une boite de design">Fondateur d'une boite de design</option>
                        <option id="activitepro" value="Salarié(e)">Salarié(e)</option>
                        <option id="activitepro" value="Enseignant(e)">Enseignant(e)</option>
                        <option id="activitepro" value="Entrepreneur, vous avez votre propre marque">Entrepreneur, vous avez votre propre marque</option>
                        <option id="activitepro" value="Designer reconverti dans un autre domaine">Designer reconverti dans un autre domaine</option>
                        <option id="activitepro" value="A la recherche d'emploi">A la recherche d'emploi</option>
                    </select>
                </div>
                <div class="col-xs-6 col-lg-6 col-12 form-group">
                    <label>Indiquez le nom du lieu où vous travaillez</label>
                    @error('lieutravail')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <input type="text" class="form-control" name="lieutravail">
                </div>
                <div class="col-xs-12 col-lg-12 col-12 form-group">
                    <label>Si vous n'avez pas encore payé votre adhésion pour l'année 2022 (année administrative) d'un montant de 30dt, vous pouvez choisir l'une des options suivantes.</label>
                    @error('paiement')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <select id="paiement" type="text" class="form-control" name="paiement" required>
                        <option name="paiement" value="Faire un virement et envoyer ensuite le justificatif par mail à : atd.designers.tn@gmail.com">Faire un virement et envoyer ensuite le justificatif par mail à : atd.designers.tn@gmail.com</option>
                        <option name="paiement" value="Prendre contact avec un responsable en appelant le 95 991 992 ou en envoyant un mail à : atd.designers.tn@gmail.com">Prendre contact avec un responsable en appelant le 95 991 992 ou en envoyant un mail à : atd.designers.tn@gmail.com</option>
                        <option name="paiement" value="J'ai déjà payé mon adhésion pour l'année 2022">J'ai déjà payé mon adhésion pour l'année 2022</option>
                    </select>
                </div>
                <div class="col-xs-6 col-lg-6 col-12 form-group">
                    <label for="photo">Votre diplome en design</label>
                    @error('fdiplome')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <input type="file" class="file-upload-browse" name="fdiplome" id="photo">
                </div>
                <div class="col-xs-6 col-lg-6 col-12 form-group">
                    <label for="photo">Photo</label>
                    @error('photo')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <input type="file" class="file-upload-browse" name="photo" id="photo">
                </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Envoyer</button>
                <a href="/admin/{{$var}}" class="btn btn-light">Annuler</a>
            </form>
        </div>
    </div>
</div>
@endsection