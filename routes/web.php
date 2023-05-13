<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/services', 'services')->name('services');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/blog/power-of-market-reserach', 'powerofMarketResearch')->name('power-of-market-reserach');
    Route::get('/blog/online-surveys', 'onlineSurveys')->name('online-surveys');
    Route::get('/blog/cunsumer-panel-for-market-research', 'panelMarketResearch')->name('cunsumer-panel-for-market-research');
});
Route::post('contact-us', [ContactController::class, 'store'])->name('contact-us');
