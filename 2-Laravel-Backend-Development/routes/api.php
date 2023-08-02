<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MhsController;

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


Route::get('/',               [MhsController::class,'index']);
Route::get('/{id}',           [MhsController::class,'getDetail']);
Route::post('/create',        [MhsController::class,'createData']);
Route::delete('/delete/{id}', [MhsController::class,'deleteData']);
Route::put('/update/{id}', [MhsController::class,'updateData']);