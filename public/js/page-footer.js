const footerEl = document.querySelector('.page-footer');

const documentClickHandler = (evt) => {
  if (!evt.target.closest('.page-footer__nav-item')) {
    footerEl.querySelector('.page-footer__nav-term--shown')
      .classList.remove('page-footer__nav-term--shown');

    document.removeEventListener('click', documentClickHandler);
  }
};

export const initFooter = () => footerEl.addEventListener('click', (evt) => {
  if (evt.target.classList.contains('page-footer__nav-term')) {
    if (evt.target.classList.contains('page-footer__nav-term--shown')) {
      evt.target.classList.remove('page-footer__nav-term--shown');
      document.removeEventListener('click', documentClickHandler);
      return;
    }

    const prevTermEl = footerEl.querySelector('.page-footer__nav-term--shown');

    if (prevTermEl) {
      prevTermEl.classList.remove('page-footer__nav-term--shown');
    }
    evt.target.classList.add('page-footer__nav-term--shown');
    document.addEventListener('click', documentClickHandler);
  }
});
