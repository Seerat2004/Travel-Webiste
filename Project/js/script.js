let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

// Toggle menu visibility when menu button is clicked
menu.onclick = () => {
    menu.classList.toggle('fa-times');  // Toggle the menu button icon
    navbar.classList.toggle('active');  // Toggle the navbar visibility
};

window.onscroll = () => {
    menu.classList.toggle('fa-times');  // Toggle the menu button icon
    navbar.classList.toggle('active');  // Toggle the navbar visibility
};

const swiper = new Swiper('.home-slider', {
    loop: true, // Enable looping of slides
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    autoplay: {
        delay: 3000, // Auto-slide delay in milliseconds
    },
});


