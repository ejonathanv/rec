import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'primary': '#0062a6',
                'secondary': '#91D56E',
                'secondary-900': '#20754b',
                'secondary-500': '#6ba739',
                'secondary-300': '#3fa773',
                'dark': '#009e4f',
                'light': '#f0eee4',
            }
        },
    },

    plugins: [forms],
};
