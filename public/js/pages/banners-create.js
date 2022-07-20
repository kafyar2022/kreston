const photoChooserEl = document.querySelector('input[name="photo"]');
const photoPreviewEl = document.querySelector('.banner__slide');

photoChooserEl.addEventListener('change', (evt) => {
  const file = evt.target.files[0];

  photoPreviewEl.style.backgroundImage = `url(${URL.createObjectURL(file)})`;
});
