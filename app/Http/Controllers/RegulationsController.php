<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegulationsController extends Controller
{
  public function index()
  {
    return view('pages.regulations.index');
  }
}
