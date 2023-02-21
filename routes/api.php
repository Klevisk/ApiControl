<?php

use App\Http\Controllers\API\ClientController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('register', [AuthController::class,'register']);

//Login----------------------------------------------------------------------*
Route::post('login', [AuthController::class,'login']);



//Routers Security----------------------------------------------------------------------*

Route::group(['middleware' => ['auth:sanctum']], function(){
    //LogOut----------------------------------------------------------------------*
Route::post('logout', [AuthController::class,'logOut']);

//registros de clientes!!!!---------------------------------------------*
Route::get('clients', [ClientController::class,'index']);
Route::post('clients', [ClientController::class,'store']);
Route::get('clients/{client}', [ClientController::class,'show']);
Route::put('clients/{client}', [ClientController::class,'update']);
Route::delete('clients/{client}', [ClientController::class,'destroy']);


});