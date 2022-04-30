<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
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

// to create a blog post
Route::get('/blog/create', [BlogController::class, 'create']) -> name('blog.create');

// to see selected blog post 
Route::get('/blog/{post:slug}', [BlogController::class, 'show']) -> name('blog.show');

// to edit a blog post
Route::get('/blog/{post}/edit}', [BlogController::class, 'edit']) -> name('blog.edit');

// to update a blog post
Route::put('/blog/{post}', [BlogController::class, 'update']) -> name('blog.update');

// to delete a blog post
Route::delete('/blog/{post}', [BlogController::class, 'destroy']) -> name('blog.destroy');

// to store a users blog to database
Route::post('/blog', [BlogController::class, 'store']) -> name('blog.store');

//Category resource controller
Route::resource('/categories', CategoryController::class);

//
// Route::get('/linkstorage', function () {
//     Artisan::call('storage:link');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/foo', function() {
    Artisan::call('storage:link');
});