<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Images;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index()
    {
        return view('admin.adminhome');
    }
    public function imageup()
    {
        return view('admin.imageupload');
    }

    public function upload( request $request, Images $images)
    {
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();

            $image =  'upload/';
            $source =  $image.time().'.'.$ext;
            $file->move($image,$source);
        }

            Images::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'visible'=>$request->visible,
            'image'=>$source,
        ]);
          return redirect('/adminhome');

    }
}
