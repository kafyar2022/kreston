<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashController extends Controller
{
  public function index($locale)
  {
    return redirect(route('home', $locale));
  }
}
