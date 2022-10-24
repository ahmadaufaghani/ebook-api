<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;

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

Route::resource('authors', AuthorController::class);
