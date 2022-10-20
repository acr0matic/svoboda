const preloader = document.getElementById('page-loader');

document.addEventListener("DOMContentLoaded", function () {
  window.setTimeout(function () {
    preloader.classList.add('page-loader--hide');
  }, 150);
});
