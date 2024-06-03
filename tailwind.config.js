import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './vendor/masmerise/livewire-toaster/resources/views/*.blade.php',
    ],
    darkMode: 'false',

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                'font-jakart': ['Plus Jakarta Sans', 'sans-serif'],
            },
            colors: {
                'text-primary': '#111c2d',
            },
        },
    },

    plugins: [forms, typography],
};
