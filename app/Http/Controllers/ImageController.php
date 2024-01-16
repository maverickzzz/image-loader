<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index()
    {
        $images = Storage::files('public/images'); // Assuming images are stored in the storage/app/public/images directory

        return view('welcome', compact('images'));
    }
}
