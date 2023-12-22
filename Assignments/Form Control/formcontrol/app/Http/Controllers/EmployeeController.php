<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function emplist()
    {
        $emplist= Employee::paginate(25);


        return view('emplist',compact('emplist'));
    }
    public function addemp()
    {
        return view('addemp');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addemp_store(request $request)
    {

        $user = new Employee;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->empid = $request->empid;
        $user->dept = $request->dept;
        $user->save();
        $details = [
            'title' => 'Welcome to our website',
            'body' => 'This is a body of email'
        ];

        Mail::to($request->email)->send(new \App\Mail\Mailtry($details));

        return redirect('addemp');

    }


    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
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
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function emplist_del(Request $request,$id)
    {

        // if(isset($request['del']))
        // {

            $data = Employee::findOrFail($id);
            $data->delete();
            return redirect('emplist');
        // }
        // else if(isset($request['upd']))
        // {
        //     $data = Employee::findOrFail($id);
        //     return redirect('updateemp');

            // if(isset($request['updepm_data']))
            // {

            //     Employee::where('id',$id)
            //     ->update([
            //         'name'=>$request->name,
            //         'email'=>$request->email,
            //         'empid'=>$request->empid,
            //         'dept'=>$request->dept,
            //     ]);
            //     return redirect('emplist');
            // }



        }

        // dd($request);

}
