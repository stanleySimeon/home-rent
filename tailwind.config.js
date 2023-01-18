/** @type {import('tailwindcss').Config} */
module.exports = {
    mode : 'jit',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./resources/**/*.jsx",
    "./resources/**/*.css",

  ],
  theme: {
      fontFamily: {
        'Lato': ['Lato', 'sans-serif'],
      },
    extend: {},
  },
  plugins: [],
}
