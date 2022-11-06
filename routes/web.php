<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\RecipeController;

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
    return view('welcome');
});

Route::controller(MemberController::class)->group(function () {
    Route::get('/members', 'index')->name('member.index');
    Route::get('/members/create', 'create')->name('member.create');
    Route::post('/members/store', 'store')->name('member.store');
});

Route::resource('recipes', RecipeController::class);