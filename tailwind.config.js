const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    mode: 'jit',
    theme: {
        container: {
            // you can configure the container to be centered
            center: true,

            // or have default horizontal padding
            padding: '2rem',

            // default breakpoints but with 40px removed
            // screens: {
            //     sm: '600px',
            //     md: '728px',
            //     lg: '984px',
            //     xl: '1240px',
            //     '2xl': '1496px',
            // },
        },
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: '#FF6D0B',
                secondary: '#FFF8F3',
                textColor: '#212529',
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
