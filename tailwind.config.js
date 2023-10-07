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
                main: ['Exo2', 'Exo', 'Sofia Sans', 'Rubik']
            },
            colors: {
                'primary': {
                    '50': '#f6f6f6',
                    '100': '#e7e7e7',
                    '200': '#d1d1d1',
                    '300': '#b0b0b0',
                    '400': '#888888',
                    '500': '#6d6d6d',
                    '600': '#5d5d5d',
                    '700': '#4f4f4f',
                    '800': '#454545',
                    '900': '#3d3d3d',
                    '950': '#000000',
                },
                'secondary': {
                    '50': '#ebfef6',
                    '100': '#d0fbe7',
                    '200': '#a4f6d4',
                    '300': '#78edc4',
                    '400': '#2fd8a2',
                    '500': '#0abf8b',
                    '600': '#009b72',
                    '700': '#007c5f',
                    '800': '#03624b',
                    '900': '#045040',
                    '950': '#012d25',
                },           
            },
            height: {
                '128': '32rem',
            },
        },
    },

    plugins: [forms],
};
