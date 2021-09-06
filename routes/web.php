<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Route: :get('/me', function () {
//    return response()-> json(
//       [
//            'NIS'       => '3103119017',
//            'Nama'      => 'Amalia Dwi N',
//            'Gender'    => 'Female',
//            'Phone'     => '085850187283',
//            'Class'     => 'XII RPL 1'
//        ]
//    )
// })

Route: :get('/me', [AuthController::class, 'me']);