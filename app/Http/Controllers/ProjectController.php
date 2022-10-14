<?php

namespace App\Http\Controllers;

use App\Models\Project;
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
        $projects = Project::latest()->get();
        return view("projects.projetGrid", compact("projects"));

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminIndex()
    {
        $projects = Project::latest()->get();
        return view("admin.projects.projects", compact("projects"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.projects.create");
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
            ]);
    
        $chemin_image = $request->image->store("public");

        Project::create([
        "title" => $request->title,
        "description" => $request->description,
        "image" => $chemin_image,
        ]);

        return redirect("/admin/projects");
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
        return view("admin.projects.show", compact("projects"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project $projects
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $projects)
    {
        return view("admin.projects.edit", compact("projects"));
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
            "description" => 'bail|required',
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
            "image" => isset($chemin_image) ? $chemin_image : $projects->image,
        ]);

        return redirect('/admin/projects/show/'.$projects->id);
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
        return redirect("/admin/projects");
    }
}
