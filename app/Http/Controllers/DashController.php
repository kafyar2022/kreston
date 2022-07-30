<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Content;
use App\Models\Text;
use Illuminate\Http\Request;

class DashController extends Controller
{
  public function get(Request $request)
  {
    switch ($request->action) {
      case 'toggle-state':
        session('dashboard') == 'shown'
          ? session()->put('dashboard', 'hidden')
          : session()->put('dashboard', 'shown');

        break;

      case 'toggle-mode':
        session('editMode')
          ? session()->put('editMode', false)
          : session()->put('editMode', true);

        return back();

      default:
        return redirect(route('main'));
    }
  }

  public function post(Request $request)
  {
    switch ($request->action) {
      case 'update-content':
        $content = Content::where('slug', $request->json('slug'))->first();
        $content->content = $request->json('content');
        $content->update();

        return json_encode($content);

      case 'update-text':
        $text = Text::where('slug', $request->json('slug'))->first();
        $text->text = $request->json('text');
        $text->update();

        return json_encode($text);
    }
  }

  public function banners(Request $request)
  {
    switch ($request->action) {
      case 'create':
        $locale = $request->locale ?? 'ru';
        $data['locale'] = $locale;
        $data['banner'] = null;

        return view('dashboard.pages.banners.show', compact('data'));

      case 'edit':
        $banner = Banner::find($request->banner);
        $data['locale'] = $banner->locale;
        $data['banner'] = $banner;
        return view('dashboard.pages.banners.show', compact('data'));

      case 'delete':
        $banner = Banner::find($request->banner);
        $banner->img && file_exists('files/banners/img/' . $banner->img)
          ? unlink('files/banners/img/' . $banner->img)
          : '';
        $banner->delete();

        return back();

      default:
        $locale = $request->locale ?? 'ru';
        $data['banners'] = Banner::where('locale', $locale)->get();
        $data['locale'] = $locale;

        return view('dashboard.pages.banners.index', compact('data'));
    }
  }

  public function bannersPost(Request $request)
  {
    switch ($request->action) {
      case 'store':
        $banner = new Banner();
        $banner->locale = $request->locale;
        $file = $request->file('img');
        if ($file) {
          $fileName = uniqid() . '.' . $file->extension();
          $file->move(public_path('files/banners/img'), $fileName);
          $banner->img = $fileName;
        }
        $banner->content = $request->content;
        $banner->save();

        return back()->with('success', 'Баннер успешно сохранен');

      case 'update':
        $banner = Banner::find($request->id);
        $file = $request->file('img');
        if ($file) {
          $banner->img && file_exists('files/banners/img/' . $banner->img)
            ? unlink('files/banners/img/' . $banner->img)
            : '';
          $fileName = uniqid() . '.' . $file->extension();
          $file->move(public_path('files/banners/img'), $fileName);
          $banner->img = $fileName;
        }
        $banner->content = $request->content;
        $banner->update();

        return back()->with('success', 'Баннер успешно сохранен');
    }
  }
}
