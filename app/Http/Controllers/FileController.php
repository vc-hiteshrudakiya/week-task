<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|file|max:2048', // max 2MB
        ]);

        // Store file locally
        $path = $request->file('file')->store('uploads');

        return "File stored at: " . $path;
    }
}
