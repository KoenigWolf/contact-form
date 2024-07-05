<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
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

        Contact::create($request->all());

        return redirect('/contact')->with('status', 'お問い合わせを送信しました。');
    }
}
