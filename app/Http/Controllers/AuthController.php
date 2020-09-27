<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
  public function __construct() {
    $this->middleware('auth:api', ['except' => ['login', 'register']]);
  }

  public function register (Request $request) {
    $user = $request;
    User::create([
      'name' => $user->name,
      'email' => $user->email,
      'password' => Hash::make($user->password)
    ]);

    return response()->json([
      'message' => 'User successfully registered',
    ], 201);
  }

    public function login()
    {
        $credentials = request()->only('email', 'password');
        $token = auth()->attempt($credentials);

        return $token;
    }

    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    public function me()
    {
        return response()->json(auth()->user());
    }
}
