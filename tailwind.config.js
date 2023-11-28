/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        "orkney" : ['orkney'],  
      },
      colors : {
        "primary" : '#2D2D2D'
      }
    },
  },
  plugins: [],
}