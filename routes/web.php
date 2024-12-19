<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.search');
});

Route::get('/test', function(){
    return view('pages.result');
})->name('test');