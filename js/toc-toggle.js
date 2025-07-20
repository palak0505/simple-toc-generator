document.addEventListener('DOMContentLoaded', function () {
  const buttons = document.querySelectorAll('.toc-toggle');

  buttons.forEach(button => {
    button.addEventListener('click', function () {
      const container = this.closest('.simple-toc');
      if (container) {
        container.classList.toggle('active');
      }
    });
  });
});