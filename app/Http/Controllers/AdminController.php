<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::where('isAdmin', false)->count();
        $projects = Project::count();
        $categories = Category::count();
        $tickets = Contact::count();
        return view('admin.index', compact(['users', 'projects', 'categories', 'tickets']));
    }
}
