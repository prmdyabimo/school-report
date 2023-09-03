/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./app/Views/*.php",
    "./app/Views/**/*.php",
    "./app/Views/**/**/*.php",
    "./app/Views/**/**/**/*.php",
    "./public/assets/tw-elements/**/**/**/*.js",
    "./public/assets/flowbite/**/*.js",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};

