<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BlogController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//to welcome page
Route::get('/', [WelcomeController::class, 'index']) -> name('welcome.index');

// to the video game blog page

Route::get('/blog', [BlogController::class, 'index']) -> name('blog.index');

// to see selected blog post 
Route::get('/blog/selected-blog-post', [BlogController::class, 'show']) -> name('blog.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
