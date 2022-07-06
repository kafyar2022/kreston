<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index($locale)
  {
    $data['banners'] = Banner::where('locale', $locale)
      ->get();

    return view('pages.home', compact('data'));
  }
}
