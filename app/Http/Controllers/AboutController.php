<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;

class AboutController extends Controller
{
  public function index()
  {
    $locale = app()->getLocale();

    $data = Helper::getContents($locale, 'about');

    return view('pages.about.index', compact('data'));
  }

  public function advantage()
  {
    $locale = app()->getLocale();
    
    $data = Helper::getContents($locale, 'about.advantage');

    return view('pages.about.advantage', compact('data'));
  }

  public function team()
  {
    $locale = app()->getLocale();

    $data = Helper::getContents($locale, 'about.team');

    return view('pages.about.team', compact('data'));
  }
}
