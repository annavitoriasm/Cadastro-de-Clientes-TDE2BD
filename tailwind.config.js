/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}",
    '*.{html,js,php}'],
  theme: {
    keyframes: {

    }
  },
  plugins: [
    require('flowbite/plugin')
  ],
}