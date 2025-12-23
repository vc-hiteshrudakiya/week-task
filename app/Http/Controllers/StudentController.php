<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class StudentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
        'name' => 'required|string',
        'age'  => 'required|integer|min:1',

        'licence_number' => Rule::when(
            $request->age < 18,
            ['prohibited']
        ),
        'licence_number' => Rule::requiredIf(
            $request->age >= 18
        ),
    ]);

    return "Form submitted successfully";
    }


}
