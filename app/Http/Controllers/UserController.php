<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function login(Request $request)
    {
        $username = $request->input('name');
        // username must contains only alphabetic characters
        if (!ctype_alpha($username)) {
            return response()->json([
                'status' => 'error',
                'msg' => 'username must contains only alphabetic characters'
            ], 401);
        }

        $user = User::firstOrCreate([
            'name' => $username,
            'password' => '',
        ]);

        Auth::login($user);

        return response()->json([
            'status' => 'success',
            'msg' => 'login success'
        ], 200);
    }

    public function logout()
    {
        Auth::logout();

        return response()->json([
            'status' => 'success',
            'msg' => 'logout success'
        ], 200);
    }

}
