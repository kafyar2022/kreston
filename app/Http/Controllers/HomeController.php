<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Banner;
use App\Models\News;
use App\Models\Partner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index($locale)
  {
    $data['contents'] = Helper::getContents($locale, 'home');

    $data['banners'] = Banner::where('locale', $locale)
      ->get();

    $data['partners'] = Partner::where('locale', $locale)
      ->get();

    $data['last-news'] = News::where('locale', $locale)
      ->latest()
      ->take(4)
      ->get();

    return view('pages.home', compact('data'));
  }
}
