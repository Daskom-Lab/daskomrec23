/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./html/*.{html,js}"],
  theme: {
    extend: {
      backgroundImage: {
        "space-milkyway": "url('/public/assets/homepage/Main_Background.png')",
        "dark-space": "url('/public/assets/dasboardcaas/Space_Background.png')",
      },
      boxShadow: {
        "semi-sm": "0px 0px 8px 3px rgba(0, 0, 0, 0.3)", //use in homepage (login button)
        "semi-lg": "0px 0px 50px 1px rgba(0, 0, 0, 0.3)",
        "semi-xl": "0px 0px 10px 1px rgba(0, 0, 0, 0.3)", //use in seidebar
      },
      fontFamily: {
        arcade: ['"Arcade Classic"'],
        pixel: ['"VP Pixel"'],
      },
      width: {
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
      },
      cursor: {
        "space-ship": "url('/public/assets/cursor/space_ship.cur'), default",
      },
    },
  },
  plugins: [],
};
