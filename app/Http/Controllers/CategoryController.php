<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index()
    {
        $categoreis = Category::all();
        return view('admin.category.index', compact('categoreis'));
    }
    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        // Form Validations Rules
        $this->validate($request, [
            'name'            => ['required', 'string', 'max:255'],
        ]);
        $category = Category::create([
            'name' => $request->name
        ]);
        return back();
    }

    public function edit($id)
    {
        $cat = Category::find($id);
        return view('admin.category.create')->with('cat', $cat);
    }
    public function update(Request $request, $id)
    {
        $cat = Category::find($id);
        $cat->name = $request->name;
        $cat->save();
        return redirect()->route('category');
    }

    public function delete($id)
    {
        $cat = Category::find($id);
        $cat->delete();
        return back();
    }
}
