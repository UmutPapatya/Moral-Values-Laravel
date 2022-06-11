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

Route::view('/ages8-9', 'ages8-9/ages8-9');
Route::view('topic-happy', 'ages8-9/topic-happy');
Route::view('topic-friendship', 'ages8-9/topic-friendship');


Route::view('/ages9-10', 'ages9-10/ages9-10');
Route::view('KG1-cleanliness1', 'ages9-10/topic-cleanliness1');
Route::view('topic-friendship', 'ages9-10/topic-friendship');
Route::view('topic-honesty', 'ages9-10/topic-honesty');
Route::view('topic-jealousy', 'ages9-10/topic-jealousy');
Route::view('topic-justice', 'ages9-10/topic-justice');
Route::view('topic-patience', 'ages9-10/topic-patience');
Route::view('topic-reading', 'ages9-10/topic-reading');
Route::view('topic-respect', 'ages9-10/topic-respect');
Route::view('topic-respect2', 'ages9-10/topic-respect2');
Route::view('topic-responsibility', 'ages9-10/topic-responsibility');
Route::view('topic-schoolrules', 'ages9-10/topic-schoolrules');
Route::view('topic-schoolsafetyrules', 'ages9-10/topic-schoolsafetyrules');
Route::view('topic-sharing', 'ages9-10/topic-sharing');
Route::view('topic-technology', 'ages9-10/topic-technology');
Route::view('topic-wasting', 'ages9-10/topic-wasting');
Route::view('topic-healtyfood', 'ages9-10/topic-healtyfood');

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

Route::view('/ages11-12', 'ages11-12/ages11-12');
Route::view('topic---schoolrules', 'ages11-12/topic---schoolrules');
Route::view('topic---bulliying', 'ages11-12/topic---bulliying');
Route::view('topic---wasting', 'ages11-12/topic---wasting');
Route::view('topic---family', 'ages11-12/topic---family');
Route::view('topic---timemanagement', 'ages11-12/topic---timemanagement');
Route::view('topic---helping', 'ages11-12/topic---helping');
Route::view('topic---reading', 'ages11-12/topic---reading');
Route::view('topic---responsibility', 'ages11-12/topic---responsibility');
Route::view('topic---cleanliness', 'ages11-12/topic---cleanliness');


