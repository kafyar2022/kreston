<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Direction;
use Illuminate\Http\Request;

class DirectionController extends Controller
{
  public function index($slug)
  {
    $locale = app()->getLocale();

    $data = Helper::getContents($locale, 'directions');
    $data['direction'] = Direction::where('slug', $slug)->first();

    return view('pages.directions.index', compact('data'));
  }
}
