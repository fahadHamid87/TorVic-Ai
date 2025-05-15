/** @type {import('tailwindcss').Config} */
import tailwindcss from '@tailwindcss/vite'
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [
    tailwindcss(),
  ],
}