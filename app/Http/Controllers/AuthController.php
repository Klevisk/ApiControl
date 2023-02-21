<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    
//Register
public function register(RegisterRequest $request)
{
  $user = new User();

  $user->phone = $request->phone;
  $user->email = $request->email;
  $user->password = bcrypt($request->password);
  

  $user->save();

 

  return response()->json([

    'res' => true,
    'msg' => 'Usuario Registrado Correctamente'
            ],200);

}
//login
public function login(LoginRequest $request){

    $user = User::where('email', $request->email)->first();

    if (! $user || ! Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'msg' => ['*Los datos ingresados son incorrectos'],
        ]);
    }
 
    $token = $user->createToken($request->email)->plainTextToken;
    return response()->json([

        'res' => true,
        'token' => $token,
        'usuario' => $user

    ],200);

}
//LogOut--------------------------------------------------------------*
public function logOut(Request $request){

    $request->user()->currentAccessToken()->delete();
    return response()->json([

        'res' => true,
        'msg' => 'Has Cerrado Sesion Correctamente'

    ],200);



}

}


