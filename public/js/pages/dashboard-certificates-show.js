const formEl = document.querySelector('.form-dash');
const imgChooserEl = formEl.querySelector('input[name="img"]');
const imgPreviewEl = formEl.querySelector('img');
const submitEl = document.querySelector('[data-action="submit"]');

const simditor = new Simditor({
  textarea: formEl.querySelector('textarea[name="description"]'),
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
    'blockquote',
    'table',
    'link',
    'hr',
    'indent',
    'outdent',
    'alignment',
  ]
});

const pristine = window.Pristine(formEl, {
  classTo: 'form-dash__element',
  errorClass: 'form-dash__element--invalid',
  successClass: 'form-dash__element--valid',
  errorTextParent: 'form-dash__element',
  errorTextTag: 'span',
  errorTextClass: 'form-dash__error'
}, true);

imgChooserEl.addEventListener('change', (evt) => {
  const file = evt.target.files[0];

  imgPreviewEl.src = URL.createObjectURL(file);
  imgChooserEl.nextElementSibling.value = file.name;
});

simditor.body[0].classList.add('form-dash__field', 'content');

formEl.addEventListener('submit', (evt) => evt.preventDefault());
submitEl.addEventListener('click', () => {
  const isValid = pristine.validate();
  if (isValid) {
    formEl.submit();
  }
});
