
  document.addEventListener('DOMContentLoaded', function() {
    const lightbox      = document.getElementById('lightbox');
    const lightboxImg   = document.getElementById('lightbox-img');

    document.querySelectorAll('.img-row img').forEach(img => {
      img.addEventListener('click', () => {
        lightboxImg.src = img.src;
        lightbox.classList.remove('hidden');
      });
    });

    lightbox.addEventListener('click', () => {
      lightbox.classList.add('hidden');
    });
  });
