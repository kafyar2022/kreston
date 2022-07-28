const formEl = document.querySelector('.form-dash');
const imgChooserEl = formEl.querySelector('input[name="img"]');
const imgPreviewEl = document.querySelector('.banner__slide');
const contentPreviewEl = document.querySelector('[data-type="banner"]');
const submitEl = document.querySelector('[data-action="submit"]');

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
    'blockquote',
    'table',
    'link',
    'hr',
    'indent',
    'outdent',
    'alignment',
  ]
});

imgChooserEl.addEventListener('change', (evt) => {
  const file = evt.target.files[0];

  imgPreviewEl.style.backgroundImage = `url(${URL.createObjectURL(file)})`;
  imgChooserEl.nextElementSibling.value = file.name;
});

simditor.body[0].classList.add('form-dash__field', 'content');
simditor.body[0].addEventListener('input', (evt) => contentPreviewEl.innerHTML = evt.target.innerHTML);
simditor.el[0].addEventListener('keydown', (evt) => contentPreviewEl.innerHTML = evt.target.innerHTML);

formEl.addEventListener('submit', (evt) => evt.preventDefault());
submitEl.addEventListener('click', () => formEl.submit());
