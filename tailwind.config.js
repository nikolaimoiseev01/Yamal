import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import hamburgers from 'tailwind-hamburgers';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './node_modules/flowbite/**/*.js\', // Добавляем путь Flowbite'
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Montserrat', ...defaultTheme.fontFamily.sans],
            },
            server: {
                port: 8000, // or any other port that is open and accessible
                host: '0.0.0.0', // to allow external access
            },
            borderRadius: {
                '36': '2.25rem', /* 40px */
                '40': '2.5rem', /* 40px */
                '44': '2.75rem' /* 44px */
            },
            colors: {
                black: {
                    500: '#141414',
                    100: 'rgba(20, 20, 20, 0.5)'
                },
                bright: {
                    500: '#fbfbfb',
                    600: '#FEFEFECC'
                },
                gray: {
                    300: '#d9d9d9',
                    500: '#6e6e6e'
                }
            },
            maxWidth: {
                '8xl': '84.75rem', // 1536px (примерное значение, можно изменить)
            },
            minHeight: {
                '8xl': '84.75rem', // 1536px (примерное значение, можно изменить)
            },
            screens: {
                '2xl': {'max': '1535px'}, // => @media (max-width: 1535px) { ... }
                'xl': {'max': '1279px'}, // => @media (max-width: 1279px) { ... }
                'lg': {'max': '1023px'}, // => @media (max-width: 1023px) { ... }
                'md': {'max': '767px'}, // => @media (max-width: 767px) { ... }
                'sm': {'max': '639px'}, // => @media (max-width: 639px) { ... }
            }
        },
    },

    plugins: [forms, hamburgers],
};
