<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\RegulationsCategory;
use Illuminate\Http\Request;

class RegulationsController extends Controller
{
  public function index()
  {
    $locale = app()->getLocale();

    $data = Helper::getContents($locale, 'regulations');

    $data['regulation_categories'] = RegulationsCategory::where('locale', $locale)->get();

    return view('pages.regulations.index', compact('data'));
  }
}
