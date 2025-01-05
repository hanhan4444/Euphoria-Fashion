<?php

use App\Models\Collection;
use App\Models\HomePage;
use App\Models\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $homePage = HomePage::first();
    $collections = Collection::all();
    return view('home', compact('homePage', 'collections'));
});

Route::get('/about', function () {
    $homePage = HomePage::first();
    return view('about', compact('homePage'));
});

Route::get('/profile', function () {
    $profile = Profile::first();
    return view('profile', compact('profile') );
});

Route::get('/contact', function () {
    $profile = Profile::first();
    return view('contact', compact('profile'));
});
