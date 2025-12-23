<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class ImageController extends Controller
{
      public function create()
    {
        return view('image-upload');
    }

    // Store image
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Store image in public disk
        $path = $request->file('image')->store('images', 'public');

        return view('image-show', [
            'path' => $path
        ]);
    }

    // Download image
    public function download($filename)
    {
        $path = 'images/' . $filename;

        if (!Storage::disk('public')->exists($path)) {
            abort(404);
        }

        return Storage::disk('public')->download($path);
    }
}
