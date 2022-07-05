<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdvantageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\DirectionController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\RegulationsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
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

Route::redirect('/', '/ru');

Route::group(['prefix' => '{locale}'], function () {
  Route::get('/', [HomeController::class, 'index'])->name('home');
  Route::get('/regulations', [RegulationsController::class, 'index'])->name('regulations');

  Route::get('/news', [NewsController::class, 'index'])->name('news');
  Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');

  Route::get('/about', [AboutController::class, 'index'])->name('about');
  Route::get('/advantage', [AdvantageController::class, 'index'])->name('advantage');
  Route::get('/team', [TeamController::class, 'index'])->name('team');
  Route::get('/partners', [PartnerController::class, 'index'])->name('partners');
  Route::get('/service/{slug}', [ServiceController::class, 'index'])->name('service');
  Route::get('/direction/{slug}', [DirectionController::class, 'index'])->name('direction');
  Route::get('/experience', [ExperienceController::class, 'index'])->name('experience');
  Route::get('/contacts', [ContactController::class, 'index'])->name('contacts');

  Route::post('/auth/check', [AuthController::class, 'check'])->name('auth.check');
  Route::get('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');
  Route::get('/auth/login', [AuthController::class, 'login'])->name('auth.login');

  Route::group(['middleware' => ['AuthCheck']], function () {
    Route::get('/dashboard', [DashController::class, 'index'])->name('dashboard');
  });
});
