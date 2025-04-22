<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'nomor_hp' => 'required|min:12',
            'message' => 'required',
        ]);

        return redirect()->back()->with('success', 'Your Message Has Been Sent!');
    }
}
