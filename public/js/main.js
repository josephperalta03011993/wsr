// For now, just handles dropdown (needs layout fixing in css)
document.addEventListener("DOMContentLoaded", () => {
    const dropdown = document.querySelector(".dropdown");
    if (dropdown) {
        dropdown.addEventListener("click", (e) => {
            e.preventDefault();
            alert("Dropdown menu would open here.");
        });
    }
});

// Carousel script
const slides = document.querySelectorAll('.carousel-slide');
const nextBtn = document.querySelector('.next');
const prevBtn = document.querySelector('.prev');
const indicatorsContainer = document.querySelector('.carousel-indicators');

let currentIndex = 0;

// Create indicators
slides.forEach((_, i) => {
    const btn = document.createElement('button');
    if (i === 0) btn.classList.add('active');
    btn.addEventListener('click', () => goToSlide(i));
    indicatorsContainer.appendChild(btn);
});
const indicators = indicatorsContainer.querySelectorAll('button');

function updateSlides() {
    slides.forEach((slide, i) => {
        slide.classList.toggle('active', i === currentIndex);
        indicators[i].classList.toggle('active', i === currentIndex);
    });
}

function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    updateSlides();
}

function prevSlide() {
    currentIndex = (currentIndex - 1 + slides.length) % slides.length;
    updateSlides();
}

function goToSlide(index) {
    currentIndex = index;
    updateSlides();
}

nextBtn.addEventListener('click', nextSlide);
prevBtn.addEventListener('click', prevSlide);

// Auto-play
setInterval(nextSlide, 5000);
