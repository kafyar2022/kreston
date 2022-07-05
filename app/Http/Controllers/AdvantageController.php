<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvantageController extends Controller
{
  public function index()
  {
    return view('pages.advantage');
  }
}
