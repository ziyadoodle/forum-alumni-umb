/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./app/Views/**/*.php",
    "./vendor/myth/auth/src/Views/**/*.php"
  ],
  daisyui: {
    themes: ["light"]
  },
  theme: {
    extend: {
      fontFamily: {
        'sans': ['"Quicksand"', 'Helvetica', 'Arial', 'sans-serif', 'ui-sans-serif', 'system-ui'],
        'serif': ['ui-sans-serif', 'system-ui', 'sans-serif', "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"],
      },
      backgroundImage: {
        'hero': "url('/images/hero-1.png')",
      }
    },
  },
  plugins: [
    require('daisyui'),
  ],
}