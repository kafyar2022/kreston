<?php

namespace App\Providers;

use App\Models\Service;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   *
   * @return void
   */
  public function register()
  {
    //
  }

  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {
    Schema::defaultStringLength(191);
    Paginator::useBootstrap();

    view()->composer('*', function ($view) {
      $services = Service::select('slug', 'locale', 'title')
        ->where('locale', app()->getLocale())
        ->get();

      return $view->with([
        'route' => \Route::currentRouteName(),
        'locale' => app()->getLocale(),
        'services' => $services,
      ]);
    });
  }
}
