<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Project;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addMember(Project $projects)
    {
        return view("membership.index", compact("projects"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createMember(Request $request, Member $member, Project $projects)
    {
        $this->validate($request, [
            'firstname' => 'bail|required|string|max:255',
            'lastname' => 'bail|required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255'],
            'question1' => 'bail|string|max:255',
            'question2' => 'bail|string|max:255',
        ]);
    
        Member::create([
        "firstname" => $request->firstname,
        "lastname" => $request->lastname,
        "email" => $request->email,
        "question1" => $request->question1,
        "question2" => $request->question2,
        "project_id" => $projects->id,
        ]);

        return redirect("/membership/".$projects->id)->withSuccess('Formulaire envoyé avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }
}
