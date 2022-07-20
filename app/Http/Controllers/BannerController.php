<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
  public function index($locale)
  {
    $data['banners'] = Banner::where('locale', $locale)
      ->orderBy('id', 'asc')
      ->get();

    $data['locale'] = $locale;

    return view('dashboard.pages.banners.index', compact('data'));
  }

  public function create()
  {
    return view('dashboard.pages.banners.show');
  }
}
