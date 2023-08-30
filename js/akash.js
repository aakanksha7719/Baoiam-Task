const prevBtn = document.querySelector('.prev-btn1');
const nextBtn = document.querySelector('.next-btn1');
const sliderImages = document.querySelector('.slider-images1');

let counter = 0;

nextBtn.addEventListener('click', () => {
  if (counter === 9) {
    counter = 0;
  } else {
    counter++;
  }
  sliderImages.style.transform = `translateX(-${counter * 20}%)`;
});

prevBtn.addEventListener('click', () => {
  if (counter === 0) {
    counter = 9;
  } else {
    counter--;
  }
  sliderImages.style.transform = `translateX(-${counter * 20}%)`;
});






