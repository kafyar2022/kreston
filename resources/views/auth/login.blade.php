<!DOCTYPE html>
<html class="page" lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="robots" content="noindex">
  <meta name="googlebot" content="noindex">

  <title>Вход | Kreston AC</title>

  <link rel="icon" href="{{ asset('favicon.ico') }}">
  <link rel="icon" href="{{ asset('favicon/icon.svg') }}" type="image/svg+xml">
  <link rel="apple-touch-icon" href="{{ asset('favicon/180x180.png') }}">
  <link rel="manifest" href="{{ asset('manifest.webmanifest') }}">

  <link rel="stylesheet" href="{{ mix('css/style.css') }}">
</head>

<body class="page__body">
  @include('layouts.sprites')

  <main class="login-page">
    <form class="login-form" action="{{ route('auth.check', $locale) }}" method="post">
      <h1 class="login-form__title">Вход</h1>
      @csrf
      <div class="login-form__element login-form__element--login">
        <label class="login-form__label">
          <input class="login-form__field" type="text" name="login" placeholder="example@domain.com" autocomplete="off" required data-pristine-required-message="Объязательное поле">
        </label>
        <div class="login-form__error login-form__error--login"></div>
      </div>
      <div class="login-form__element">
        <label class="login-form__label">
          <input class="login-form__field" type="password" name="password" placeholder="********" autocomplete="off" required data-pristine-required-message="Объязательное поле">
        </label>
        <div class="login-form__error login-form__error--password"></div>
      </div>

      <button class="login-form__submit" type="submit" disabled>
        Войти
        <svg class="login-form__submit-icon" width="10" height="16">
          <use xlink:href="#more-icon"></use>
        </svg>
      </button>
    </form>
  </main>

  <script src="{{ asset('pristine/pristine.min.js') }}"></script>
  <script src="{{ asset('js/pages/login-page.js') }}" type="module"></script>
</body>

</html>
