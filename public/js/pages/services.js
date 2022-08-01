const feedbackButtonEl = document.querySelector('.service-page__link');
const pageEl = document.querySelector('.page');
const feedbackModalEl = document.querySelector('.feedback-modal');

function feedbackModalElClickHandler(evt) {
  if (!evt.target.closest('.feedback-modal__inner')) {
    pageEl.classList.remove('page--modal-shown');
    feedbackModalEl.classList.add('feedback-modal--hidden');
    feedbackModalEl.classList.remove('feedback-modal--shown');

    feedbackModalEl.removeEventListener('click', feedbackModalElClickHandler);
    document.removeEventListener('keydown', documentKeydownHandler);
  }
}

function documentKeydownHandler(evt) {
  if (evt.keyCode === 27) {
    pageEl.classList.remove('page--modal-shown');
    feedbackModalEl.classList.add('feedback-modal--hidden');
    feedbackModalEl.classList.remove('feedback-modal--shown');

    feedbackModalEl.removeEventListener('click', feedbackModalElClickHandler);
    document.removeEventListener('keydown', documentKeydownHandler);
  }
}

feedbackModalEl.classList.add('feedback-modal--hidden');

feedbackButtonEl.addEventListener('click', () => {
  pageEl.classList.add('page--modal-shown');
  feedbackModalEl.classList.remove('feedback-modal--hidden');
  feedbackModalEl.classList.add('feedback-modal--shown');

  feedbackModalEl.addEventListener('click', feedbackModalElClickHandler);
  document.addEventListener('keydown', documentKeydownHandler);
});
