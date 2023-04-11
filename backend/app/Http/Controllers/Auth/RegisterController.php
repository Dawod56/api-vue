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

        $user = new User;
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = $request['password'];
        // $token = $user->createToken('Personal Access Token')->accessToken;
        $user->save();
        return response()->json('success');
        // return response()->json(['token' => $token]);

    }
    public function login(Request $request)
    {
        $email = $request['email'];
        $password = $request['password'];
        if(Auth::attempt(['email' => $email, 'password' => $password])){
            $user = Auth::user();
            $token = $user->createToken('Personal Access Token')->accessToken;
            return response()->json(['hello'=>$token]);
            
        }
        
        
    }
}