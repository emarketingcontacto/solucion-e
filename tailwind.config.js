import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/views/**/*.blade.php',
        './resources/**/*.js',
        './app/Filament/**/*.php', // Para que Filament brille
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',

    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Jura','sans-serif'],
            },
            colors: {
                brand: {
                    DEFAULT: '#cffd04',
                    dark: '#b5dd03',
                }
            }
        },
    },

    plugins: [forms],
};
