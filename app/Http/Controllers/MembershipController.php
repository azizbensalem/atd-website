<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
use App\Models\Membership;


class MembershipController extends Controller
{
    public function create(Project $project)
    {   
        $users = User::latest()->get();
        $projects = Project::latest()->get();

        return view("admin.membership.index", compact("users", "projects", "project"));
    }

    public function store(Request $request, Project $project)
    {
        $this->validate($request, [
            'comite' => 'bail|required|string|max:255',
            ]);
    
        Membership::create([
        "comite" => $request->comite,
        "project_id" => $project->id,
        "user_id" => auth()->user()->id,
        "approved" => 0
        ]);

        return redirect("/member/projects")->withSuccess('Demande envoyée avec succès');
    }

    public function accepter(Request $request, Membership $memberships)
    {
        $memberships->update([
            "approved" => 1,
        ]);

        return redirect('/admin/projects/show/members/'.$memberships->project_id)->withSuccess("Demande d'adhésion acceptée");
    }

    public function annuler(Request $request, Membership $memberships)
    {
        $memberships->update([
            "approved" => 0,
        ]);

        return redirect('/admin/projects/show/members/'.$memberships->project_id)->withSuccess("Annulation d'adhésion acceptée");
    }

    public function supprimer(Membership $memberships)
    {
        $memberships->delete();
        
        return redirect("/member/projects")->withSuccess("Annulation de la demande est effectuée avec succès");
    }
}
