<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Rules\MatchOldPassword;


class UserController extends Controller
{
    public function index()
    {
        $users = User::where('role', '0')->paginate(8);
        return view("admin.users.users", compact("users"));
    }

    public function indexAdmin()
    {
        $users = User::where('role', '1')->paginate(8);
        return view("admin.administrateur.administrateur", compact("users"));
    }

    public function show(User $user)
    {
        return view("admin.users.show", compact("user"));
    }

    public function showAdmin(User $user)
    {
        return view("admin.administrateur.show", compact("user"));
    }

    public function edit(User $user)
    {   
        $var = "users";
        return view("admin.administrateur.edit", compact("user", "var"));
    }

    public function editAdmin(User $user)
    {   
        $var = "admins";
        return view("admin.administrateur.edit", compact("user", "var"));
    }

    public function profileEdit()
    {   
        return view("admin.profile.index");
    }

    public function updateProfile(Request $request, User $user)
    {
        $rules = [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'telephone' => 'required|string|max:255',
            'specialite' => 'required|string|max:255',
            'diplome' => 'required|string|max:255',
            'activitepro' => 'required|string|max:255',
            'lieutravail' => 'string|max:255',
        ];

        if ($request->has("photo")) {
            $rules["photo"] = 'required|mimes:jpg,png,jpeg,gif,svg';
        }

        $this->validate($request, $rules);

        if ($request->has("photo")) {
            Storage::delete($user->photo);
            $chemin_image = $request->photo->store("public");
        }

        $user->update([
            "firstname" => $request->firstname,
            "lastname" => $request->lastname,
            "telephone" => $request->telephone,
            "specialite" => $request->specialite,
            "diplome" => $request->diplome,
            "activitepro" => $request->activitepro,
            "lieutravail" => $request->lieutravail,
            "photo" => isset($chemin_image) ? $chemin_image : $user->photo,
        ]);

        if (auth()->user()->role == '0') {
            $var = 'member';
        } else {
            $var = 'admin';
        }

        return redirect('/'.$var.'/profile/edit/')->withSuccess('Modification effectuée avec succès');
    }

    public function create()
    {   
        $var = "users";
        return view("admin.administrateur.create", compact("var"));
    }

    public function createAdmin()
    {   
        $var = "admins";
        return view("admin.administrateur.create", compact("var"));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'telephone' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'specialite' => 'required|string|max:255',
            'diplome' => 'required|string|max:255',
            'activitepro' => 'required|string|max:255',
            'lieutravail' => 'string|max:255',
            'paiement' => 'required|string|max:255',
            'photo' => 'required|mimes:jpg,png,jpeg,gif,svg',        
        ]);

        $chemin_image = $request->photo->store("public");

        User::create([
            "firstname" => $request->firstname,
            "lastname" => $request->lastname,
            "telephone" => $request->telephone,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "specialite" => $request->specialite,
            "diplome" => $request->diplome,
            "activitepro" => $request->activitepro,
            "lieutravail" => $request->lieutravail,
            "paiement" => $request->paiement,
            "photo" => $chemin_image,
            "role" => 0,
            "approved" => 1,
        ]);

        return redirect("/admin/users")->withSuccess('Actualité créée avec succès');
    }

    public function storeAdmin(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'telephone' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'specialite' => 'required|string|max:255',
            'diplome' => 'required|string|max:255',
            'activitepro' => 'required|string|max:255',
            'lieutravail' => 'string|max:255',
            'paiement' => 'required|string|max:255',
            'photo' => 'required|mimes:jpg,png,jpeg,gif,svg',  
        ]);

        $chemin_image = $request->photo->store("public");

        User::create([
        "firstname" => $request->firstname,
        "lastname" => $request->lastname,
        "telephone" => $request->telephone,
        "email" => $request->email,
        "password" => Hash::make($request->password),
        "specialite" => $request->specialite,
        "diplome" => $request->diplome,
        "activitepro" => $request->activitepro,
        "lieutravail" => $request->lieutravail,
        "paiement" => $request->paiement,
        "role" => 1,
        "approved" => 1,
        "photo" => $chemin_image,
        ]);

        return redirect("/admin/admins")->withSuccess('Administrateur créé avec succès');
    }

    public function update(Request $request, User $user)
    {
        $rules = [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'telephone' => 'required|string|max:255',
            'specialite' => 'required|string|max:255',
            'diplome' => 'required|string|max:255',
            'activitepro' => 'required|string|max:255',
            'lieutravail' => 'string|max:255',
            'paiement' => 'required|string|max:255',
        ];

        if ($request->has("photo")) {
            $rules["photo"] = 'required|mimes:jpg,png,jpeg,gif,svg';
        }

        $this->validate($request, $rules);

        if ($request->has("photo")) {
            Storage::delete($user->photo);
            $chemin_image = $request->photo->store("public");
        }

        $user->update([
            "firstname" => $request->firstname,
            "lastname" => $request->lastname,
            "telephone" => $request->telephone,
            "specialite" => $request->specialite,
            "diplome" => $request->diplome,
            "activitepro" => $request->activitepro,
            "lieutravail" => $request->lieutravail,
            "paiement" => $request->paiement,
            "photo" => isset($chemin_image) ? $chemin_image : $user->photo,
        ]);

        return redirect('/admin/users/show/'.$user->id)->withSuccess('Modification effectuée avec succès');
    }

    public function destroy(User $user)
    {
        Storage::delete($user->photo);
        $user->delete();

        return redirect("/admin/admins")->withSuccess('Compte supprimé avec succès');
    }

    public function approuver(Request $request, User $user)
    {
        $user->update([
            "approved" => 1,
        ]);

        return redirect('/admin/users/')->withSuccess('Modification effectuée avec succès');
    }

    public function changeRoleAdmin(Request $request, User $user)
    {
        $user->update([
            "role" => 1,
        ]);

        return redirect('/admin/users/')->withSuccess('Rôle changé');
    }

    public function changeRoleMember(Request $request, User $user)
    {
        $user->update([
            "role" => 0,
        ]);

        return redirect('/admin/admins/')->withSuccess('Rôle changé');
    }

    public function editPasswordAdmin(User $user)
    {   
        $var = "admins";
        return view("admin.administrateur.changePassword", compact("user", "var"));
    }

    public function editPasswordMember(User $user)
    {   
        $var = "users";
        return view("admin.administrateur.changePassword", compact("user", "var"));
    }

    public function editPasswordProfileAdmin(User $user)
    {   
        $var = "admins";
        return view("admin.profile.password", compact("user", "var"));
    }

    public function editPasswordProfileMember(User $user)
    {   
        $var = "users";
        return view("admin.profile.password", compact("user", "var"));
    }

    public function changePasswordProfile(Request $request, User $user)
    {
        $rules = [
            'current_password' => ['required', new MatchOldPassword],
            'password' => 'required|string|min:8|confirmed',
        ];

        $this->validate($request, $rules);
        
        $user->update([
            "password" => Hash::make($request->password),
        ]);

        if (auth()->user()->role == '0') {
            $var = 'member';
        } else {
            $var = 'admin';
        }

        return redirect('/'.$var.'/profile/edit/password')->withSuccess('Modification effectuée avec succès');
    }

    public function changePassword(Request $request, User $user)
    {
        $rules = [
            'password' => 'required|string|min:8|confirmed',
        ];

        $this->validate($request, $rules);

        $user->update([
            "password" => Hash::make($request->password),
        ]);

        return redirect('/admin/users/show/'.$user->id)->withSuccess('Modification effectuée avec succès');
    }

}
