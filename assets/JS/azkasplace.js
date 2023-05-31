// Single Product Page


const smallImages = document.querySelectorAll('.small-img');

smallImages.forEach((smallImg) => {
  smallImg.addEventListener('click', (event) => {
    const clickedImg = event.target;
    const newImgSrc = clickedImg.getAttribute('data-img');
    const mainImg = document.getElementById('mainImg');
    mainImg.src = newImgSrc;
  });
});
