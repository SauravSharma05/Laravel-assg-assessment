<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function fecthall()
    {
        $userdata  = User::all();


        $output = "";
        if ($userdata->count() > 0) {
            $output .= "<table class='table table-striped'>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
                <tbody>";

            foreach ($userdata as $value) {
                $output .= " <tr>
                    <td>$value->name</td>
                    <td>$value->address</td>
                    <td>
                        <img src='storage/images/$value->image' class='img-fluid' height='50px' width='50px'/>
                    </td>
                    <td>
                        <a class='btn btn-success editIcon' data-bs-toggle='modal' data-bs-target='#editEmployeeModal' id='$value->id' href='#'>
                        <i class='fa fa-edit'></i>
                        </a>
                    </td>
                </tr>";
            }

            $output .= "  </tbody>
                </thead>
            </table>";

            echo $output;
        } else {
            echo "<h1 class='text-center text-secondary'>No records ...!</h1>";
        }

    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fl = $request->file('image');
        $dt = time().".".$fl->getClientOriginalExtension();

        $fl->storeAs('public/images',$dt);

                $data = [
                   'name' => $request->name,
                   'address' => $request->address,
                   'image' => $dt,
        ];

        User::create($data);
        return response()->json(['status'=>200]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
