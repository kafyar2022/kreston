<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Banner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index($locale)
  {
    $data['contents'] = Helper::getContents($locale, 'home');

    $data['banners'] = Banner::where('locale', $locale)
      ->get();

    return view('pages.home', compact('data'));
  }
}
