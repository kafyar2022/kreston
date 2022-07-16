<!DOCTYPE html>
<html class="page" lang="{{ $locale }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta name="robots" content="noindex">
  <meta name="googlebot" content="noindex">

  <title>@yield('title')</title>

  <link rel="icon" href="{{ asset('favicon.ico') }}">
  <link rel="icon" href="{{ asset('favicon/icon.svg') }}" type="image/svg+xml">
  <link rel="apple-touch-icon" href="{{ asset('favicon/180x180.png') }}">
  <link rel="manifest" href="{{ asset('manifest.webmanifest') }}">

  <link rel="stylesheet" type="text/css" href="{{ asset('simditor/simditor.css') }}">
  <link rel="stylesheet" href="{{ asset('glide/glide.css') }}">
  <link rel="stylesheet" href="{{ mix('css/style.css') }}">
</head>

<body class="page__body">
  @include('layouts.sprites')

  @include('layouts.header')

  @yield('content')

  @include('layouts.footer')

  <script src="{{ asset('simditor/jquery.min.js') }}"></script>
  <script src="{{ asset('simditor/module.js') }}"></script>
  <script src="{{ asset('simditor/hotkeys.js') }}"></script>
  <script src="{{ asset('simditor/uploader.js') }}"></script>
  <script src="{{ asset('simditor/simditor.js') }}"></script>
  <script src="{{ asset('glide/glide.min.js') }}"></script>
  <script src="{{ asset('js/app.js') }}" type="module"></script>
  @yield('script')
</body>

</html>
