const isSafari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);

const modalParams = {
  awaitCloseAnimation: true,
  disableFocus: true,
}

const scrollParams = {
  speed: 500,
  speedAsDuration: true,
  offset: -15,
  header: '#header',
}