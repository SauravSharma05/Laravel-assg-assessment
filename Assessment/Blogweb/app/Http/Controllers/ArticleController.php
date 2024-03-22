<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

            return view('addarticle');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Article::create([
            'name'=>$request->name,
            'category'=>$request->category,
            'description'=>$request->description,
        ]);

        return response()->json('Successfully Added Article');
    }

    public function comment(Request $request)
    {

        Article::create([
            'name'=>$request->name,
            'category'=>$request->category,
            'description'=>$request->description,
        ]);

        return response()->json('Successfully Added Article');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request,$id)
    {
        $data = Article::findOrFail($id);
        $data->delete();
        return redirect('/home')->with('message',"article Deleted Successfully");

        // dd($request);
    }
}
