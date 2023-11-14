<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function Get_data($id)
    {
        $data = User::find($id);
        return view("users.update", compact('data'));
    }
    public function UpdateUser(Request $request, User $user)
    {
        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'city' => $request->input('city'),
        ]);
        return redirect()->route("users.index")->with("success", "User Updated Successfully");
    }
}
