const locale = document.querySelector('input[name="locale"]').value;
const headers = {
  'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
};

document.addEventListener('click', (evt) => {
  switch (evt.target.dataset.action) {
    case 'cancel':
      location.reload();
      break;

    case 'add':
      evt.target.parentElement.innerHTML = `<span></span><form class="regulation-list__extra-item"><input type="file" name="file"><input type="text" name="title"><input class="visually-hidden" type="text" name="category_id" value="${evt.target.dataset.id}"><input class="visually-hidden" type="text" name="locale" value="${locale}"><button data-action="store" type="button">Сохранить</button><button data-action="cancel" type="button">Отмена</button></form>`;
      break;

    case 'store':
      fetch('/dash-regulations/store', {
        headers,
        method: 'post',
        body: new FormData(evt.target.parentElement),
      })
        .then(() => location.reload());
      break;

    case 'edit':
      evt.target.parentElement.innerHTML = `<span></span><form class="regulation-list__extra-item"><input type="file" name="file"><input type="text" name="title" value="${evt.target.previousElementSibling.textContent}"><input class="visually-hidden" type="text" name="id" value="${evt.target.dataset.id}"><button data-action="update" type="button">Сохранить</button><button data-action="cancel" type="button">Отмена</button></form>`;
      break;

    case 'update':
      fetch('/dash-regulations/update', {
        headers,
        method: 'post',
        body: new FormData(evt.target.parentElement),
      })
        .then(() => location.reload());
      break;

    case 'delete':
      evt.target.parentElement.innerHTML = `<span></span><span>Вы уверены что хотите удалить этот документ?</span><button data-action="destroy" type="button" data-id="${evt.target.dataset.id}">Удалить</button><button data-action="cancel" type="button">Отмена</button>`;
      break;

    case 'destroy':
      fetch('/dash-regulations/destroy', {
        headers,
        method: 'post',
        body: JSON.stringify({
          id: evt.target.dataset.id,
        }),
      })
        .then(() => location.reload());
      break;

    case 'add-category':
      evt.target.parentElement.innerHTML = `<span></span><input type="text" name="category"><button data-action="store-category">Сохранить</button><button data-action="cancel">Отмена</button>`;
      break;

    case 'store-category':
      fetch('/dash-regulations/store-category', {
        headers,
        method: 'post',
        body: JSON.stringify({
          category: evt.target.previousElementSibling.value,
          locale,
        })
      })
        .then(() => location.reload());
      break;

    case 'edit-category':
      evt.target.parentElement.innerHTML = `<span></span><input type="text" name="category" value="${evt.target.previousElementSibling.textContent}"><button data-id="${evt.target.dataset.category}" data-action="update-category">Сохранить</button><button data-action="cancel">Отмена</button>`;
      break;

    case 'update-category':
      fetch('/dash-regulations/update-category', {
        headers,
        method: 'post',
        body: JSON.stringify({
          category: evt.target.previousElementSibling.value,
          id: evt.target.dataset.id,
        })
      })
        .then(() => location.reload());
      break;

    case 'delete-category':
      evt.target.parentElement.innerHTML = `<span></span><span>При удалении потеряются все документы данной категории. Вы уверены что хотите удалить эту категорию?</span><button data-id="${evt.target.dataset.category}" data-action="destroy-category">Удалить</button><button data-action="cancel">Отмена</button>`;
      break;

    case 'destroy-category':
      fetch('/dash-regulations/destroy-category', {
        headers,
        method: 'post',
        body: JSON.stringify({
          id: evt.target.dataset.id,
        })
      })
        .then(() => location.reload());
      break;
  }
});
