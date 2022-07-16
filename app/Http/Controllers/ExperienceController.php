<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Partner;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
  public function index($locale)
  {
    $data = Helper::getContents($locale, 'experience');

    $data['partners'] = Partner::where('locale', $locale)
      ->get();

    return view('pages.experience.index', compact('data'));
  }
}
