<?php

namespace App\Http\Controllers;

use App\Models\PropertyPicture;
use Illuminate\Http\Request;

class DropzoneController extends Controller
{
    /**
     * Generate Image upload View
     *
     * @return void
     */
    public function index()
    {
        return view('dropzone');
    }

    /**
     * Image Upload Code
     *
     * @return void
     */
    public function store(Request $request)
    {
        $image = $request->file('file');

        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('properties'), $imageName);

        $new_picture = new PropertyPicture();
        $new_picture->name = $imageName;
        $new_picture->save();

        return response()->json(['success' => $imageName]);
    }
}
