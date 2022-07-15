<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class DashController extends Controller
{
  public function index($locale)
  {
    return redirect(route('main', $locale));
  }
}
