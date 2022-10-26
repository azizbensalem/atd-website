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
                <i class="fa-building menu-icon"></i>
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
            @if(Session::has('success'))
                <div class="alert alert-success mt-1 mb-1">
                    {{Session::get('success')}}
                </div>
            @endif
            <br>
            <h4 class="card-title">Modifier l'utilisateur num {{$user->id}}</h4>
            @if ($var === "admins")<form method="POST" action="/admin/admins/update/{{$user->id}}" enctype="multipart/form-data" class="forms-sample">@endif
            @if ($var === "users")<form method="POST" action="/admin/users/update/{{$user->id}}" enctype="multipart/form-data" class="forms-sample">@endif
            @method('PUT')
            @csrf
                <div class="row">
                <div class="col-xs-6 col-lg-6 col-12 form-group">
                    <label>Prénom</label>
                    @error('firstname')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <input type="text" class="form-control" name="firstname" value="{{$user->firstname}}" placeholder="Prénom" required>
                </div>
                <div class="col-xs-6 col-lg-6 col-12 form-group">
                    <label>Nom</label>
                    @error('lastname')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <input type="text" class="form-control" name="lastname" value="{{$user->lastname}}" placeholder="Nom" required>
                </div>
                <div class="col-xs-6 col-lg-6 col-12 form-group">
                    <label>Numéro de téléphone</label>
                    @error('telephone')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <input type="tel" class="form-control" name="telephone" value="{{$user->telephone}}" placeholder="Numéro de téléphone" required>
                </div>
                <div class="col-xs-6 col-lg-6 col-12 form-group">
                    <label>Spécialité</label>
                    @error('specialite')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <select id="specialite" type="text" class="form-control" name="specialite" value="{{$user->specialite}}" required>
                        <option name="specialite" value="Design espace/ Architecture d'intérieur" <?php if($user->specialite=="Design espace/ Architecture d'intérieur"){ echo "selected=selected";}  ?>>Design espace/ Architecture d'intérieur</option>
                        <option name="specialite" value="Design image/Design graphique" <?php if($user->specialite=="Design image/Design graphique"){ echo "selected=selected";}  ?>>Design image/Design graphique</option>
                        <option name="specialite" value="Design produit" <?php if($user->specialite=="Design produit"){ echo "selected=selected";}  ?>>Design produit</option>
                        <option name="specialite" value="Design textile" <?php if($user->specialite=="Design textile"){ echo "selected=selected";}  ?>>Design textile</option>
                        <option name="specialite" value="Design industriel" <?php if($user->specialite=="Design industriel"){ echo "selected=selected";}  ?>>Design industriel</option>
                        <option name="specialite" value="Design mobilier" <?php if($user->specialite=="Design mobilier"){ echo "selected=selected";}  ?>>Design mobilier</option>
                        <option name="specialite" value="Audiovisuel" <?php if($user->specialite=="Audiovisuel"){ echo "selected=selected";}  ?>>Audiovisuel</option>
                        <option name="specialite" value="Autres" <?php if($user->specialite=="Autres"){ echo "selected=selected";}  ?>>Autres</option>
                    </select>
                </div>
                <div class="col-xs-6 col-lg-6 col-12 form-group">
                    <label>Dans quelle institution avez-vous eu votre diplôme / suivez vos études</label>
                    @error('diplome')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <input type="text" class="form-control" name="diplome" value="{{$user->diplome}}" placeholder="Dans quelle institution avez-vous eu votre diplôme / suivez vos études" required>
                </div>
                <div class="col-xs-6 col-lg-6 col-12 form-group">
                    <label>Votre activité professionnelle</label>
                    @error('activitepro')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <select id="activitepro" class="form-control" name="activitepro" required>
                        <option id="activitepro" value="Etudiant(e)" <?php if($user->activitepro=="Etudiant(e)"){ echo "selected=selected";}  ?>>Etudiant(e)</option>
                        <option id="activitepro" value="Designer en Freelance" <?php if($user->activitepro=="Designer en Freelance"){ echo "selected=selected";}  ?>>Designer en Freelance</option>
                        <option id="activitepro" value="Fondateur d'une boite de design" <?php if($user->activitepro=="Fondateur d'une boite de design"){ echo "selected=selected";}  ?>>Fondateur d'une boite de design</option>
                        <option id="activitepro" value="Salarié(e)" <?php if($user->activitepro=="Salarié(e)"){ echo "selected=selected";}  ?>>Salarié(e)</option>
                        <option id="activitepro" value="Enseignant(e)" <?php if($user->activitepro=="Enseignant(e)"){ echo "selected=selected";}  ?>>Enseignant(e)</option>
                        <option id="activitepro" value="Entrepreneur, vous avez votre propre marque" <?php if($user->activitepro=="Entrepreneur, vous avez votre propre marque"){ echo "selected=selected";}  ?>>Entrepreneur, vous avez votre propre marque</option>
                        <option id="activitepro" value="Designer reconverti dans un autre domaine" <?php if($user->activitepro=="Designer reconverti dans un autre domaine"){ echo "selected=selected";}  ?>>Designer reconverti dans un autre domaine</option>
                        <option id="activitepro" value="A la recherche d'emploi" <?php if($user->activitepro=="A la recherche d'emploi"){ echo "selected=selected";}  ?>>A la recherche d'emploi</option>
                    </select>
                </div>
                <div class="col-xs-6 col-lg-6 col-12 form-group">
                    <label>Indiquez le nom du lieu où vous travaillez</label>
                    @error('lieutravail')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <input type="text" class="form-control" name="lieutravail" value="{{$user->lieutravail}}" placeholder="Indiquez le nom du lieu où vous travaillez">
                </div>
                <div class="col-xs-6 col-lg-6 col-12 form-group">
                    <label for="photo">Photo</label><br>
                    @error('photo')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <input type="file" class="file-upload-browse" name="photo" value="{{$user->photo}}" id="photo">
                </div>
                <div class="col-xs-12 col-lg-12 col-12 form-group">
                    <label>Si vous n'avez pas encore payé votre adhésion pour l'année 2022 (année administrative) d'un montant de 30dt, vous pouvez choisir l'une des options suivantes.</label>
                    @error('paiement')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <select id="paiement" type="text" class="form-control" name="paiement" value="{{$user->paiement}}" required>
                        <option name="paiement" value="Faire un virement et envoyer ensuite le justificatif par mail à : atd.designers.tn@gmail.com" <?php if($user->paiement=="Faire un virement et envoyer ensuite le justificatif par mail à : atd.designers.tn@gmail.com"){ echo "selected=selected";}  ?>>Faire un virement et envoyer ensuite le justificatif par mail à : atd.designers.tn@gmail.com</option>
                        <option name="paiement" value="Prendre contact avec un responsable en appelant le 95 991 992 ou en envoyant un mail à : atd.designers.tn@gmail.com" <?php if($user->paiement=="Prendre contact avec un responsable en appelant le 95 991 992 ou en envoyant un mail à : atd.designers.tn@gmail.com"){ echo "selected=selected";}  ?>>Prendre contact avec un responsable en appelant le 95 991 992 ou en envoyant un mail à : atd.designers.tn@gmail.com</option>
                        <option name="paiement" value="J'ai déjà payé mon adhésion pour l'année 2022" <?php if($user->paiement=="J'ai déjà payé mon adhésion pour l'année 2022"){ echo "selected=selected";}  ?>>J'ai déjà payé mon adhésion pour l'année 2022</option>
                    </select>
                </div>
                </div>
                <button type="submit" class="btn btn-success mr-2">Modifier</button>
                <a href="/admin/{{$var}}/newpassword/{{$user->id}}" class="btn btn-info mr-2">Changer le mot de passe</a>
                <a href="/admin/{{$var}}" class="btn btn-light">Annuler</a>
            </form>
        </div>
    </div>
</div>
@endsection