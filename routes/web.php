<?php

use Illuminate\Contracts\View\View;
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
    $data = [
        'name' => 'pippo',
        'lastname' => 'pippi',
        'age' => 33,
        'email' => 'pippo@mail.com',
        'address' => 'via Vittorio Veneto, 1',
        'city' => 'Bergamo',
        'CAP' => '24100',
         
    ];

    return view('homepage', $data);
});

// Route::get('/about', function(){
//     return 'ciao';
// });

Route::get('/about', function(){
    return View('about' );
});