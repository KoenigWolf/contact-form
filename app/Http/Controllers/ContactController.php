<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function confirm(Request $request)
    {
        $request->validate([
            'company_name' => 'required|max:20',
            'name' => 'required|max:20',
            'phone' => 'required|regex:/^[0-9-]+$/',
            'email' => 'required|email',
            'birthdate' => 'required|date',
            'gender' => 'required',
            'occupation' => 'required',
            'message' => 'required',
        ]);

        $input = $request->all();
        return view('contact.confirm', compact('input'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'company_name' => 'required|max:20',
            'name' => 'required|max:20',
            'phone' => 'required|regex:/^[0-9-]+$/',
            'email' => 'required|email',
            'birthdate' => 'required|date',
            'gender' => 'required',
            'occupation' => 'required',
            'message' => 'required',
        ]);

        Contact::create($validatedData);

        return redirect('/contact/thanks');
    }

    public function thanks()
    {
        return view('contact.thanks');
    }
}
