<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use App\Models\Membership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::paginate(8);
        return view("projects.projetGrid", compact("projects"));

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminIndex()
    {   
        $membership = Membership::where('user_id', auth()->user()->id)->first();
        $projects = Project::latest()->paginate(6);

        return view("admin.projects.projects", compact("projects", "membership"));
    }

    public function isParticipated($project)
    {   
        $membership = Membership::where('user_id', auth()->user()->id)
                      ->where('project_id', $project)
                      ->get();

        if(count($membership) > 0) {
            return 1;
        } else {
            return 0;
        }
    }

    public function getMembershipId($project)
    {   
        $membership = Membership::where('user_id', auth()->user()->id)
                      ->where('project_id', $project)
                      ->get()
                      ->first();

        return $membership;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $users = User::latest()->get();
        return view("admin.projects.create", compact("users"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'bail|required|string|max:255',
            "description" => 'bail|required',
            "image" => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048',
            // 'comite1' => 'bail|required',
            // 'comite2' => 'bail|required',
            // 'comite3' => 'bail|required',
            // 'comite4' => 'bail|required',
            'type' => 'bail|required|string|max:255',
            'question1' => 'bail|required',
            'question2' => 'bail|required',            
        ]);
    
        $chemin_image = $request->image->store("public");

        Project::create([
            "title" => $request->title,
            "description" => $request->description,
            "comite1" => $request->comite1,
            "comite2" => $request->comite2,
            "comite3" => $request->comite3,
            "comite4" => $request->comite4,
            "chef_project_id" => $request->chef_project_id,
            "type" => $request->type,
            "question1" => $request->question1,
            "question2" => $request->question2,
            "image" => $chemin_image,
        ]);

        return redirect("/admin/projects")->withSuccess('Projet créé avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project $projects
     * @return \Illuminate\Http\Response
     */
    public function showProjects(Project $projects)
    {
        return view("projects.projetDetail", compact("projects"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project $projects
     * @return \Illuminate\Http\Response
     */
    public function show(Project $projects)
    {   
        $memberships = Membership::paginate(4);
        return view("admin.projects.show", compact("projects", "memberships"));
    }

    public function showAllMembers(Project $projects)
    {   
        $memberships = Membership::paginate(12);
        return view("admin.list.members", compact("projects", "memberships"));
    }

    public function showAllParticipants(Project $projects)
    {   
        $memberships = Membership::paginate(12);
        return view("admin.list.participants", compact("projects", "memberships"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project $projects
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $projects)
    {   
        $users = User::latest()->get();
        return view("admin.projects.edit", compact("projects", "users"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Project $projects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $projects)
    {
        $rules = [
            'title' => 'bail|required|string|max:255',
            'description' => 'bail|required',
            'comite1' => 'bail|required',
            'comite2' => 'bail|required',
            'comite3' => 'bail|required',
            'comite4' => 'bail|required',
            'type' => 'bail|required|string|max:255',
        ];

        if ($request->has("image")) {
            $rules["image"] = 'bail|required|image|max:1024';
        }

        $this->validate($request, $rules);

        if ($request->has("image")) {
            Storage::delete($projects->image);
            $chemin_image = $request->image->store("public");
        }

        $projects->update([
            "title" => $request->title,
            "description" => $request->description,
            "comite1" => $request->comite1,
            "comite2" => $request->comite2,
            "comite3" => $request->comite3,
            "comite4" => $request->comite4,
            "chef_project_id" => $request->chef_project_id,
            "question1" => $request->question1,
            "question2" => $request->question2,
            "type" => $request->type,
            "image" => isset($chemin_image) ? $chemin_image : $projects->image,
        ]);

        return redirect('/admin/projects/show/'.$projects->id)->withSuccess('Projet modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $projects
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $projects)
    {
        Storage::delete($projects->image);
        $projects->delete();
        return redirect("/admin/projects")->withSuccess('Projet supprimé avec succès');
    }
}
