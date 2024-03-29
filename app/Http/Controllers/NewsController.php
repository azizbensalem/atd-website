<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::paginate(6);
        return view("news.newsGrid", compact("news"));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminIndex()
    {
        $news = News::latest()->paginate(6);
        return view("admin.news.news", compact("news"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.news.create");
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

        News::create([
        "title" => $request->title,
        "description" => $request->description,
        "image" => $chemin_image,
        ]);

        return redirect("/admin/news")->withSuccess('Actualité créée avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function showNews(News $news)
    {
        return view("news.newsDetail", compact("news"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        return view("admin.news.show", compact("news"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view("admin.news.edit", compact("news"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
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
            Storage::delete($news->image);
            $chemin_image = $request->image->store("public");
        }

        $news->update([
            "title" => $request->title,
            "description" => $request->description,
            "image" => isset($chemin_image) ? $chemin_image : $news->image,
        ]);

        return redirect('/admin/news/show/'.$news->id)->withSuccess('Actualité modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {   
        Storage::delete($news->image);
        $news->delete();
        return redirect("/admin/news")->withSuccess('Actualité supprimée avec succès');
    }
}
