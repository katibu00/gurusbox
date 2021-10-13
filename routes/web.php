<?php

use App\Http\Controllers\FrontPageController;
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
    return view('front.index');
});

// Route::get('/back', function () {
//     return view('back.admin.index');
// });

Route::get('/home', [FrontPageController::class, 'home'])->name('home');
Route::get('/about-us', [FrontPageController::class, 'about'])->name('about');
Route::get('/contact-us', [FrontPageController::class, 'contact'])->name('contact');
Route::get('/blog', [FrontPageController::class, 'blog'])->name('blog');
Route::get('/courses', [FrontPageController::class, 'courses'])->name('courses');
Route::get('/course/details/{id}', [FrontPageController::class, 'details'])->name('details');
Route::get('/teachers', [FrontPageController::class, 'teachers'])->name('teachers');


Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function(){


});
