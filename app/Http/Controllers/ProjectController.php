<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with(['category', 'images'])->get();
        // return $projects;
        return view('projects.index', ['projects' => $projects]);
    }
    public function create()
    {
        return view('projects.createdit');
    }
    public function store(Request $request)
    {
         // Form Validations Rules
         $this->validate($request, [
            'name'                      => ['required', 'string', 'max:255'],
            'author_name'               => ['required', 'string', 'max:255'],
            'description'               => ['required', 'string'],
            'category_id'               => ['required', 'string'],
            'date_create'               => ['required', 'string'],
        ]);
    }
    public function edit($id)
    {
        $project = Project::find($id);
        return view('projects.createdit')->with('project', $project);
    }
}
