const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'indigo-50': '#fff9ed',
                'indigo-100': '#fff1d4',
                'indigo-200': '#ffdfa9',
                'indigo-300': '#ffbd59',
                'indigo-400': '#fea439',
                'indigo-500': '#fea439',
                'indigo-600': '#ed6c09',
                'indigo-700': '#c55109',
                'indigo-800': '#9c4010',
                'indigo-900': '#7e3610',
            },
            screens: {
              sm: '640px',
              md: '768px',
              lg: '1024px',
              xl: '1280px',
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
