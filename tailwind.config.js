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
                "orkney" : ['orkney'],  
                "inter" : ['"Inter"', ...defaultTheme.fontFamily.sans],  
            },
            colors : {
                "primary" : '#2D2D2D',
                "harga" : '#23856D'
              }
        },
    },

    plugins: [forms],
};
