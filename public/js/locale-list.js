const localeToggleEl = document.querySelector('.locale-list__item--current');
const localesEl = document.querySelector('.locale-list');

const showLocales = () => {
  localesEl.classList.remove('locale-list--hidden');
  localesEl.classList.add('locale-list--shown');
  document.addEventListener('keydown', documentKeydownHandler)
  document.addEventListener('click', documentClickHandler)
};

const hideLocales = () => {
  localesEl.classList.add('locale-list--hidden');
  localesEl.classList.remove('locale-list--shown');
  document.removeEventListener('keydown', documentKeydownHandler);
  document.removeEventListener('click', documentClickHandler);
};

function documentKeydownHandler(evt) {
  if (evt.keyCode === 27) {
    hideLocales();
  }
}

function documentClickHandler(evt) {
  if (!evt.target.closest('.locale-list')) {
    hideLocales();
  }
}

export const initLocaleList = () => localeToggleEl.addEventListener('click', () => {
  if (localesEl.classList.contains('locale-list--hidden')) {
    showLocales();
    return;
  }
  hideLocales();
});
