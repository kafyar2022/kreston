const headers = {
  'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
};
const formEl = document.querySelector('.login-form');
const loginFieldEl = formEl.querySelector('input[name="login"]');
const loginFailEl = formEl.querySelector('.login-form__error--login');
const passwordFieldEl = formEl.querySelector('input[name="password"]');
const passwordFailEl = formEl.querySelector('.login-form__error--password');
const submitEl = formEl.querySelector('button[type="submit"]');

const Message = {
  NOT_FOUND: 'not found',
  NOT_MATCHED: 'not matched',
  SUCCESS: 'success'
}

const pristine = window.Pristine(formEl, {
  classTo: 'login-form__element',
  errorClass: 'login-form__element--invalid',
  successClass: 'login-form__element--valid',
  errorTextParent: 'login-form__element',
  errorTextTag: 'div',
  errorTextClass: 'login-form__error'
}, true);

const initLoginForm = () => {
  formEl.addEventListener('input', () => {
    loginFailEl.textContent = '';
    passwordFailEl.textContent = '';

    loginFieldEl.value && passwordFieldEl.value
      ? submitEl.removeAttribute('disabled')
      : submitEl.setAttribute('disabled', 'disabled');
  });

  formEl.addEventListener('submit', (evt) => {
    evt.preventDefault();

    const isValid = pristine.validate();
    if (isValid) {
      submitEl.setAttribute('disabled', 'disabled');
      submitEl.textContent = 'Вхожу...';

      fetch(formEl.action, {
        headers,
        method: evt.target.method,
        body: new FormData(evt.target)
      })
        .then((response) => response.json())
        .then((response) => {
          switch (response.message) {
            case Message.NOT_FOUND:
              loginFailEl.textContent = 'Мы не узнаем ваш логин';
              break;
            case Message.NOT_MATCHED:
              passwordFailEl.textContent = 'Неверный пароль';
              break;
            case Message.SUCCESS:
              window.location.href = '/';
              break;
          }
          submitEl.innerHTML = 'Войти<svg class="login-form__submit-icon" width="10" height="16"><use xlink:href="#more-icon"></use></svg>';
        })
        .catch((error) => console.error(error));
    }
  });
}

export { initLoginForm };
