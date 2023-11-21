<?php

use App\Http\Controllers\HomeController;
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

Route::get('/',[
    HomeController::class, 'index'
]);

Route::get('/app', function ()  {
return view('layout.app');
});

Route::get('/about', function ()  {
    return view('about');
    });

    Route::get('/achievements', function ()  {
        return view('achievements');
        });

        Route::get('/contact', function ()  {
            return view('contact');
            });

            Route::get('/history', function ()  {
                return view('history');
                });



