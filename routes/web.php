<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\CommentController;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/main', function () {
    return view('main');
})->middleware(['auth'])->name('main');

Route::resource('guide', GuideController::class);
Route::get('guide/create', [GuideController::class, 'create']);
Route::get('guide/{id}', [GuideController::class, 'show']);
Route::resource('comments', CommentController::class, ['except' => ['index', 'create']]);
Route::get('guide/{id}/comments', [CommentController::class, 'index']);
Route::get('guide/{id}/comments/create', [CommentController::class, 'create']);
Route::get('search', [GuideController::class, 'showSearch'])->name('guides.search');
Route::post('search', [GuideController::class, 'search']);
require __DIR__.'/auth.php';
