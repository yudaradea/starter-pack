import './bootstrap';
// import '../../vendor/masmerise/livewire-toaster/resources/js';
// import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
import 'flowbite';

Alpine.plugin(focus);

document.addEventListener('livewire:load', function (event) {
    window.livewire.hook('afterDomUpdate', () => {
        const selectBoxes = document.querySelectorAll('select');
        selectBoxes.forEach(function (s) {
            const selectedOption = s.querySelector('option[selected]');
            if (selectedOption) {
                s.value = selectedOption.value;
            }
        });
    });
});
// Alpine.start();
