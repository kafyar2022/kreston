document.addEventListener('click', (evt) => {
  if (evt.target.dataset.action === 'delete') {
    evt.target.closest('tr')
      .innerHTML = `
      <td colspan="4">Вы уверены что хотите удалить данный сертификат?</td>
      <td><a data-action="cancel">Отмена</a></td>
      <td><a href="/dash-certificates/delete/${evt.target.dataset.id}">Удалить</a></td>
    `;
  }
  if (evt.target.dataset.action === 'cancel') {
    location.reload();
  }
});
