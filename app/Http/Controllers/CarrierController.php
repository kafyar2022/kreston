<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class CarrierController extends Controller
{
  public function index()
  {
    $locale = app()->getLocale();

    $data = Helper::getContents($locale, 'carrier');

    $data['vacancies'] = Vacancy::where('locale', $locale)->get();

    return view('pages.carrier.index', compact('data'));
  }
}
