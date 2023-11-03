<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AjouterController extends Controller
{
    public function ajouter()
    {
        return view("users.ajouter");
    }

    public function AjouterUser(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'city' => 'required|string|max:255',
        ]);
        User::create($data);

        return redirect()->route('users.index')->with('success', 'User added successfully');
    }
}
