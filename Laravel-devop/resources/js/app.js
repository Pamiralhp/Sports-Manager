import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
const darkModeToggle = document.querySelector('#darkModeToggle');
const html = document.querySelector('html');

darkModeToggle.addEventListener('click', () => {
    html.classList.toggle('dark');
    const darkModeEnabled = html.classList.contains('dark');
    localStorage.setItem('dark_mode', darkModeEnabled);
});
