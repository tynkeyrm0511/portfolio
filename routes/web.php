<?php

use Illuminate\Support\Facades\Route;

//Home
Route::get('/', function () {
    return view('home');
});
//About
Route::get('/about', function(){
    return view('about');
})->name('about');
//Projects
Route::get('/projects', function(){
    return view('projects');
})->name('projects');
//Contacts
Route::get('/contacts', function(){
    return view('contacts');
})->name('contacts');