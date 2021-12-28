require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

function closeToast(tag) {
    tag.parentNode.removeChild(tag);
}

document.querySelectorAll('.toast').forEach(function(toast) {
    setTimeout(function() {
        closeToast(toast);
    }, 3000);
});
