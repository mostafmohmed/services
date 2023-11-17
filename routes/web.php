<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\settingsController;
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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
Route::prefix('/')->name('front')->group(
    function (){
        Route::view('','front.index');
        Route::view('about','front.about');
        Route::view('about','front.project');
    }
);

Route::prefix('/admin/')->name('admin')->group(
    function (){
        Route::middleware('admin')->group( function(){
            Route::view('e','admin.index');
            Route::resource('settengs',settingsController::class);
            Route::view('skills','admin.skills.index');
            Route::view('subsqruber','admin.subsqruber.index');
            Route::view('counter','admin.counter.indexx');
            Route::view('service','admin.servic.index');
            

        } );
        
        Route::view('login','admin.auth.login')->middleware('guest:Admin')->  name('admin.login');
       
    }
);

require __DIR__.'/auth.php';
