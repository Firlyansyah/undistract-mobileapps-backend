<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request){
        $validate = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validate->errors()->getMessages()
            ], 422);
        }

        $credentials = $validate->validated();

        if (Auth::attempt($credentials)) {
            /** @var \App\Models\User $user */
            $user = Auth::user();
            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                'status' => 'success',
                'data' => ['user' => $user],
                'token' => $token,
                'message' => 'Login success',
            ], 200);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Login failed',
        ], 401);
    }


    public function register(Request $request){

        $validate = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        if ($validate->fails()){
            return response()->json([
                'status' => 'error',
                'message' => $validate->errors()->getMessages()
            ], 200);
        }

        $validated = $validate->validated();
        
        $user = new User();
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->password = Hash::make($validated['password']);
        if($user->save()){
            return response()->json([
                'status' => 'success',
                'message' => 'User created successfully',
                'name' => $validated['name'],
                'email' => $validated['email']
            ], 200);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Unknown error has been occured'
        ], 200);
    }
}
