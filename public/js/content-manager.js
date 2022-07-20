class ContentManager {
  init = () =>
    document.addEventListener('mouseover', this.#documentMouseOverHandler);

  #documentMouseOverHandler = (evt) => {
    if (evt.target.dataset.content) {
      
    }
  }
}

new ContentManager().init();
