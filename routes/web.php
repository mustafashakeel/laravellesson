<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postsController;;

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

Route::get('/users', function () {
    return "<h2>Users</h2>";
});


Route::get('/contact', function () {

    $response = [];

    $response['name'] = 'John';
    $response['age'] = 30;
    return view('welcome', $response);
});

Route::get('post', [postsController::class, 'index']);
Route::get('greeting', function () {
    $response = [];

    $response['name'] = 'John';
    $response['age'] = 30;

    $people = ['John', 'Jane', 'Mary', 'Steve', 'Jack'];
    return view('greeting', compact('people'));
});
