/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/Views/**/*.php"],
  theme: {
    extend: {
      backgroundImage: {
        'hero': "url('/images/hero-1.png')",
      }
    },
  },
  plugins: [],
}