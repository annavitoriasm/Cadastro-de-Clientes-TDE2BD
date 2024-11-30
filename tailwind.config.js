/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}",
    '*.{html,js,php}'],
    content: [
      "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    keyframes: {

    }
  },
  plugins: [
    require('flowbite/plugin')
  ],
}