<form class="feedback-form">
  <h2 class="feedback-form__title">@lang('Получите бесплатную <br> консультацию')</h2>

  <label class="feedback-form__label">
    <span class="visually-hidden">@lang('Ваше имя')</span>
    <input class="feedback-form__field" type="text" name="name" placeholder="@lang('Неопознанный Енот')" value="@lang('Ваше имя')" required>
  </label>
  <label class="feedback-form__label">
    <span class="visually-hidden">@lang('Номер телефона')</span>
    <input class="feedback-form__field" type="tel" name="tel" placeholder="+992 987-65-43-21" value="@lang('Номер телефона')" required>
  </label>
  <label class="feedback-form__label">
    <span class="visually-hidden">@lang('Электронная почта')</span>
    <input class="feedback-form__field" type="email" name="email" placeholder="example@gmail.com" value="@lang('Электронная почта')" required>
  </label>

  <div class="feedback-form__footer">
    <p class="feedback-form__aware">@lang('Нажимая «Отправить», вы соглашаетесь предоставить Вашу информацию Kreston AC на обработку.')</p>
    <button class="feedback-form__button button button--more">@lang('Отправить')</button>
  </div>
</form>
