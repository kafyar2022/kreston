<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
  public function index($slug)
  {
    $locale = app()->getLocale();

    $data = Helper::getContents($locale, 'services');
    $data['service'] = Service::where('slug', $slug)->first();

    return view('pages.services.index', compact('data'));
  }
}
