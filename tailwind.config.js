
/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
  ],
  theme: {
      extend: {},
  },
  daisyui: {
      themes: ["night"],
  },
  plugins: [require("daisyui")],
};
