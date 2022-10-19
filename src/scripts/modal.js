const modal = document.getElementById('modal-callback');
const modalTrigger = document.querySelectorAll('[data-micromodal-trigger]');
modalTrigger.forEach(modal => {
  modal.addEventListener('click', () => currentModal = modal.dataset.micromodalTrigger)
});

if (modal) {
  const form = modal.querySelector('.form');
  const button = document.querySelectorAll('[data-micromodal-trigger]');

  button.forEach(target => {
    target.addEventListener('click', () => {
      const subject = target.dataset.subject;
      form.dataset.additional = subject;
    });
  });
}