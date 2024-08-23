/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,js}"],
  theme: {
    extend: {
      colors:{
        darkGrey: '#181B1B',
        lightGrey: '#2D3232',
        darkGreen: '#02353C',
        textGreen: '#07FF9F',
        backgroundGrey: '#2C2C2C'
      },
      fontFamily: {
        abeezee: ['ABeeZee', 'sans-serif'],
        bangers: ['Bangers', 'cursive'],
        fredoka: ['Fredoka', 'sans-serif'],
      },
      fontSize: {
        'header-font': '3.815rem',
        'paragraph-font': '1.25rem'
      },
      letterSpacing: {
        'custom-tight': '-0.05em',
        'custom-wide': '0.2em',
      },
    },
  },
  plugins: [],
}

