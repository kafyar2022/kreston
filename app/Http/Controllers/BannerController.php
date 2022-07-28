<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
  public function index(Request $request)
  {
    $locale = $request->locale ?? 'ru';

    $data['banners'] = Banner::where('locale', $locale)
      ->orderBy('id', 'asc')
      ->get();

    $data['locale'] = $locale;

    return view('dashboard.pages.banners.index', compact('data'));
  }

  public function create(Request $request)
  {
    $locale = $request->locale ?? 'ru';
    $data['locale'] = $locale;
    $data['banner'] = null;
    return view('dashboard.pages.banners.show', compact('data'));
  }

  public function store(Request $request)
  {
    $banner = new Banner();
    $banner->locale = $request->locale;

    $file = $request->file('img');
    if ($file) {
      $fileName = uniqid() . '.' . $file->extension();
      $file->move(public_path('files/banners/img'), $fileName);
      $banner->img = $fileName;
    }

    $banner->content = $request->content;
    $save  = $banner->save();

    if ($save) {
      return back()->with('success', 'Баннер успешно сохранен');
    }

    return back()->with('fail', 'Что-то пошло не так попробуйте позже');
  }

  public function edit(Banner $banner)
  {
    $data['banner'] = $banner;
    $data['locale'] = $banner->locale;
    return view('dashboard.pages.banners.show', compact('data'));
  }

  public function update(Request $request)
  {
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
    $update  = $banner->update();

    if ($update) {
      return back()->with('success', 'Баннер успешно сохранен');
    }

    return back()->with('fail', 'Что-то пошло не так попробуйте позже');
  }

  public function delete($id)
  {
    $banner = Banner::find($id);

    $banner->img && file_exists('files/banners/img/' . $banner->img)
      ? unlink('files/banners/img/' . $banner->img)
      : '';

    $banner->delete();

    return back();
  }
}
