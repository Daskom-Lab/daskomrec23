/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./html/*.{html,js}"],
  theme: {
    extend: {
      backgroundImage: {
        "space-milkyway": "url('/public/assets/homepage/Main_Background.png')",
        "dark-space": "url('/assets/dasboardcaas/Space_Background.png')",
      },
      dropShadow: {
        "brown-shadow": "0px 0px 6px rgba(180, 113, 7, 0.8)", //use in homepage
        custom2: "0px 0px 50px rgba(255, 244, 64, 1)",
        custom3: "0px 0px 10px rgba(255, 244, 64, 1)", //use if button in sidebar active
        custom4: "0px 0px 5px rgba(255, 255, 255, 1)",
        "custom4-active": "0px 0px 5px rgba(255, 244, 64, 1)",
        custom5: "0px 0px 30px rgba(255, 244, 64, 1)",
      },
      boxShadow: {
        custom1: "inset 0px 0px 5px rgba(255, 255, 255, 1)", //inner shadow in form box
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
      minWidth: {
        50: "50px",
      },
    },
  },
  plugins: [],
};
