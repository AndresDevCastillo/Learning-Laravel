<?php

use Illuminate\Support\Facades\Route;


Route::view('/service', 'service')->name('service');

Route::view('/home', 'home')->name('home');

Route::view('/about', 'about')->name('about');;

Route::view('/contact', 'contact')->name('contact');
