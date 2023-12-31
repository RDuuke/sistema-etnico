/** @type {import('tailwindcss').Config} */
module.exports = {  
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        project: {
          'base': '#F43F5E',
          'error': '#F43F5E',
          'icon-hover': '#0369A1',
          'sidebar': '#847267',
          'primary': '#10e7da80',
        }
      }, padding: {
        '0': '0',
        '1': '0.25rem',
        '2': '0.5rem',
        '2.5': '0.65rem',
        '2.6': '0.7rem',
        '3': '0.75rem',
        '4': '1rem',
        '5': '1.25rem',
        '6': '1.5rem',
        '7': '1.75rem',
        '8': '2rem',
        '9': '2.25rem',
        '9.5': '2.4rem',
        '10': '2.5rem',
        '11': '2.75rem',
        '11.5': '2.85rem',
        '12': '3rem',
        '12.5': '3.3rem',
        '14': '3.5rem',
        '14.5': '3.7rem',
        '16': '4rem',
        '17': '4.25rem',
        '18': '4.5rem',
        '19': '4.6rem',
        '19.5': '4.7rem',
        '20': '5rem',
        '23': '5.9rem',
        '24': '6rem',
        '28': '7rem',
        '32': '8rem',
        '36': '9rem',
        '40': '10rem',
        '44': '11rem',
        '48': '12rem',
        '52': '13rem',
        '56': '14rem',
        '60': '15rem',
        '64': '16rem',
        '72': '18rem',
        '80': '20rem',
        '96': '24rem',
      },
    },
  },
  plugins: [],
}