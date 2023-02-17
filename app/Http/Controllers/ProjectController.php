<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        $cats = Category::get();
        return view('projects.createdit', ['cats' => $cats]);
    }
    public function store(Request $request)
    {
        // dd($request);
        // Form Validations Rules
        $this->validate($request, [
            'name'                      => ['required', 'string', 'max:255'],
            'author_name'               => ['required', 'string', 'max:255'],
            'description'               => ['required', 'string'],
            'category_id'               => ['required', 'string'],
            'date_create'               => ['required', 'string'],
        ]);
        $project = Project::create([
            'name'              => $request->name,
            'author_name'       => $request->author_name,
            'category_id'       => $request->category_id,
            'description'       => $request->description,
            'date_creation'       => $request->date_create,
        ]);
        return redirect()->route('project');
    }
    public function edit($id)
    {
        $project = Project::find($id);
        $cats = Category::get();
        return view('projects.createdit', ['cats' => $cats,])->with('project', $project);
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'                      => ['required', 'string', 'max:255'],
            'author_name'               => ['required', 'string', 'max:255'],
            'description'               => ['required', 'string'],
            'category_id'               => ['required', 'string'],
            'date_create'               => ['required', 'string'],
        ]);
        $project = Project::find($id);
        $project->name              = $request->name;
        $project->author_name       = $request->author_name;
        $project->category_id       = $request->category_id;
        $project->description       = $request->description;
        $project->date_creation       = $request->date_create;
        $project->save();
        return redirect()->route('project');
    }

    
    public function delete($id)
    {
        $cat = Project::find($id)->delete();
        return back();
    }
}
