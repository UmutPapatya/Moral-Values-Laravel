<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\Homepage;

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

Route::get('/',[Homepage::class,'index'])->name('homepage');
Route::view('/categories', 'categories');
Route::view('/about', 'about');
Route::view('/contact', 'contact');

Route::view('/ages6-7', 'ages6-7/ages6-7');
Route::view('topic-happy', 'ages6-7/topic-happy');
Route::view('topic-friendship', 'ages6-7/topic-friendship');


Route::view('/ages8-9', 'ages8-9/ages8-9');
Route::view('topic-cleanliness1', 'ages8-9/topic-cleanliness1');
Route::view('topic-friendship', 'ages8-9/topic-friendship');
Route::view('topic-honesty', 'ages8-9/topic-honesty');
Route::view('topic-jealousy', 'ages8-9/topic-jealousy');
Route::view('topic-justice', 'ages8-9/topic-justice');
Route::view('topic-patience', 'ages8-9/topic-patience');
Route::view('topic-reading', 'ages8-9/topic-reading');
Route::view('topic-respect', 'ages8-9/topic-respect');
Route::view('topic-respect2', 'ages8-9/topic-respect2');
Route::view('topic-responsibility', 'ages8-9/topic-responsibility');
Route::view('topic-schoolrules', 'ages8-9/topic-schoolrules');
Route::view('topic-schoolsafetyrules', 'ages8-9/topic-schoolsafetyrules');
Route::view('topic-sharing', 'ages8-9/topic-sharing');
Route::view('topic-technology', 'ages8-9/topic-technology');
Route::view('topic-wasting', 'ages8-9/topic-wasting');
Route::view('topic-healtyfood', 'ages8-9/topic-healtyfood');

Route::view('/ages10-11', 'ages10-11/ages10-11');
Route::view('topic--cleanliness1', 'ages10-11/topic--cleanliness1');
Route::view('topic--friendship', 'ages10-11/topic--friendship');
Route::view('topic--honesty', 'ages10-11/topic--honesty');
Route::view('topic--jealousy', 'ages10-11/topic--jealousy');
Route::view('topic--justice', 'ages10-11/topic--justice');
Route::view('topic--patience', 'ages10-11/topic--patience');
Route::view('topic--reading', 'ages10-11/topic--reading');
Route::view('topic--respect', 'ages10-11/topic--respect');
Route::view('topic--respect2', 'ages10-11/topic--respect2');
Route::view('topic--responsibility', 'ages10-11/topic--responsibility');
Route::view('topic--schoolrules', 'ages10-11/topic--schoolrules');
Route::view('topic--sharing', 'ages10-11/topic--sharing');
Route::view('topic--technology', 'ages10-11/topic--technology');
Route::view('topic--wasting', 'ages10-11/topic--wasting');

Route::view('/ages12-13', 'ages12-13/ages12-13');
Route::view('topic--bulliying', 'ages12-13/topic--bulliying');
