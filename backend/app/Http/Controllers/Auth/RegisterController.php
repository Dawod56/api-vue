<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // $token = $user->createToken('api_token')->plainTextToken;
        $token = $user->createToken('Personal Access Token')->accessToken;

        return response()->json([
            'user' => $user,
            'token' => $token,
        ], 201);

        // $user = new User;
        // $user->name = $request['name'];
        // $user->email = $request['email'];
        // $user->password = $request['password'];
        // // $token = $user->createToken('Personal Access Token')->accessToken;
        // $user->save();
        // return response()->json('success');
        // return response()->json(['token' => $token]);

    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('auth-token')->accessToken;

            return response()->json([
                'success' => true,
                'token' => $token,
                'user' => $user
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Invalid credentials'
        ], 401);


        // $email = $request['email'];
        // $password = $request['password'];
        // if(Auth::attempt(['email' => $email, 'password' => $password])){
        //     $user = Auth::user();
        //     $token = $user->createToken('Personal Access Token')->accessToken;
        //     return response()->json(['hello'=>$token]);

        // }


    }
    public function user(){
        
    }
}