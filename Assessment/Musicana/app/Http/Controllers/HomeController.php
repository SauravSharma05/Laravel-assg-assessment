<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function registerpage()
    {
        return view('register');
    }
    public function registerdata(request $request)
    {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->save();
        }

    public function loginpage()
    {
        return view('login');
    }
    public function loginvalidate(request $request)
    {
        $request->validate(['email'=>'required','password'=>'required']);

        $credential = $request->only('email','password');
        if(Auth::attempt($credential))
        {
            if(Auth::user()->role_as == 1)
            {
                return redirect('/adminhome');
            }
            else if(Auth::user()->role_as == 0)
            {
                return redirect('/home');

            }
            else
            {

                return redirect('/home');
            }
        }
        else
        {
            return redirect('/login');
        }
    }


    public function addmusic()
    {
        return view('admin.addmusic');
    }
}
