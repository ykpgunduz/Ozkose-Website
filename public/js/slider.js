function toggleMenu() {
    const menuIcon = document.querySelector('.menuIcon');
    const navBar = document.getElementById('navbar');

    menuIcon.classList.toggle('active');
    navBar.classList.toggle('active');
}

// Slider Fonksiyonları
const slideShow = document.getElementById('slideShow');
const slidesVideo = slideShow.getElementsByTagName('video');
var videoIndex = 0;

function changeSlide(next = true) {
    slidesVideo[videoIndex].pause(); // Mevcut videoyu durdur
    slidesVideo[videoIndex].classList.remove('active');

    if (next) {
        videoIndex = (videoIndex + 1) % slidesVideo.length;
    } else {
        videoIndex = (videoIndex - 1 + slidesVideo.length) % slidesVideo.length;
    }

    slidesVideo[videoIndex].classList.add('active');
    slidesVideo[videoIndex].play(); // Yeni videoyu başlat
    loadVideo(slidesVideo[videoIndex]);
}

function loadVideo(video) {
    if (video.getAttribute('data-loaded') === 'false') {
        video.load();
        video.setAttribute('data-loaded', 'true');
    }
}

const slideShowText = document.getElementById('slideShowText');
const slideTxt = slideShowText.getElementsByTagName('div');
var textIndex = 0;

function changeSlideText(next = true) {
    slideTxt[textIndex].classList.remove('active');

    if (next) {
        textIndex = (textIndex + 1) % slideTxt.length;
    } else {
        textIndex = (textIndex - 1 + slideTxt.length) % slideTxt.length;
    }

    slideTxt[textIndex].classList.add('active');
}

function nextSlide() {
    changeSlide(true);
    changeSlideText(true);
}

function prevSlide() {
    changeSlide(false);
    changeSlideText(false);
}

setInterval(() => {
    nextSlide();
}, 8500);

window.addEventListener('load', updateVideoSources);
window.addEventListener('resize', updateVideoSources);
