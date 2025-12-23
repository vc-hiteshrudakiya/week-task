<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Validation\Rule;


class UserController extends Controller
{
    public function create()
    {
        return view('user-form');
    }

    // Handle form submission
    public function store(Request $request)
    {
        $request->validate([
            'username'   => 'required|string',
            'is_admin'   => 'required|boolean',
            'admin_code' => Rule::prohibitedIf(!$request->is_admin), // prohibited if user is NOT admin
        ]);

        return "Validation passed!";
    }
}
