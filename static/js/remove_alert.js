const alert = document.querySelector('.alert');

setTimeout(() => {
  if (alert) {
    alert.remove();
  }
}, 1000);
