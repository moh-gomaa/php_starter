<?php

use App\Http\Controllers\Admin\AdminTestController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\UserController;
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

//Basic route
Route::get('/admin1', function () {
    return 'Welcome in Admin route';
})->name('adminRoute');

//Here is an Admin workspace (Which contains all routes for admin)
Route::namespace('Admin')
    ->group(function () {
        Route::get('displayUsername', [UserController::class, 'displayUserName']);
    });

//Group routes using multiple attributes
Route::group(['prefix' => 'users', 'middleware' => 'auth'], function () {
    Route::get('/', [UserController::class, 'displayUserName']);
});


Route::get('login', function () {
    return 'Please login';
})->name('login');

//Implement routing middleware using middleware keyword which applied to specific route only.
Route::get('printString1', [AdminTestController::class, 'printString1'])
    ->middleware('auth');
//Implement middleware using controller within constructor
Route::group(['namespace' => 'Admin'], function () {
    Route::get('printString2', [AdminTestController::class, 'printString2']);
    Route::get('printString3', [AdminTestController::class, 'printString3']);
    Route::get('printString4', [AdminTestController::class, 'printString4']);
    Route::get('printString5', [AdminTestController::class, 'printString5']);
});

//Route to resource controller
Route::resource('news', NewsController::class);


//Make a route which return view using controller
Route::get('index', [UserController::class, 'Index']);

//Just a basic view without any parameters
Route::get('Index1', function () {
    return view('admin\viewTest1');
});

//Pass parameters to view using with keyword
Route::get('Index2', function () {
    return view('admin\viewTest2')->with(['name' => 'Mohamed Gomaa', 'age' => 24]);
});

//Pass data to view with object
Route::get('Index3', function () {
    $obj = new stdClass();
    $obj->name = 'Mohamed Gomaa';
    $obj->age = 24;

    return view('admin\viewTest3', compact('obj'));
});

//Pass data to view with array
Route::get('Index4', function () {
    $data = [];
    $data['name'] = 'Mohamed Gomaa';
    $data['age'] = 24;

    return view('admin\viewTest4', $data);
});

//Repeat them again but passing data will be with controller
//Just a basic view without any parameters
Route::get('ControllerIndex1', [UserController::class, 'Index1'] );

//Pass parameters to view using with keyword
Route::get('ControllerIndex2', [UserController::class, 'Index2'] );

//Pass data to view with object
Route::get('ControllerIndex3', [UserController::class, 'Index3'] );

//Pass data to view with array
Route::get('ControllerIndex4', [UserController::class, 'Index4'] );


