<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class DashController extends Controller
{
  public function index($locale)
  {
    return redirect(route('home', $locale));
  }

  public function updateContent(Request $request)
  {
    $content = Content::where('slug', $request->json('slug'))->first();
    $content->content = $request->json('content');
    $content->update();
  }
}
