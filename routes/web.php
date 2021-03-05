<?php

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
    return view('welcome');
});


Route::view('/dropdown', 'alpine.dropdown');
Route::view('/modals', 'alpine.modals');
Route::view('/sidebar', 'alpine.sidebar');
Route::view('/tabs', 'alpine.tabs');
Route::view('/image-selection', 'alpine.image_selection');
Route::view('/scroll-detection', 'alpine.scroll_detection');
Route::view('/accordion', 'alpine.accordion');
Route::view('/accordion2', 'alpine.accordion2');
Route::view('/quotes', 'alpine.quotes');
Route::view('/todo', 'alpine.todo');
Route::view('/transition-dropdown', 'alpine.transition_dropdown');
Route::view('/transition-modals', 'alpine.transition_modals');
Route::view('/transition-sidebar', 'alpine.transition_sidebar');
Route::view('/easy-transition-dropdown', 'alpine.easy_transition_dropdown');
Route::view('/type-effect-1', 'alpine.type_effect_1');
Route::view('/type-effect-2', 'alpine.type_effect_2');
Route::view('/type-effect-3', 'alpine.type_effect_3');
Route::view('/type-effect-4', 'alpine.type_effect_4');
Route::view('/type-effect-5', 'alpine.type_effect_5');

