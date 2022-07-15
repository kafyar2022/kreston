<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;

class AboutController extends Controller
{
  public function index($locale)
  {
    $data = Helper::getContents($locale, 'about');

    return view('pages.about.index', compact('data'));
  }

  public function advantage($locale)
  {
    return view('pages.about.advantage');
  }

  public function team($locale)
  {
    return view('pages.about.team');
  }
}
