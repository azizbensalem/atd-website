<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Project;
use App\Models\Events;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function home()
    {
        $news = News::latest()->get();
        $events = Events::latest()->get();
        $projects = Project::latest()->get();

        return view('home', compact("news", "projects", "events"));
    }

    
}
