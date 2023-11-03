<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function DeleteUser(User $id)
    {
        $id->delete();
        return redirect()->route("users.index")->with("success", "User Deleted Successfully");
    }
}
