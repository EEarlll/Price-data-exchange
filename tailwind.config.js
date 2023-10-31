/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
  ],
  theme: {
      extend: {
          colors: {
              text: "#f2f2f2",
              primary: "black",
              secondary: "#626262",
              accent: "#282828",
          },
      },
  },
  daisyui: {
    themes:['black']
  },
  plugins: [require("daisyui")],
};
