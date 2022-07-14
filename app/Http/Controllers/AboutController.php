<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;

class AboutController extends Controller
{
  public function index($locale)
  {
    $data = Helper::getContents($locale, 'about');

    return view('pages.about', compact('data'));
  }
}
