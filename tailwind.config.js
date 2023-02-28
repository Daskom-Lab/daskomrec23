/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./html/*.{html,js}", "./resources/**/*.blade.php", "./resources/**/*.js", "./resources/**/*.vue"],
  theme: {
    extend: {
      backgroundImage: {
        "space-milkyway": "url('/public/assets/homepage/Main_Background.png')",
        "dark-space": "url('/public/assets/Space_Background.png')",
      },
      boxShadow: {
        "semi-sm": "0px 0px 8px 2px rgba(0, 0, 0, 0.3)", //use in homepage (login button)
        "in-semi-sm": "inset 0px 0px 8px 2px rgba(0, 0, 0, 0.3)",
        "semi-lg": "0px 0px 50px 1px rgba(0, 0, 0, 0.3)",
        "semi-xl": "0px 0px 10px 1px rgba(0, 0, 0, 0.3)", //use in seidebar
      },
      fontFamily: {
        arcade: ['"Arcade Classic"'],
        pixel: ['"VP Pixel"'],
      },
      width: {
        115: "23rem",
        120: "28rem",
        130: "36rem",
        170: "50rem",
      },
      height: {
        130: "36rem",
        124: "33rem",
      },
      colors: {
        "dark-sky": "#00172B",
        "dream-dark": "#00111E",
        "deep-sky": "#233B4E",
        "dark-sun": "#f3964a",
        "bright-sun": "#ffd0a9",
      },
      transitionDuration: {
        10: "10ms",
      },
      cursor: {
        "space-ship": "url('/public/assets/cursor/space_ship.cur'), default",
      },
    },
  },
  plugins: [],
};
