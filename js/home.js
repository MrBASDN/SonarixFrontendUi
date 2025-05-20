let carouselNumber = 0;
let slider = document.querySelector('.carouselSlider');
const dots = document.querySelectorAll('.dot');

function currentSlide(number) {
    slider.style.transform = `translateX(-${number * 100}dvw)`;
    carouselNumber = number;
    dots.forEach(dot => dot.classList.remove('active'));
    dots[number++].classList.add('active');
}

function toggleSlides(choice) {
    if (choice == 'next') {
        if (carouselNumber >= 0 && carouselNumber != 4 && carouselNumber < 5) {
            carouselNumber++;
            currentSlide(carouselNumber);
        } else {
            carouselNumber = 0;
            currentSlide(carouselNumber);
        }
    } else if (choice == 'previous') {
        if (carouselNumber < 5 && carouselNumber > 0) {
            carouselNumber--;
            currentSlide(carouselNumber);
        } else {
            carouselNumber = 4;
            currentSlide(carouselNumber);
        }
    }
}

setInterval(() => toggleSlides('next'), 5000);

