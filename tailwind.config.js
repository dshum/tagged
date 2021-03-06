const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    content: [
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    ],
    theme: {
        extend: {
            fontFamily: {
                serif: ['Lora', ...defaultTheme.fontFamily.serif],
                sans: ['WorkSans', ...defaultTheme.fontFamily.sans]
            },
            height: {
                '128': '32rem',
            },
            maxHeight: {
                '128': '32rem',
            },
            colors: {
                'light-brown': '#f5deb3'
            }
        }
    },
    plugins: [],
}
