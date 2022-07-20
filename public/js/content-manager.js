import { createElement } from './util.js';

const Template = {
  EDIT_BUTTON: '<button class="action action--edit">редактировать</button>'
};

class ContentManager {
  #editButtonEl = null;
  #isEditted = false;
  #element = null;
  #textareaEl = null;
  #simditor = null;

  start = () => document.addEventListener('mouseover', this.#documentMouseOverHandler);

  init = () => {
    const contentEl = this.#editButtonEl.parentElement;
    contentEl.removeAttribute('style');
    this.#editButtonEl.remove();
    this.#editButtonEl = null;
    document.addEventListener('mouseover', this.#documentMouseOverHandler);

    if (this.#element) {
      this.destroy();
    }

    this.#element = contentEl;
    this.#textareaEl = document.createElement('textarea');
    this.#textareaEl.value = this.#element.innerHTML;
    this.#element.replaceWith(this.#textareaEl);
    this.#simditor = new Simditor({
      textarea: this.#textareaEl,
      placeholder: 'Поле объязательно для заполнения',
      toolbar: [
        'title',
        'bold',
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
    console.log(this.#simditor);
  };

  destroy = () => {
    this.#simditor.el.replaceWith(this.#element);
    this.#simditor.destroy();
    this.#element = null;
    this.#textareaEl = null;
    this.#simditor = null;
  };

  shake = () => {
    console.log('shaked');
  };


  #documentMouseOverHandler = (evt) => {
    const contentEl = evt.target.closest('[data-content]');
    if (contentEl) {
      contentEl.setAttribute('style', 'position: relative; outline: 1px solid red;');
      this.#editButtonEl = createElement(Template.EDIT_BUTTON);
      contentEl.append(this.#editButtonEl);

      document.removeEventListener('mouseover', this.#documentMouseOverHandler);
      contentEl.addEventListener('mouseleave', this.#contentElMouseLeaveHandler);
      this.#editButtonEl.addEventListener('click', this.#editButtonElClickHandler);
    }
  }

  #contentElMouseLeaveHandler = (evt) => {
    evt.target.removeAttribute('style');
    this.#editButtonEl.remove();
    this.#editButtonEl = null;

    document.addEventListener('mouseover', this.#documentMouseOverHandler);
    evt.target.removeEventListener('mouseleave', this.#contentElMouseLeaveHandler);
  };

  #editButtonElClickHandler = () => {
    if (this.#isEditted) {
      this.#editButtonEl.parentElement.removeAttribute('style');
      this.#editButtonEl.remove();
      this.#editButtonEl = null;
      document.addEventListener('mouseover', this.#documentMouseOverHandler);

      this.shake();
    } else {
      this.init();
    }
  };
}

new ContentManager().start();
