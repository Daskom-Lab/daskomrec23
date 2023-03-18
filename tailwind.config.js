/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./html/*.{html,js}", "./resources/**/*.blade.php", "./resources/**/*.js", "./resources/**/*.vue"],
  theme: {
    extend: {
      backgroundImage: {
        "space-milkyway": "url('/assets/homepage/Main_Background.png')",
        "dark-space": "url('/assets/Space_Background.png')",
      },
      boxShadow: {
        "semi-sm": "0px 0px 8px 2px rgba(0, 0, 0, 0.3)",
        "in-semi-sm": "inset 0px 0px 8px 2px rgba(0, 0, 0, 0.3)",
        "semi-lg": "0px 0px 50px 1px rgba(0, 0, 0, 0.3)",
        "semi-xl": "0px 0px 10px 1px rgba(0, 0, 0, 0.3)",
      },
      fontFamily: {
        arcade: ['"Arcade Classic"'],
        pixel: ['"VP Pixel"'],
      },
      width: {
        0.25: "0.0625rem",
        108: "16rem",
        110: "19rem",
        112: "21rem",
        115: "23rem",
        117: "27rem",
        120: "28rem",
        130: "36rem",
        140: "40rem",
        170: "50rem",
      },
      height: {
        130: "36rem",
        124: "33rem",
        120: "30rem",
        118: "28rem",
        117: "27rem",
        116: "25rem",
        115: "23rem",
        112: "21rem",
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
        "space-ship": "url('/assets/cursor/space_ship.cur'), default",
      },
    },
  },
  plugins: [],
};
