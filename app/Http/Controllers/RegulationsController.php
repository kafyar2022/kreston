<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;

class RegulationsController extends Controller
{
  public function index($locale)
  {
    $data = Helper::getContents($locale, 'regulations');

    return view('pages.regulations.index', compact('data'));
  }
}
