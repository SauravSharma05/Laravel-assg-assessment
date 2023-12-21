<?php

namespace App\Http\Controllers\EmployeeController;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Homecontroller extends Controller
{
    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/login');
    }
    public function index()
    {
        return view('macrotry');
    }

    public function macrotry( request $request)
    {
        $name = $request->input('name');
        $users = User::search($name);

        if ($users->isNotEmpty()) {
            // Users were found
            dd($users);
        } else {
            // No users were found
        }
    }

}
