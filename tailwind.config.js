/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{php,html,js}", "./components/*.php", "./templates/*.php", "./assets/svg/*.php"],

  darkMode: "class",
  theme: {
    extend: {
      backgroundImage: {
        'printer': "url('http://teknify.local/wp-content/uploads/2024/06/PORTADA.png')",
      }
    },
  },
  plugins: [
    require('tailwindcss-animated')
  ],
}

