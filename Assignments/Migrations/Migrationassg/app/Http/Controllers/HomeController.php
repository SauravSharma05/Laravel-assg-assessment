<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');

    }

    public function proceduretry()
    {
        $employee_id = 1;
        $dataSet = DB::select('CALL get_employee_data(?)', array($employee_id));
        // dd($dataSet);
        return view('/proceduretry', compact('dataSet'));
    }
}
