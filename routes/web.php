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

//Basic route
Route::get('/basicRoute', function () {
    return 'Welcome in Basic Route';
})->name('basicRoute');

//Required parameter route
Route::get('/routeWithID/{id}', function ($id) {
    return 'Welcome in required parameter route. Parameter = ' . $id;
})->name('routeWithRequiredArgument');

//Optional parameter route
Route::get('/optionalParamRoute/{id?}', function ($id = null) {
    return 'Welcome in optional parameter route. Parameter = ' . $id;
})->name('routeWithOptionalArgument');


Route::get('landing', function (){
    return view('landing');
});

//Start view inheritance & layouts extends
Route::get('about', function (){
    return view('about');
});
