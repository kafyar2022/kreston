import { createElement } from '/js/util.js';

const Mode = {
  DEFAULT: 'default',
  HOVER: 'hover',
  EDIT: 'edit',
  SAVE: 'save',
  CANCEL: 'cancel',
};

const ActionTemplate = {
  EDIT: `
    <button class="action action--edit">
      <svg class="action__icon" width="16" height="16">
        <use xlink:href="#action-edit"></use>
      </svg>
      Edit
    </button>
  `,
  SAVE: `
    <button class="action action--save" disabled>
      <svg class="action__icon" width="16" height="16">
        <use xlink:href="#action-save"></use>
      </svg>
      Save
    </button>
  `,
  CANCEL: `
    <button class="action action--cancel" disabled>
      <svg class="action__icon" width="16" height="16">
        <use xlink:href="#action-cancel"></use>
      </svg>
      Cancel
    </button>
  `,
};

class ContentManager {
  #element = null;
  #content = null;
  #mode = Mode.DEFAULT;
  #editEl = null;
  #saveEl = null;
  #cancelEl = null;
  #dataContent = null;
  #prevElement = null;
  #simditor = null;

  init = () => {
    document.addEventListener('mouseover', this.#documentMouseOverHandler);
  }

  #changeMode = (mode) => {
    switch (mode) {
      case Mode.DEFAULT:
        document.addEventListener('mouseover', this.#documentMouseOverHandler);
        this.#element.removeAttribute('style');
        this.#element.removeEventListener('mouseleave', this.#elementMouseLeaveHandler);
        this.#element = null;
        this.#content = null;
        this.#editEl.remove();
        this.#editEl = null;
        this.#mode = mode;
        break;

      case Mode.HOVER:
        this.#renderEditEl();
        this.#element.setAttribute('style', 'outline: 1px solid red;');
        document.removeEventListener('mouseover', this.#documentMouseOverHandler);
        this.#element.addEventListener('mouseleave', this.#elementMouseLeaveHandler);
        this.#mode = mode;
        break;

      case Mode.EDIT:
        if (this.#prevElement) {
          this.#saveEl.remove();
          this.#cancelEl.remove();
          this.#saveEl = null;
          this.#cancelEl = null;
          this.#prevElement.setAttribute('data-content', this.#dataContent);
          this.#dataContent = null;
          this.#prevElement.removeAttribute('style');
          this.#prevElement = null;
        }
        this.#mode = Mode.EDIT;
        this.#editEl.remove();
        this.#editEl = null;
        this.#element.setAttribute('style', 'outline: 1px solid #959595;');
        this.#renderSaveEl();
        this.#renderCancelEl();
        this.#dataContent = this.#element.dataset.content;
        this.#element.removeAttribute('data-content');

        this.#simditor = new Simditor({
          textarea: this.#element.querySelector('textarea'),
          cleanPaste: true,
          toolbar: ['title', 'bold', 'italic', 'underline', 'strikethrough', 'fontScale', 'color', 'ol', 'ul', 'blockquote', 'code', 'table', 'link', 'hr', 'indent', 'outdent', 'alignment']
        });
        break;

      case Mode.SAVE:
        //
        break;

      case Mode.CANCEL:
        //
        break;
    }
  };

  #documentMouseOverHandler = (evt) => {
    if (evt.target.closest('[data-content]')) {
      this.#element = evt.target.closest('[data-content]');
      this.#content = this.#element.innerHTML;
      this.#changeMode(Mode.HOVER);
    }
  };

  #documentClickHandler = (evt) => {
    if (this.#prevElement && !this.#prevElement.contains(evt.target)) {
      this.#saveEl.remove();
      this.#cancelEl.remove();
      this.#saveEl = null;
      this.#cancelEl = null;
      this.#prevElement.setAttribute('data-content', this.#dataContent);
      this.#dataContent = null;
      this.#prevElement.removeAttribute('style');
      this.#prevElement = null;
    }
  };

  #elementMouseLeaveHandler = () => {
    switch (this.#mode) {
      case Mode.HOVER:
        this.#changeMode(Mode.DEFAULT);
        break;
      case Mode.EDIT:
        document.addEventListener('mouseover', this.#documentMouseOverHandler);
        document.addEventListener('click', this.#documentClickHandler);
        this.#prevElement = this.#element;
        break;
    }
  };

  #renderEditEl = () => {
    this.#editEl = createElement(ActionTemplate.EDIT);
    this.#element.insertAdjacentElement('beforeend', this.#editEl);

    this.#editEl.addEventListener('click', this.#editElClickHandler);
  };

  #editElClickHandler = () => this.#changeMode(Mode.EDIT);

  #renderSaveEl = () => {
    this.#saveEl = createElement(ActionTemplate.SAVE);
    this.#element.insertAdjacentElement('beforeend', this.#saveEl);
  };

  #renderCancelEl = () => {
    this.#cancelEl = createElement(ActionTemplate.CANCEL);
    this.#element.insertAdjacentElement('beforeend', this.#cancelEl);
  };
}

const contentManager = new ContentManager();

export const initContentManager = () => contentManager.init();
