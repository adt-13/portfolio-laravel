<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/projects', 'projects')->name('projects');
Route::view('/skills', 'skills')->name('skills');
Route::view('/contact', 'contact')->name('contact');
