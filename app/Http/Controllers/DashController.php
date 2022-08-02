<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Banner;
use App\Models\Certificate;
use App\Models\Content;
use App\Models\Direction;
use App\Models\News;
use App\Models\Partner;
use App\Models\Regulation;
use App\Models\RegulationsCategory;
use App\Models\Service;
use App\Models\Specialist;
use App\Models\Text;
use Cviebrock\EloquentSluggable\Services\SlugService;
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

  public function partners(Request $request)
  {
    switch ($request->action) {
      case 'create':
        $locale = $request->locale ?? 'ru';
        $data['locale'] = $locale;
        $data['partner'] = null;

        return view('dashboard.pages.partners.show', compact('data'));

      case 'edit':
        $partner = Partner::find($request->partner);
        $data['locale'] = $partner->locale;
        $data['partner'] = $partner;
        return view('dashboard.pages.partners.show', compact('data'));

      case 'delete':
        $partner = Partner::find($request->partner);
        $partner->logo && file_exists('files/partners/img/' . $partner->logo)
          ? unlink('files/partners/img/' . $partner->logo)
          : '';
        $partner->delete();

        return back();

      default:
        $locale = $request->locale ?? 'ru';
        $data['locale'] = $locale;
        $data['partners'] = Partner::where('locale', $locale)->get();

        return view('dashboard.pages.partners.index', compact('data'));
    }
  }

  public function partnersPost(Request $request)
  {
    $request->validate(['title' => 'required']);

    switch ($request->action) {
      case 'store':
        $partner = new Partner();
        $partner->locale = $request->locale;
        $partner->title = $request->title;
        $file = $request->file('logo');
        if ($file) {
          $fileName = SlugService::createSlug(Partner::class, 'logo', $partner->title) . '.' . $file->extension();
          $file->move(public_path('files/partners/img'), $fileName);
          $partner->logo = $fileName;
        }
        $partner->url = $request->url;
        $partner->save();

        return back()->with('success', 'Компания успешно сохранена');

      case 'update':
        $partner = Partner::find($request->id);
        $partner->title = $request->title;
        $file = $request->file('logo');
        if ($file) {
          $partner->logo && file_exists('files/partners/img/' . $partner->logo)
            ? unlink('files/partners/img/' . $partner->logo)
            : '';
          $fileName = SlugService::createSlug(Partner::class, 'logo', $partner->title) . '.' . $file->extension();
          $file->move(public_path('files/partners/img'), $fileName);
          $partner->logo = $fileName;
        }
        $partner->url = $request->url;
        $partner->update();

        return back()->with('success', 'Компания успешно сохранена');
    }
  }

  public function news(Request $request)
  {
    switch ($request->action) {
      case 'create':
        $locale = $request->locale ?? 'ru';
        $data['locale'] = $locale;
        $data['news'] = null;

        return view('dashboard.pages.news.show', compact('data'));

      case 'edit':
        $news = News::find($request->news);
        $data['locale'] = $news->locale;
        $data['news'] = $news;
        return view('dashboard.pages.news.show', compact('data'));

      case 'delete':
        $news = News::find($request->news);
        if ($news->img) {
          unlink('files/news/img/' . $news->img);
          unlink('files/news/img/thumbs/' . $news->img);
        }
        $news->delete();

        return back();

      default:
        $locale = $request->locale ?? 'ru';
        $data['locale'] = $locale;
        $data['news'] = News::where('locale', $locale)->get();

        return view('dashboard.pages.news.index', compact('data'));
    }
  }

  public function newsPost(Request $request)
  {
    $request->validate(['title' => 'required']);

    switch ($request->action) {
      case 'store':
        $news = new News();
        $news->locale = $request->locale;
        $news->title = $request->title;
        $news->slug = SlugService::createSlug(News::class, 'slug', $news->title);
        $news->content = $request->content;

        $file = $request->file('img');
        if ($file) {
          $fileName = $news->slug . '.' . $file->extension();
          $file->move(public_path('files/news/img'), $fileName);
          Helper::resize_crop_image(270, 220, public_path('files/news/img/' . $fileName), public_path('files/news/img/thumbs/' . $fileName));
          $news->img = $fileName;
        }

        $news->save();

        return back()->with('success', 'Новость успешно сохранена');

      case 'update':
        $news = News::find($request->id);
        $news->title = $request->title;
        $news->content = $request->content;
        $file = $request->file('img');
        if ($file) {
          if ($news->img && file_exists('files/news/img/' . $news->img)) {
            unlink('files/news/img/' . $news->img);
            unlink('files/news/img/thumbs/' . $news->img);
          }
          $fileName = $news->slug . '.' . $file->extension();
          $file->move(public_path('files/news/img'), $fileName);
          Helper::resize_crop_image(270, 220, public_path('files/news/img/' . $fileName), public_path('files/news/img/thumbs/' . $fileName));
          $news->img = $fileName;
        }
        $news->update();

        return back()->with('success', 'Новость успешно сохранена');
    }
  }

  public function certificates(Request $request)
  {
    switch ($request->action) {
      case 'create':
        $locale = $request->locale ?? 'ru';
        $data['locale'] = $locale;
        $data['certificate'] = null;

        return view('dashboard.pages.certificates.show', compact('data'));

      case 'edit':
        $certificate = Certificate::find($request->certificate);
        $data['locale'] = $certificate->locale;
        $data['certificate'] = $certificate;
        return view('dashboard.pages.certificates.show', compact('data'));

      case 'delete':
        $certificate = Certificate::find($request->certificate);
        $certificate->img && file_exists('files/certificates/img/' . $certificate->img)
          ? unlink('files/certificates/img/' . $certificate->img)
          : '';
        $certificate->delete();

        return back();

      default:
        $locale = $request->locale ?? 'ru';
        $data['locale'] = $locale;
        $data['certificates'] = Certificate::where('locale', $locale)->get();

        return view('dashboard.pages.certificates.index', compact('data'));
    }
  }

  public function certificatesPost(Request $request)
  {
    $request->validate(['title' => 'required']);

    switch ($request->action) {
      case 'store':
        $certificate = new Certificate();
        $certificate->locale = $request->locale;
        $certificate->title = $request->title;
        $certificate->description = $request->description;

        $file = $request->file('img');
        if ($file) {
          $fileName = uniqid() . '.' . $file->extension();
          $file->move(public_path('files/certificates/img'), $fileName);
          $certificate->img = $fileName;
        }

        $certificate->save();

        return back()->with('success', 'Сертификат успешно сохранен');

      case 'update':
        $certificate = Certificate::find($request->id);
        $certificate->title = $request->title;
        $certificate->description = $request->description;
        $file = $request->file('img');
        if ($file) {
          if ($certificate->img && file_exists('files/certificates/img/' . $certificate->img)) {
            unlink('files/certificates/img/' . $certificate->img);
          }
          $fileName = uniqid() . '.' . $file->extension();
          $file->move(public_path('files/certificates/img'), $fileName);
          $certificate->img = $fileName;
        }
        $certificate->update();

        return back()->with('success', 'Сертификат успешно сохранен');
    }
  }

  public function specialists(Request $request)
  {
    switch ($request->action) {
      case 'create':
        $locale = $request->locale ?? 'ru';
        $data['locale'] = $locale;
        $data['specialist'] = null;

        return view('dashboard.pages.specialists.show', compact('data'));

      case 'edit':
        $specialist = Specialist::find($request->specialist);
        $data['locale'] = $specialist->locale;
        $data['specialist'] = $specialist;
        return view('dashboard.pages.specialists.show', compact('data'));

      case 'delete':
        $specialist = Specialist::find($request->specialist);
        $specialist->avatar && file_exists('files/specialists/img/' . $specialist->avatar)
          ? unlink('files/specialists/img/' . $specialist->avatar)
          : '';
        $specialist->cv && file_exists('files/specialists/' . $specialist->cv)
          ? unlink('files/specialists/' . $specialist->cv)
          : '';
        $specialist->delete();

        return back();

      default:
        $locale = $request->locale ?? 'ru';
        $data['locale'] = $locale;
        $data['specialists'] = Specialist::where('locale', $locale)->get();

        return view('dashboard.pages.specialists.index', compact('data'));
    }
  }

  public function specialistsPost(Request $request)
  {
    $request->validate(['name' => 'required']);

    switch ($request->action) {
      case 'store':
        $specialist = new Specialist();
        $specialist->locale = $request->locale;
        $specialist->name = $request->name;
        $specialist->position = $request->position;
        $specialist->slug = SlugService::createSlug(Specialist::class, 'slug', $specialist->name);

        $file = $request->file('avatar');
        if ($file) {
          $fileName = $specialist->slug . '.' . $file->extension();
          $file->move(public_path('files/specialists/img'), $fileName);
          $specialist->avatar = $fileName;
        }
        $file = $request->file('cv');
        if ($file) {
          $fileName = $specialist->slug . '.' . $file->extension();
          $file->move(public_path('files/specialists'), $fileName);
          $specialist->cv = $fileName;
        }
        $specialist->save();

        return back()->with('success', 'Данные успешно сохранены');

      case 'update':
        $specialist = Specialist::find($request->id);
        $specialist->name = $request->name;
        $specialist->position = $request->position;
        $file = $request->file('avatar');
        if ($file) {
          if ($specialist->avatar && file_exists('files/specialists/img/' . $specialist->avatar)) {
            unlink('files/specialists/img/' . $specialist->avatar);
          }
          $fileName = $specialist->slug . '.' . $file->extension();
          $file->move(public_path('files/specialists/img'), $fileName);
          $specialist->avatar = $fileName;
        }
        $file = $request->file('cv');
        if ($file) {
          if ($specialist->cv && file_exists('files/specialists/' . $specialist->cv)) {
            unlink('files/specialists/' . $specialist->cv);
          }
          $fileName = $specialist->slug . '.' . $file->extension();
          $file->move(public_path('files/specialists'), $fileName);
          $specialist->cv = $fileName;
        }
        $specialist->update();

        return back()->with('success', 'Данные успешно сохранены');
    }
  }

  public function services(Request $request)
  {
    switch ($request->action) {
      case 'create':
        $locale = $request->locale ?? 'ru';
        $data['locale'] = $locale;
        $data['service'] = null;

        return view('dashboard.pages.services.show', compact('data'));

      case 'edit':
        $service = Service::find($request->service);
        $data['locale'] = $service->locale;
        $data['service'] = $service;
        return view('dashboard.pages.services.show', compact('data'));

      case 'delete':
        $service = Service::find($request->service);
        $service->delete();

        return back();

      default:
        $locale = $request->locale ?? 'ru';
        $data['locale'] = $locale;
        $data['services'] = Service::where('locale', $locale)->get();

        return view('dashboard.pages.services.index', compact('data'));
    }
  }

  public function servicesPost(Request $request)
  {
    $request->validate(['title' => 'required']);

    switch ($request->action) {
      case 'store':
        $service = new Service();
        $service->locale = $request->locale;
        $service->title = $request->title;
        $service->slug = SlugService::createSlug(News::class, 'slug', $service->title);
        $service->content = $request->content;
        $service->block = $request->block;
        $service->save();

        return back()->with('success', 'Услуга успешно сохранена');

      case 'update':
        $service = Service::find($request->id);
        $service->title = $request->title;
        $service->content = $request->content;
        $service->block = $request->block;
        $service->update();

        return back()->with('success', 'Услуга успешно сохранена');
    }
  }

  public function directions(Request $request)
  {
    switch ($request->action) {
      case 'create':
        $locale = $request->locale ?? 'ru';
        $data['locale'] = $locale;
        $data['direction'] = null;

        return view('dashboard.pages.directions.show', compact('data'));

      case 'edit':
        $direction = Direction::find($request->direction);
        $data['locale'] = $direction->locale;
        $data['direction'] = $direction;
        return view('dashboard.pages.directions.show', compact('data'));

      case 'delete':
        $direction = Direction::find($request->direction);
        $direction->img && file_exists('files/directions/img/' . $direction->img)
          ? unlink('files/directions/img/' . $direction->img)
          : '';
        $direction->delete();

        return back();

      default:
        $locale = $request->locale ?? 'ru';
        $data['locale'] = $locale;
        $data['directions'] = Direction::where('locale', $locale)->get();

        return view('dashboard.pages.directions.index', compact('data'));
    }
  }

  public function directionsPost(Request $request)
  {
    $request->validate(['title' => 'required']);

    switch ($request->action) {
      case 'store':
        $direction = new Direction();
        $direction->locale = $request->locale;
        $direction->title = $request->title;
        $direction->slug = SlugService::createSlug(Direction::class, 'slug', $direction->title);
        $file = $request->file('img');
        if ($file) {
          $fileName = $direction->slug . '.' . $file->extension();
          $file->move(public_path('files/directions/img'), $fileName);
          $direction->img = $fileName;
        }
        $direction->content = $request->content;
        $direction->save();

        return back()->with('success', 'Данные успешно сохранены');

      case 'update':
        $direction = Direction::find($request->id);
        $direction->title = $request->title;
        $file = $request->file('img');
        if ($file) {
          if ($direction->img && file_exists('files/directions/img/' . $direction->img)) {
            unlink('files/directions/img/' . $direction->img);
          }
          $fileName = $direction->slug . '.' . $file->extension();
          $file->move(public_path('files/directions/img'), $fileName);
          $direction->img = $fileName;
        }
        $direction->content = $request->content;
        $direction->update();

        return back()->with('success', 'Данные успешно сохранены');
    }
  }

  public function regulations(Request $request)
  {
    $locale = $request->locale ?? 'ru';
    $data['locale'] = $locale;
    $data['regulation_categories'] = RegulationsCategory::where('locale', $locale)->get();

    return view('dashboard.pages.regulations.index', compact('data'));
  }

  public function regulationsPost(Request $request)
  {
    switch ($request->action) {
      case 'store':
        $regulation = new Regulation();
        $regulation->locale = $request->locale;
        $regulation->title = $request->title;
        $regulation->category_id = $request->category_id;
        $file = $request->file('file');
        if ($file) {
          $fileName = uniqid() . '.' . $file->extension();
          $file->move(public_path('files/regulations'), $fileName);
          $regulation->filename = $fileName;
        }
        $regulation->save();

        return;

      case 'update':
        $regulation = Regulation::find($request->id);
        $regulation->title = $request->title;
        $file = $request->file('file');
        if ($file) {
          if ($regulation->filename && file_exists('files/regulations/' . $regulation->filename)) {
            unlink('files/regulations/' . $regulation->filename);
          }
          $fileName = uniqid() . '.' . $file->extension();
          $file->move(public_path('files/regulations'), $fileName);
          $regulation->filename = $fileName;
        }
        $regulation->update();
        break;

      case 'destroy':
        $regulation = Regulation::find($request->json('id'));
        if ($regulation->filename && file_exists('files/regulations/' . $regulation->filename)) {
          unlink('files/regulations/' . $regulation->filename);
        }
        $regulation->delete();
        return;

      case 'store-category':
        RegulationsCategory::create([
          'locale' => $request->json('locale'),
          'title' => $request->json('category'),
        ]);
        return;

      case 'update-category':
        $category = RegulationsCategory::find($request->json('id'));
        $category->title = $request->json('category');
        $category->save();
        return;

      case 'destroy-category':
        $category = RegulationsCategory::find($request->json('id'));
        $category->delete();
        return;
    }
  }
}
