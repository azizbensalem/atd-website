<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Events::paginate(9);
        return view("events.eventsGrid", compact("events"));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminIndex()
    {
        $events = Events::latest()->paginate(6);
        return view("admin.event.event", compact("events"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.event.create");
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
            'nom' => 'bail|required|string|max:255',
            'contenu' => 'bail|required',
            'photo' => 'required|mimes:jpg,png,jpeg,gif,svg',
        ]);
        
        $path = $request->photo->store('public');

        Events::create([
        'nom' => $request->nom,
        'contenu' => $request->contenu,
        'photo' => $path,
        ]);
    
        return redirect("/admin/event")->withSuccess('Événement créé avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Events  $event
     * @return \Illuminate\Http\Response
     */
    public function showEvent(Events $events)
    {        
        return view("events.eventsDetail", compact("events"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Events  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Events $events)
    {        
        return view("admin.event.show", compact("events"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Events $events)
    {
        return view("admin.event.edit", compact("events"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Events $events)
    {
        $rules = [
            'nom' => 'bail|required|string|max:255',
            "contenu" => 'bail|required',
        ];

        if ($request->has("photo")) {
            $rules["photo"] = 'required|mimes:jpg,png,jpeg,gif,svg|max:2048';
        }

        $this->validate($request, $rules);

        if ($request->has("photo")) {
            Storage::delete($events->photo);
            $path = $request->file('photo')->store('public');
        }

        $events->update([
            "nom" => $request->nom,
            "contenu" => $request->contenu,
            "photo" => isset($path) ? $path : $events->photo,
        ]);

        return redirect('/admin/event/show/'.$events->id)->withSuccess('Événement modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Events $events)
    {
        Storage::delete($events->photo);
        $events->delete();
        return redirect("/admin/event")->withSuccess('Événement supprimé avec succès');
    }
}
