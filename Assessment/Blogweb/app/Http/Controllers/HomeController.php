<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {

        $articlelist = Article::all();
        return view('home', compact('articlelist'));
    }
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function store(Request $request)
    {
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);

        return response()->json('Successfully Added Author');
    }
    public function verify(Request $request)
    {

        $request->validate(['email'=>'required','password'=>'required']);

        $credential = $request->only('email','password');

        if(Auth::attempt($credential))
        {

             return redirect('/home')->with('message','Login success');
        }
        else
        {
            return redirect('/login')->with('message','Login Failed');
        }

    }
    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/home');
    }
}
