/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        blue1: "#202E51",
        gray1: "#767676",
        blue2: "#081B4B"
      },
      fontFamily:{
        font:[ 'Montserrat, system-ui sans-serif']
      },
      
    },
  },
  plugins: [],
}

