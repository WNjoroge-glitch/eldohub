<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

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

Route::get('/about-us', function () {
    $title = 'About us';
    return view('eldohub.about-us', ['title'=> $title]);
})->name('about-us');

Route::get('/programs', function () {
    $title = 'Programs';
    return view('eldohub.programs', ['title'=> $title]);
})->name('programs');

Route::get('/trainings', function () {
    $title = 'Training';
    return view('eldohub.trainings', ['title'=> $title]);
})->name('trainings');

Route::get('/blog', [PostController::class, 'index'])->name('blog');

Route::get('/blog/{slug}', [PostController::class, 'show']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
