<!DOCTYPE html>
<html class="page" lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="robots" content="noindex">
  <meta name="googlebot" content="noindex">

  <title>Панель управления сайтом | Kreston AC</title>

  <link rel="icon" href="{{ asset('favicon.ico') }}">
  <link rel="icon" href="{{ asset('favicon/icon.svg') }}" type="image/svg+xml">
  <link rel="apple-touch-icon" href="{{ asset('favicon/180x180.png') }}">
  <link rel="manifest" href="{{ asset('manifest.webmanifest') }}">

  <link rel="stylesheet" href="{{ asset('simditor/simditor.css') }}">
  <link rel="stylesheet" href="{{ mix('css/style.css') }}">
</head>

<body class="page__body page__body--admin">
  @include('layouts.sprites')

  @include('dashboard.layouts.dashboard')

  @yield('content')

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="{{ asset('simditor/module.js') }}"></script>
  <script src="{{ asset('simditor/hotkeys.js') }}"></script>
  <script src="{{ asset('simditor/uploader.js') }}"></script>
  <script src="{{ asset('simditor/simditor.js') }}"></script>
  <script src="{{ asset('pristine/pristine.min.js') }}"></script>
  <script src="{{ asset('js/admin.js') }}" type="module"></script>
  @yield('script')
</body>

</html>
