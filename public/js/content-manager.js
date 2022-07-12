import { updateContent } from './api.js';
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
    <button class="action action--save">
      <svg class="action__icon" width="14" height="10">
        <use xlink:href="#action-save"></use>
      </svg>
      Save
    </button>
  `,
  CANCEL: `
    <button class="action action--cancel">
      <svg class="action__icon" width="11" height="11">
        <use xlink:href="#action-cancel"></use>
      </svg>
      Cancel
    </button>
  `,
};

class ContentManager {
  #element = null;
  #editEl = null;
  #saveEl = null;
  #cancelEl = null;
  #simditor = null;
  #initialContent = null;
  #mode = Mode.DEFAULT;

  init = () => document.addEventListener('mouseover', this.#documentMouseOverHandler);

  #changeMode = (mode) => {
    switch (mode) {
      case Mode.DEFAULT:
        document.addEventListener('mouseover', this.#documentMouseOverHandler);
        document.body.removeAttribute('style');
        this.#element.removeAttribute('style');
        this.#element.removeEventListener('mouseleave', this.#elementMouseLeaveHandler);
        if (this.#editEl) {
          this.#editEl.remove();
        }
        if (this.#saveEl) {
          this.#saveEl.remove();
        }
        if (this.#cancelEl) {
          this.#cancelEl.remove();
        }
        if (this.#simditor) {
          const textEl = this.#element.querySelector('textarea').cloneNode(true);
          this.#simditor.destroy();
          this.#element.querySelector('textarea').remove();
          this.#element.querySelector('[data-type="content"]').innerHTML = textEl.value;
          if (this.#initialContent) {
            textEl.value = this.#initialContent;
          }
          this.#element.append(textEl);
        }
        if (this.#initialContent) {
          this.#element.querySelector('[data-type="content"]').innerHTML = this.#initialContent;
        }

        this.#element = null;
        this.#editEl = null;
        this.#saveEl = null;
        this.#cancelEl = null;
        this.#simditor = null;
        this.#initialContent = null;

        this.#mode = mode;
        break;

      case Mode.HOVER:
        document.removeEventListener('mouseover', this.#documentMouseOverHandler);

        this.#element.setAttribute('style', 'outline: 1px solid red;');
        this.#element.addEventListener('mouseleave', this.#elementMouseLeaveHandler);
        this.#renderEditEl();

        this.#mode = mode;
        break;

      case Mode.EDIT:
        document.body.removeAttribute('style');
        document.addEventListener('keydown', this.#documentKeydownHandler);
        this.#element.setAttribute('style', 'outline: 1px solid #959595;');
        this.#element.querySelector('[data-type="content"]').innerHTML = '';
        if (this.#editEl) {
          this.#editEl.remove();
        }
        if (!this.#cancelEl) {
          this.#renderCancelEl();
        }
        if (!this.#saveEl) {
          this.#renderSaveEl();
        }
        this.#saveEl.setAttribute('disabled', 'disabled');

        if (!this.#simditor) {
          this.#simditor = new Simditor({
            textarea: this.#element.querySelector('textarea'),
            cleanPaste: true,
            toolbar: ['title', 'bold', 'italic', 'underline', 'strikethrough', 'fontScale', 'color', 'ol', 'ul', 'link', 'hr', 'indent', 'outdent', 'alignment'],
          });

          const simditorBody = this.#element.querySelector('.simditor-body');
          simditorBody.addEventListener('keydown', this.#simditorKeydownHandler);
          this.#simditor.on('valuechanged', this.#simditorChangeHandler);
          this.#initialContent = simditorBody.innerHTML;
        }
        this.#element.scrollIntoView({ block: 'center', behavior: 'smooth' });

        this.#editEl = null;
        this.#mode = mode;
        break;

      case Mode.SAVE:
        this.#element.setAttribute('style', 'outline: 1px solid #00D72F; pointer-events: all;');
        this.#saveEl.removeAttribute('disabled');
        this.#cancelEl.removeAttribute('disabled');
        document.body.setAttribute('style', 'pointer-events: none');

        this.#mode = mode;
        break;

      case Mode.CANCEL:
        this.#element.setAttribute('style', 'outline: 1px solid red; pointer-events: all;');
        break;
    }
  };

  #documentMouseOverHandler = (evt) => {
    const contentEl = evt.target.closest('[data-content]');

    if (contentEl && this.#mode === Mode.DEFAULT) {
      this.#element = contentEl;
      this.#changeMode(Mode.HOVER);
      return;
    }
  };

  #documentKeydownHandler = (evt) => {
    if (evt.keyCode === 27 && this.#mode === Mode.EDIT) {
      this.#changeMode(Mode.DEFAULT);
      document.removeEventListener('keydown', this.#documentKeydownHandler);
    }
  };

  #elementMouseLeaveHandler = () => {
    switch (this.#mode) {
      case Mode.HOVER:
        this.#changeMode(Mode.DEFAULT);
        break;
    }
  };

  #simditorChangeHandler = () => {
    const simditorContent = this.#element.querySelector('.simditor-body').innerHTML;
    
    if (simditorContent.replace(/<\/?[^>]+(>|$)/g, '').length === 0 || simditorContent === this.#initialContent) {
      this.#changeMode(Mode.EDIT);
    } else {
      this.#changeMode(Mode.SAVE);
    }
  };

  #simditorKeydownHandler = (evt) => {
    if (evt.keyCode == 90 && evt.ctrlKey) {
      const simditorContent = this.#element.querySelector('.simditor-body').innerHTML;
      if (simditorContent === this.#initialContent) {
        this.#changeMode(Mode.EDIT);
      }
    }
  };

  #renderEditEl = () => {
    this.#editEl = createElement(ActionTemplate.EDIT);
    this.#element.append(this.#editEl);

    this.#editEl.addEventListener('click', this.#editElClickHandler);
  };

  #editElClickHandler = () => this.#changeMode(Mode.EDIT);

  #renderSaveEl = () => {
    this.#saveEl = createElement(ActionTemplate.SAVE);
    this.#saveEl.addEventListener('click', this.#saveElClickHandler)
    this.#element.append(this.#saveEl);
  };

  #saveElClickHandler = async () => {
    await updateContent(
      {
        slug: this.#element.dataset.content,
        content: this.#element.querySelector('.simditor-body').innerHTML,
      },
      () => { location.reload() },
      () => { console.log('failure') }
    );
  };

  #renderCancelEl = () => {
    this.#cancelEl = createElement(ActionTemplate.CANCEL);
    this.#cancelEl.addEventListener('mouseenter', this.#cancelElMouseEnterHandler);

    this.#element.append(this.#cancelEl);
  };

  #cancelElMouseEnterHandler = () => {
    this.#changeMode(Mode.CANCEL);
    this.#cancelEl.addEventListener('mouseleave', this.#cancelElMouseLeaveHandler);
    this.#cancelEl.addEventListener('click', this.#cancelElClickHandler);
    this.#cancelEl.removeEventListener('mouseenter', this.#cancelElMouseEnterHandler);
  };

  #cancelElMouseLeaveHandler = () => {
    this.#cancelEl.addEventListener('mouseenter', this.#cancelElMouseEnterHandler);
    this.#cancelEl.removeEventListener('mouseleave', this.#cancelElMouseLeaveHandler);
    this.#cancelEl.removeEventListener('click', this.#cancelElClickHandler);
    this.#changeMode(this.#mode);
  };

  #cancelElClickHandler = () => this.#changeMode(Mode.DEFAULT);
}

const contentManager = new ContentManager();

export const initContentManager = () => contentManager.init();
