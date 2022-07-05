const pageNavEl = document.querySelector('.page-nav');

function documentKeydownHandler(evt) {
  if (evt.keyCode === 27) {
    const shownExtraListEl = pageNavEl.querySelector('.page-nav__extra-list--shown');

    if (shownExtraListEl) {
      shownExtraListEl.classList.remove('page-nav__extra-list--shown');
      shownExtraListEl.classList.add('page-nav__extra-list--hidden');
      document.removeEventListener('keydown', documentKeydownHandler);
      document.removeEventListener('click', documentClickHandler);
    }
  }
}

function documentClickHandler(evt) {
  if (!evt.target.closest('.page-nav__item')) {
    const shownExtraListEl = pageNavEl.querySelector('.page-nav__extra-list--shown');

    if (shownExtraListEl) {
      shownExtraListEl.classList.remove('page-nav__extra-list--shown');
      shownExtraListEl.classList.add('page-nav__extra-list--hidden');
      document.removeEventListener('keydown', documentKeydownHandler);
      document.removeEventListener('click', documentClickHandler);
    }
  }
}

export const initPageNav = () => pageNavEl.addEventListener('click', (evt) => {
  if (evt.target.className === 'page-nav__button') {
    if (evt.target.nextElementSibling.classList.contains('page-nav__extra-list--hidden')) {
      const shownExtraListEl = pageNavEl.querySelector('.page-nav__extra-list--shown');

      if (shownExtraListEl && shownExtraListEl !== evt.target.nextElementSibling) {
        shownExtraListEl.classList.remove('page-nav__extra-list--shown');
        shownExtraListEl.classList.add('page-nav__extra-list--hidden');
      }

      evt.target.nextElementSibling.classList.remove('page-nav__extra-list--hidden');
      evt.target.nextElementSibling.classList.add('page-nav__extra-list--shown');
      document.addEventListener('keydown', documentKeydownHandler);
      document.addEventListener('click', documentClickHandler);
      return;
    }

    evt.target.nextElementSibling.classList.add('page-nav__extra-list--hidden');
    evt.target.nextElementSibling.classList.remove('page-nav__extra-list--shown');
    document.removeEventListener('keydown', documentKeydownHandler);
    document.removeEventListener('click', documentClickHandler);
  }
});
