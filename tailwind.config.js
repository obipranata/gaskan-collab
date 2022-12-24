/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      container: {
        screens: {
          xl: "1284px",
        },
        center:true,
      },
      fontFamily: {
        "neuton" : "neuton",
        "poppins" : "Poppins",
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}