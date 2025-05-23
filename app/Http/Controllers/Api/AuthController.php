<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request){

        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        return response()->json([
            'message' => 'Login Success!',
            'token' => '123456'
        ]);
    }
}
