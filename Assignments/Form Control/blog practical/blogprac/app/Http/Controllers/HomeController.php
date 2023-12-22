<?php


namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $blogdata = Blogs::All();
        return view('home', compact('blogdata'));


    }

}
