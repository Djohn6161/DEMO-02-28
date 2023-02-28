<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/person', function(){
    return view('person', [
        'name' => 'Don John Daryl Curativo',
        'age' => 21,
        'birthday' => 'June 16 2001',
        'color' => 'red',
        'siblings'=>[
            'Pedro' =>[
                'name'=> 'pedro curativo',
                'age' => 18
            ],
            'Maria' =>[
                'name' => 'Maria Curativo',
                'age' => 8
            ]
        ]
    ]);
});
