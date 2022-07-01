<!DOCTYPE html>
<html class="page" lang="{{ $locale }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="robots" content="noindex">
  <meta name="googlebot" content="noindex">

  <title>@yield('title')</title>

  {{-- <link rel="stylesheet" href="{{ mix('css/style.css') }}"> --}}

  <link rel="icon" href="{{ asset('favicon.ico') }}">
  <link rel="icon" href="{{ asset('favicon/icon.svg') }}" type="image/svg+xml">
  <link rel="apple-touch-icon" href="{{ asset('favicon/180x180.png') }}">
  <link rel="manifest" href="{{ asset('manifest.webmanifest') }}">
</head>

<body class="page__body">
  @include('layouts.header')

  @yield('content')

  @include('layouts.footer')

  <script src="{{ asset('js/main.js') }}"></script>
  @yield('script')
</body>

</html>
