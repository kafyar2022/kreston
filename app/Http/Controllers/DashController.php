<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Text;
use Illuminate\Http\Request;

class DashController extends Controller
{
  public function index()
  {
    return redirect(route('main'));
  }

  public function toggleState()
  {
    if (session('dashboard') == 'shown') {
      session()->put('dashboard', 'hidden');
    } else {
      session()->put('dashboard', 'shown');
    }
  }

  public function toggleMode()
  {
    if (session('editMode')) {
      session()->put('editMode', false);
    } else {
      session()->put('editMode', true);
    }

    return back();
  }

  public function updateContent(Request $request)
  {
    $content = Content::where('slug', $request->json('slug'))
      ->first();

    $content->content = $request->json('content');
    $content->update();

    return json_encode($content);
  }

  public function updateText(Request $request)
  {
    $text = Text::where('slug', $request->json('slug'))
      ->first();

    $text->text = $request->json('text');
    $text->update();

    return json_encode($text);
  }
}
