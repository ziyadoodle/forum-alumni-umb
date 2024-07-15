/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/Views/**/*.php"],
  theme: {
    fontFamily: {
      'sans': ['"Quicksand"', 'sans-serif', 'ui-sans-serif', 'system-ui'],
      'serif': ['ui-sans-serif', 'system-ui', 'sans-serif', "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"],
    },
    extend: {
      backgroundImage: {
        'hero': "url('/images/hero-1.png')",
      }
    },
  },
  plugins: [],
}