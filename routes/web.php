<?php

use App\Http\Controllers\PagineController;
use App\Http\Controllers\TachesController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[TachesController::class,'index'])->name('tache.index');
Route::post('/',[TachesController::class,'Rechercher'])->name('tache.rechercher');
Route::get('/create',[TachesController::class,'create'])->name('tache.create');
Route::post('/create',[TachesController::class,'store'])->name('tache.store');
Route::get('/edit/{id}',[TachesController::class,'edit'])->name('tache.edit');
Route::post('/edit/{id}',[TachesController::class,'update'])->name('tache.update');


Route::get('/show/{id}',[TachesController::class,'show'])->name('tache.show');
Route::get('tache/delete/{id}',[TachesController::class,'destroy'])->name('tache.destroy');

Route::get('/paginate',[PagineController::class,'index']);
