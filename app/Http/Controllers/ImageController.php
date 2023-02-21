<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Project;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index($id)
    {
        $images = Project::find($id);
        return view('admin.projects.show', ['images' => $images]);
    }
    public function addImage($id)
    {
        return view('admin.projects.image')->with('id', $id);
    }

    public function store(Request $request)
    {
        $filenamewithextension = $request->file('image')->getClientOriginalName();
        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
        $extension = $request->file('image')->getClientOriginalExtension();
        $filenametostore = $filename . '_' . time() . '.' . $extension;
        $request->file('image')->storeAs('public/image', $filenametostore);
        $image = Image::create([
            'image_path' => $filenametostore,
            'project_id' => $request->id
        ]);
        return back();
    }
}
