<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create()
    {
        return view('admin.admin');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'nomor_hp' => 'required|min:12',
            'alamat' => 'required',
            'role' => 'required|in:super_admin,kasir',
        ]);

        return redirect()->back()->with('success', 'Your Message Has Been Sent!');
    }
}
