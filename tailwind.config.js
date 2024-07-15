/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/Views/**/*.php"],
  theme: {
    fontFamily: {
      'sans': ['"Quicksand"', 'sans-serif']
    },
    extend: {
      backgroundImage: {
        'hero': "url('/images/hero-1.png')",
      }
    },
  },
  plugins: [],
}