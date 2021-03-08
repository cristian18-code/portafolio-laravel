<?php

use Illuminate\Auth\user;
use Illuminate\Contracts\View\with;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::resource('portafolio', ProjectsController::class)
	->names('projects')
	->parameters(['portafolio'=>'id']);

App::setLocale('es');

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');

Route::view('/contact', 'contact')->name('contact');
Route::post('contact', [ContactController::class, 'store'])->name('contact.message');


Auth::routes(['register'=>false]);