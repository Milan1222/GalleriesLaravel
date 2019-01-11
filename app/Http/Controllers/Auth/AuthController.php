<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    public function login(Request $request)
    {
        $credentials = $request->only([ 'email', 'password' ]);
        $token = Auth::attempt($credentials);
        if (!$token) {
            return response()->json([
                'message' => 'You are not authorized!'
            ], 401);
        }

        return response()->json([
            'token' => $token,
            'type' => 'bearer',
            'user' => Auth::user(),
        ]);
    }

    public function register(RegisterRequest $request)
	{
		$user = new User();
		// $user->first_name = $request->first_name;
		// $user->last_name = $request->last_name;
		// $user->email = $request->email;
        // $user->password = bcrypt($request->password);
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
		$user->save();
		return $this->login($request);		
    }
    
    public function logout()
	{
			auth()->logout();
			return response()->json(['message' => 'Successfully logged out']);
	}
}
