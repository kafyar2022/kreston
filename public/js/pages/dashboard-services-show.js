const formEl = document.querySelector('.form-dash');
const submitEl = document.querySelector('[data-action="submit"]');

const pristine = window.Pristine(formEl, {
  classTo: 'form-dash__element',
  errorClass: 'form-dash__element--invalid',
  successClass: 'form-dash__element--valid',
  errorTextParent: 'form-dash__element',
  errorTextTag: 'span',
  errorTextClass: 'form-dash__error'
}, true);

const simditor = new Simditor({
  textarea: formEl.querySelector('textarea[name="content"]'),
  toolbar: [
    'title',
    'bold',
    'italic',
    'underline',
    'strikethrough',
    'fontScale',
    'color',
    'ol',
    'ul',
    'table',
    'link',
    'hr',
    'indent',
    'outdent',
    'alignment',
  ]
});
const simditorBlock = new Simditor({
  textarea: formEl.querySelector('textarea[name="block"]'),
  toolbar: [
    'title',
    'bold',
    'italic',
    'underline',
    'strikethrough',
    'fontScale',
    'color',
    'ol',
    'ul',
    'table',
    'link',
    'hr',
    'indent',
    'outdent',
    'alignment',
  ]
});

simditor.body[0].classList.add('form-dash__field', 'form-dash__field--text', 'service-page__content');
simditorBlock.body[0].classList.add('form-dash__field', 'form-dash__field--text', 'service-page__content');

formEl.addEventListener('submit', (evt) => evt.preventDefault());
submitEl.addEventListener('click', () => {
  const isValid = pristine.validate();
  if (isValid) {
    formEl.submit();
  }
});
