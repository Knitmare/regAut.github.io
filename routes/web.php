<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\autoController;
use App\Http\Controllers\titularController;
use App\Http\Controllers\infraccionController;
use App\http\Controllers\ProfileController;
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
 Route::get('welcome', function () {
    return view('welcome');
});
route::get('/',[homeController::class,'index'])->name('index');

// route::get('/infracciones',[infraccionController::class,'index'])->name('infracciones');
// 
// route::get('/infracciones/store',[infraccionController::class,'store']);
// route::get('/infracciones/show/{slug}',[infraccionController::class,'show']);
// 
// route::get('/infracciones/update/{slug}',[infraccionController::class,'update']);
// 
route::resource('infracciones',infraccionController::class)->except(['edit'],['create'],['destroy']);

// route::get('/auto',[autoController::class,'index'])->name('auto');
// 
// route::get('/auto/store',[autoController::class,'store']);
// route::get('/auto/show/{slug}',[autoController::class,'show']);

// route::get('/auto/update/{slug}',[autoController::class,'update']);
// 
route::resource('auto',autoController::class)->except(['edit'],['create'],['destroy']);

// route::get('/titular',[titularController::class,'index'])->name('titular');
//;
// route::get('/titular/store',[titularController::class,'store']);
// route::get('/titular/show/{slug}',[titularController::class,'show']);
// 
// route::get('/titular/update/{slug}',[titularController::class,'update']);
// route::get('/titular/destroy',[titularController::class,'destroy']);
route::resource('titular',titularController::class)->except(['edit'],['create'],['destroy']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    route::get('/auto/{auto}/edit',[autoController::class,'edit'])->name('auto.edit');
    route::get('/auto/create',[autoController::class,'create'])->name('auto.create');
    //route::delete('/auto/{slug}/destroy',[autoController::class,'destroy'])->name('auto.destroy');
    route::get('/titular/create',[titularController::class,'create'])->name('titCreate');
    route::get('/titular/{titular}/edit',[titularController::class,'edit'])->name('titEdit');
    route::get('/infracciones/{infraccion}/edit',[infraccionController::class,'edit'])->name('infEdit');
    route::get('/infracciones/create',[infraccionController::class,'create'])->name('infCreate');
    route::delete('/infracciones/{infraccion}/destroy',[infraccionController::class,'destroy'])->name('infracciones.destroy');
});

require __DIR__.'/auth.php';
