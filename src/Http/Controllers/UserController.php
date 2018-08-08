<?php

namespace Raj\User\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Raj\User\Models\Users;

class UserController extends Controller
{
    public function create()
    {
        return view("user::create");
    }

    public function add(Request $request)
    {
        $user = $request->all();
        unset($user['confirm_password']);
        Users::create($user);
        return redirect()->back();
    }
}
