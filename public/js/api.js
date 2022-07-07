const headers = {
  'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
};

const updateContent = (body, onSuccess, onFail) =>
  fetch(`/${body.slug.slice(-2)}/content/update`, {
    headers,
    method: 'post',
    body: JSON.stringify(body),
  })
    .then((response) => {
      if ((response.ok && !response.redirected)) {
        onSuccess();
      } else {
        onFail();
      }
    })
    .catch((err) => console.log(err));

export { updateContent };
