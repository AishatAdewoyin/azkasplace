// Single Product Page
/* 
saved git cloning formula
git clone https://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@github.com/Aishat452/alx-low_level_programming.git
*/

const smallImages = document.querySelectorAll('.small-img');

smallImages.forEach((smallImg) => {
  smallImg.addEventListener('click', (event) => {
    const clickedImg = event.target;
    const newImgSrc = clickedImg.getAttribute('data-img');
    const mainImg = document.getElementById('mainImg');
    mainImg.src = newImgSrc;
  });
});
