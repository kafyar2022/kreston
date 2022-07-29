<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\DirectionController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\RegulationsController;
use App\Http\Controllers\ServiceController;
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

Route::prefix(parseLocale())->group(function () {
  Route::get('/', [MainController::class, 'index'])->name('main');

  Route::get('/news', [NewsController::class, 'index'])->name('news');
  Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');
  Route::get('/regulations', [RegulationsController::class, 'index'])->name('regulations');

  Route::get('/about', [AboutController::class, 'index'])->name('about');
  Route::get('/about/advantage', [AboutController::class, 'advantage'])->name('about.advantage');
  Route::get('/about/team', [AboutController::class, 'team'])->name('about.team');
  Route::get('/services/{slug}', [ServiceController::class, 'index'])->name('services');
  Route::get('/directions/{slug}', [DirectionController::class, 'index'])->name('directions');
  Route::get('/experience', [ExperienceController::class, 'index'])->name('experience');
  Route::get('/contacts', [ContactController::class, 'index'])->name('contacts');
});

Route::post('/auth/check', [AuthController::class, 'check'])->name('auth.check');
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::get('/auth/login', [AuthController::class, 'login'])->name('auth.login');

Route::group(['middleware' => ['AuthCheck']], function () {
  Route::get('/dashboard', [DashController::class, 'index'])->name('dashboard');
  Route::get('/dashboard/toggle-state', [DashController::class, 'toggleState']);
  Route::get('/dashboard/toggle-mode', [DashController::class, 'toggleMode'])->name('mode');
  Route::post('/contents/update', [DashController::class, 'updateContent']);
  Route::post('/texts/update', [DashController::class, 'updateText']);

  Route::get('/banners', [BannerController::class, 'index'])->name('banners');
  Route::get('/banners/create', [BannerController::class, 'create'])->name('banners.create');
  Route::post('/banners/store', [BannerController::class, 'store'])->name('banners.store');
  Route::get('/banners/edit/{banner}', [BannerController::class, 'edit'])->name('banners.edit');
  Route::post('/banners/update', [BannerController::class, 'update'])->name('banners.update');
  Route::get('/banners/delete/{id}', [BannerController::class, 'delete'])->name('banners.delete');
});


function parseLocale()
{
  $locale = request()->segment(1);
  $locales = ['ru', 'en'];
  $default = config('app.fallback_locale');

  if ($locale !== $default && in_array($locale, $locales)) {
    app()->setLocale($locale);
    return $locale;
  }
}
