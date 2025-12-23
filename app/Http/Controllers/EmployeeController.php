<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Requests\StorePostRequest;


class EmployeeController extends Controller
{
     public function create()
    {
        return view('create');
    }

        
    public function store(StorePostRequest $request)
    {
       
        $validated = $request->validated();

        return response()->json([
            'message' => 'Employee saved successfully',
            'data' => $validated
        ]);
     }
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name'       => 'required|string',
    //         'age'        => 'required|integer|min:18',
    //         'salary'     => 'required|numeric|min:0',
    //         'experience' => 'required|integer|min:0',
    //     ]);

    //     return response()->json([
    //         'message' => 'Employee saved successfully'
    //     ]);
    // }

}
