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
  Route::get('/dashboard/{action?}', [DashController::class, 'get'])->name('dashboard');
  Route::post('/dashboard/{action?}', [DashController::class, 'post']);

  Route::get('/banners/{action?}/{banner?}', [DashController::class, 'banners'])->name('banners');
  Route::post('/banners/{ation?}', [DashController::class, 'bannersPost'])->name('banners.post');

  Route::get('/partners/{action?}/{partner?}', [DashController::class, 'partners'])->name('partners');
  Route::post('/partners/{action?}/', [DashController::class, 'partnersPost'])->name('partners.post');

  Route::get('/dash-news/{action?}/{news?}', [DashController::class, 'news'])->name('dashboard.news');
  Route::post('/dash-news/{action?}', [DashController::class, 'newsPost'])->name('news.post');

  Route::get('/dash-certificates/{action?}/{certificate?}', [DashController::class, 'certificates'])->name('dashboard.certificates');
  Route::post('/dash-certificates/{action?}', [DashController::class, 'certificatesPost'])->name('certificates.post');

  Route::get('/dash-specialists/{action?}/{specialist?}', [DashController::class, 'specialists'])->name('dashboard.specialists');
  Route::post('/dash-specialists/{action?}', [DashController::class, 'specialistsPost'])->name('specialists.post');

  Route::get('/dash-services/{action?}/{service?}', [DashController::class, 'services'])->name('dashboard.services');
  Route::post('/dash-services/{action?}', [DashController::class, 'servicesPost'])->name('services.post');

  Route::get('/dash-directions/{action?}/{direction?}', [DashController::class, 'directions'])->name('dashboard.directions');
  Route::post('/dash-directions/{action?}', [DashController::class, 'directionsPost'])->name('directions.post');
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
