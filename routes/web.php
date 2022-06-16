<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\form_postController;
use App\Http\Controllers\TinhToanController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('cars', (CarController::class));

// Route::get('form', function () {
//     return view('form');
// });
// Route::post('form', function (Request $request) {
//     $a = $request->input("a");
//     $b = $request->input("b");
//     if ($a == 0) {
//         if ($b == 0) {
//             $kq = "Phương trình vô số nghiệm";
//         } else {
//             $kq = "Phương trình vô số nghiệm";
//         }
//     } else {
//         $kq = "Phương trình có một nghiệm X =" . (-$b / $a);
//     }
//     // ['kq'=$kq]
//     return view('form',  compact("a", "b", "kq"));
// })->name('ptb1_post');

// Route::post('form', [form_postController::class, 'getData'])->name('ptb1_post');
// Route::get('form_post', [form_postController::class, 'getData']);
// Route::view("form", "form_post");
Route::get('/', function () {
    return view('phepTinh');
});
Route::post('phepTinh', [TinhToanController::class, 'Tinhtoan'])->name('phepTinh');

