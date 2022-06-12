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
Route::view('G3-schoolrules', 'ages8-9/G3-schoolrules');
Route::view('G3-cleanliness', 'ages8-9/G3-cleanliness');
Route::view('G3-responsibility', 'ages8-9/G3-responsibility');
Route::view('G3-sharing', 'ages8-9/G3-sharing');
Route::view('G3-honesty', 'ages8-9/G3-honesty'); 
Route::view('G3-respect', 'ages8-9/G3-respect'); 
Route::view('G3-confidence', 'ages8-9/G3-confidence'); 
Route::view('G3-thanks-sorry', 'ages8-9/G3-thanks-sorry'); 
Route::view('G3-wasting', 'ages8-9/G3-wasting'); 
Route::view('G3-wasting', 'ages8-9/G3-wasting');



Route::view('/ages9-10', 'ages9-10/ages9-10');
Route::view('KG1-cleanliness1', 'ages9-10/G4-cleanliness1');
Route::view('G4-friendship', 'ages9-10/G4-friendship');
Route::view('G4-honesty', 'ages9-10/G4-honesty');
Route::view('G4-jealousy', 'ages9-10/G4-jealousy');
Route::view('G4-justice', 'ages9-10/G4-justice');
Route::view('G4-patience', 'ages9-10/G4-patience');
Route::view('G4-reading', 'ages9-10/G4-reading');
Route::view('G4-respect', 'ages9-10/G4-respect');
Route::view('G4-respect2', 'ages9-10/G4-respect2');
Route::view('G4-responsibility', 'ages9-10/G4-responsibility');
Route::view('G4-schoolrules', 'ages9-10/G4-schoolrules');
Route::view('G4-schoolsafetyrules', 'ages9-10/G4-schoolsafetyrules');
Route::view('G4-sharing', 'ages9-10/G4-sharing');
Route::view('G4-technology', 'ages9-10/G4-technology');
Route::view('G4-wasting', 'ages9-10/G4-wasting');
Route::view('G4-healtyfood', 'ages9-10/G4-healtyfood');

Route::view('/ages10-11', 'ages10-11/ages10-11');
Route::view('G5-cleanliness1', 'ages10-11/G5-cleanliness1');
Route::view('G5-friendship', 'ages10-11/G5-friendship');
Route::view('G5-honesty', 'ages10-11/G5-honesty');
Route::view('G5-jealousy', 'ages10-11/G5-jealousy');
Route::view('G5-justice', 'ages10-11/G5-justice');
Route::view('G5-patience', 'ages10-11/G5-patience');
Route::view('G5-reading', 'ages10-11/G5-reading');
Route::view('G5-respect', 'ages10-11/G5-respect');
Route::view('G5-respect2', 'ages10-11/G5-respect2');
Route::view('G5-responsibility', 'ages10-11/G5-responsibility');
Route::view('G5-schoolrules', 'ages10-11/G5-schoolrules');
Route::view('G5-sharing', 'ages10-11/G5-sharing');
Route::view('G5-technology', 'ages10-11/G5-technology');
Route::view('G5-wasting', 'ages10-11/G5-wasting');

Route::view('/ages11-12', 'ages11-12/ages11-12');
Route::view('G6-schoolrules', 'ages11-12/G6-schoolrules');
Route::view('G6-bulliying', 'ages11-12/G6-bulliying');
Route::view('G6-wasting', 'ages11-12/G6-wasting');
Route::view('G6-family', 'ages11-12/G6-family');
Route::view('G6-timemanagement', 'ages11-12/G6-timemanagement');
Route::view('G6-helping', 'ages11-12/G6-helping');
Route::view('G6-reading', 'ages11-12/G6-reading');
Route::view('G6-responsibility', 'ages11-12/G6-responsibility');
Route::view('G6-cleanliness', 'ages11-12/G6-cleanliness');


