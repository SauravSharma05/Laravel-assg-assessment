<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function addemp()
    {
        return view('addemp');
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
    public function addemp_data(Request $request)
    {
        DB::table('employees')->insert([
            'email' => $request['email'],
            'name' => $request['name'],
            'dept' => $request['dept'],
            'empid' => $request['empid'],

        ]);

        return redirect('addemp');


    }

    /**
     * Display the specified resource.
     */
    public function emplist_show(Employee $employee)
    {
        $emplist = DB::table('employees')->get();

        return view('emplist', compact('emplist'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function action(request $request, Employee $employee)
    {
        if(isset($_REQUEST['upd']))
        {

            $data = DB::table('employees')->where('id','=',$request['id'])->get();
            // dd($data);

            return view('updateemp', compact('data'));




        }






        else if(isset($request['del']))
          {
             $deleted = DB::table('employees')->where('id', '=', $request['id'])->delete();
                return redirect('emplist');

            }

    }

    public function updateemp(request $request, Employee $employee)
    {
        if(isset($request['updemp_data']))
        {

            DB::table('employees')->where('id','=',$request['id'])
            ->update( array(
                'name' => $request['name'],
                'empid' => $request['empid'],
                'email' => $request['email'],
                'dept' => $request['dept'],
            ));

            return redirect('emplist');

        }
    }

    /**
     * Remove the specified resource from storage.
     */
//     public function emplist_del(request $request, Employee $employee)
//     {

//     }
}
