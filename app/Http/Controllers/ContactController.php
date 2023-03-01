<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function index()
    {
        $tickets = Contact::all();
        return view('admin.contact.index', compact(['tickets']));
    }

    public function create()
    {
        return view('admin.contact.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'                      => ['required', 'string', 'max:255'],
            'email'               => ['required', 'string', 'max:255'],
            'subject'               => ['required', 'string'],
            'body'               => ['required', 'string'],
        ]);
        $filenametostore = '';
        if ($request->attachment) {
            $filenamewithextension = $request->file('attachment')->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $request->file('attachment')->getClientOriginalExtension();
            $filenametostore = $filename . '_' . time() . '.' . $extension;
            $request->file('attachment')->storeAs('public/contact', $filenametostore);
        }
        $tickit = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'user_id' => Auth::id(),
            'Content' => $request->body,
            'attachment' => $filenametostore
        ]);
        return redirect('/');
        // $tickit->attachment = $filenametostore;
    }
}
