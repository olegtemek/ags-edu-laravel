<?php

use App\Http\Controllers\admin\EducatorConroller;
use App\Http\Controllers\admin\EventController;
use App\Http\Controllers\admin\IndexController;
use App\Http\Controllers\admin\NewsController;
use App\Http\Controllers\admin\QuestionController;
use App\Http\Controllers\admin\VacancyController;
use App\Http\Controllers\AuthController;
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

Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [IndexController::class, 'index']);

    Route::group(['prefix' => 'news'], function () {
        Route::get('/{id}', [NewsController::class, 'index'])->name('news.index');
        Route::get('/{id}/create', [NewsController::class, 'create'])->name('news.create');
        Route::post('/', [NewsController::class, 'store'])->name('news.store');
        Route::get('/{id}/edit', [NewsController::class, 'edit'])->name('news.edit');
        Route::delete('/{id}', [NewsController::class, 'destroy'])->name('news.destroy');
        Route::put('/{id}', [NewsController::class, 'update'])->name('news.update');
    });
    Route::group(['prefix' => 'event'], function () {
        Route::get('/{id}', [EventController::class, 'index'])->name('event.index');
        Route::get('/{id}/create', [EventController::class, 'create'])->name('event.create');
        Route::post('/', [EventController::class, 'store'])->name('event.store');
        Route::get('/{id}/edit', [EventController::class, 'edit'])->name('event.edit');
        Route::delete('/{id}', [EventController::class, 'destroy'])->name('event.destroy');
        Route::put('/{id}', [EventController::class, 'update'])->name('event.update');
    });
    Route::group(['prefix' => 'educator'], function () {
        Route::get('/{id}', [EducatorConroller::class, 'index'])->name('educator.index');
        Route::get('/{id}/create', [EducatorConroller::class, 'create'])->name('educator.create');
        Route::post('/', [EducatorConroller::class, 'store'])->name('educator.store');
        Route::get('/{id}/edit', [EducatorConroller::class, 'edit'])->name('educator.edit');
        Route::delete('/{id}', [EducatorConroller::class, 'destroy'])->name('educator.destroy');
        Route::put('/{id}', [EducatorConroller::class, 'update'])->name('educator.update');
    });
    Route::resource('/question', QuestionController::class);
    Route::resource('vacancy', VacancyController::class);
});

Route::get('/login', [AuthController::class, 'loginView'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
