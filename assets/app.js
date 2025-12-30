/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import '@fortawesome/fontawesome-free';
import '@fortawesome/fontawesome-free/css/fontawesome.min.css';
import './styles/app.scss';

console.log('This log comes from assets/app.js - welcome to AssetMapper! 🎉');


document.addEventListener('DOMContentLoaded', function () {
    const burger = document.getElementById('burger');
    const navLinks = document.getElementById('nav-links');

    burger.addEventListener('click', () => {
        navLinks.classList.toggle('active');
        burger.classList.toggle('open');
    });
});


document.addEventListener('DOMContentLoaded', () => {
    const stars = document.querySelectorAll('.rating-stars .star-btn');
    const noteInput = document.getElementById('note-value');
    const form = document.getElementById('note-form');

    let selectedValue = 0;

    stars.forEach((star, index) => {
        const value = index + 1;

        star.addEventListener('mouseenter', () => {
            highlightStars(value);
        });

        star.addEventListener('mouseleave', () => {
            highlightStars(selectedValue);
        });

        star.addEventListener('click', () => {
            console.log(`Étoile cliquée : ${value}`);
            selectedValue = value;
            noteInput.value = value;
            highlightStars(value);
            form.submit();
        });
    });

    function highlightStars(value) {
        stars.forEach((star, index) => {
            if (index < value) {
                star.classList.add('selected');
            } else {
                star.classList.remove('selected');
            }
        });
    }
});