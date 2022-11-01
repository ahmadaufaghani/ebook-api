<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('halo', function() {
//     return [
//         'status'=>201,
//         'result'=>[
//             "nama" => "Ghani",
//             "kelas"=> "XII",
//             "jurusan"=> "RPL"
//         ],
//         'error'=>[]
//     ];
// });

// Route::get('halocontroller', [HeloController::class, 'index']);
// Route::resource('halocontroller', HeloController::class);
// Route::resource('siswacontroller', SiswaController::class);

// Route::resource('books', BookController::class);
Route::post('register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('books', [BookController::class, 'index']);
Route::get('authors', [AuthorController::class, 'index']);
Route::middleware('auth:sanctum')->group(function() {
    Route::post('/books', [BookController::class, 'store']);
    Route::put('/books/{id}', [BookController::class, 'update']);
    Route::delete('/books/{id}', [BookController::class, 'destroy']);
    Route::post('/authors',[AuthorController::class, 'store']);
    Route::put('/authors/{id}',[AuthorController::class, 'update']);
    Route::delete('/authors/{id}',[AuthorController::class, 'destroy']);
    Route::post('/logout', [AuthController::class, 'logout']);
});