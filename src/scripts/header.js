const header = document.getElementById('header');

SetHeight(header);
window.addEventListener('resize', () => SetHeight(header));

function SetHeight(target) {
  const height = target.offsetHeight;
  document.documentElement.style.setProperty('--height', height + 'px');
}