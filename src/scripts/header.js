const header = document.getElementById('header');

if (header) {
  const page = document.body.id;

  let isReach = false;
  let isOpen = false;

  SetHeight(header);
  window.addEventListener('resize', () => SetHeight(header));

  function SetHeight(target) {
    const height = target.offsetHeight;
    document.documentElement.style.setProperty('--height', height + 'px');
  }

  if (page === 'home') {
    window.addEventListener('scroll', () => {
      isReach = window.scrollY > 0;

      if (isReach || isOpen) header.classList.add('header--background');
      else header.classList.remove('header--background');
    });
  }
}