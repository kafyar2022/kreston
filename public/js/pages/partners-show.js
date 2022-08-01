const formEl = document.querySelector('.form-dash');
const logoChooserEl = formEl.querySelector('input[name="logo"]');
const logoPreviewEl = formEl.querySelector('img');
const submitEl = document.querySelector('[data-action="submit"]');

const pristine = window.Pristine(formEl, {
  classTo: 'form-dash__element',
  errorClass: 'form-dash__element--invalid',
  successClass: 'form-dash__element--valid',
  errorTextParent: 'form-dash__element',
  errorTextTag: 'span',
  errorTextClass: 'form-dash__error'
}, true);

logoChooserEl.addEventListener('change', (evt) => {
  const file = evt.target.files[0];

  logoPreviewEl.src = URL.createObjectURL(file);
  logoChooserEl.nextElementSibling.value = file.name;
});

formEl.addEventListener('submit', (evt) => evt.preventDefault());
submitEl.addEventListener('click', () => {
  const isValid = pristine.validate();
  if (isValid) {
    formEl.submit();
  }
});
