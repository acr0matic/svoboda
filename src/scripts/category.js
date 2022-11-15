const categorySection = document.getElementById('single-category');
if (categorySection) {
  const service = categorySection.querySelectorAll('.service-list__inner li');

  const modal = document.getElementById('modal-service');
  const title = modal.querySelector('.modal__title');
  const text = modal.querySelector('.modal__text');
  const price = modal.querySelector('.modal__action span');

  const button = modal.querySelector('.button');
  button.addEventListener('click', () => {
    MicroModal.close(modal.id, modalParams);
  });

  service.forEach(item => {
    item.addEventListener('click', () => {

      title.innerHTML = item.querySelector('.title').innerHTML;
      text.innerHTML = item.querySelector('p').innerHTML;
      price.innerHTML = item.querySelector('.price').innerHTML;

      MicroModal.show('modal-service', modalParams);
    });
  });
}