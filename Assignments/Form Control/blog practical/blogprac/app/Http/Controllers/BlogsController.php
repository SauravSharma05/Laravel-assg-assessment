<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function blogpost()
    {
        return view('blogpost');
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
    public function blogpost_data(Request $request)
    {
        $blogdata = new Blogs;
        $blogdata->name = $request->name;
        $blogdata->desc = $request->desc;
        $blogdata->save();

        return redirect('blogpost');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
    //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blogs $blogs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blogs $blogs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blogs $blogs)
    {
        //
    }
}
