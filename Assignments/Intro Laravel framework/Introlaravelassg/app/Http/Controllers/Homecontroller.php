<?php

namespace App\Http\Controllers;
use App\Models\User;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Homecontroller extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function register()
    {
        return view('register');
    }
    public function login()
    {
        return view('login');
    }
    public function contact()
    {
        return view('contact');
    }
    public function about()
    {
        return view('about');
    }
    public function gallery()
    {
        return view('gallery');
    }

    public function store(request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
    }

    public function validation(Request $request)
    {
        $request->validate(['email'=>'required','password'=>'required']);

        $credential = $request->only('email','password');
        if(Auth::attempt($credential))
        {
            if(Auth::user()->role_as == 1)
            {
                return redirect('/adminhome')->with('message','Login success');
            }
            else if(Auth::user()->role_as == 0)
            {
                return redirect('/home')->with('message','Login success');

            }
            else
            {

                return redirect('/home')->with('message','Login success');
            }
        }
        else
        {
            return redirect('/login')->with('message','Login Failed');
        }


    }

}
