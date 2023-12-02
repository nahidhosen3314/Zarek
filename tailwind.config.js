/** @type {import('tailwindcss').Config} */

module.exports = {
  content: [
    "./**/*.php"
  ],
  theme: {
    screens: {
      'sm': '640px',

      'md': '768px',

      'lg': '1024px',

      'xl': '1170px',
    },
    container: {
      center: true,
      padding: '16px',
    },
    extend: {
      colors:{
        'primary': '#7c3aed',
        'secondary': '#ddd',
        'borderColor': '#c2c2c2',
        'bgColor': '#1e272e',
      }
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
  ],
}

