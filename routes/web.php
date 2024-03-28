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

// Route Group
Route::middleware(['auth'])->group(function () {
    Route::get('/', \App\Livewire\Home::class)->name('home');
    Route::get('/about', \App\Livewire\About::class)->name('about');
    Route::get('/contact', \App\Livewire\Contact::class)->name('contact');
    // Route::get('/post', \App\Livewire\Post\Index::class)->name('post.index');
    Route::get('/timeline', \App\Livewire\Timeline::class)->name('timeline');
    Route::get('/users', \App\Livewire\Users\Index::class)->name('user.index');
    Route::get('/users/{user}', \App\Livewire\Users\Show::class)->name('user.show');
});

Route::get('/login', \App\Livewire\Login::class)->name('login')->middleware('guest');
