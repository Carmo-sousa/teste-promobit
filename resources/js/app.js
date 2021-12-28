require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

function closeToast(tag) {
    console.log(tag);
    tag.classList.add('hidden');
}

document.querySelectorAll('.toast').forEach(function(toast) {
    setTimeout(function() {
        closeToast(toast);
    }, 5000);
});
