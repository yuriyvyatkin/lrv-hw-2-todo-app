<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::resource('todo', TodoController::class)->only([
    'index', 'create', 'show'
]);

// Route::controller(TodoController::class)->prefix('/todo')->group(function() {
//     Route::get('/', 'index')->name('/');

//     Route::get('/store', 'store');

//     Route::get('/{id}','show')->whereNumber('id');
// });

// Route::fallback(function () {
//     return redirect('/');
// });

// return redirect()->route('post', ['id' => 1]);
// return redirect()->action([TestController::class, 'show']);
// return redirect('post/show2');
