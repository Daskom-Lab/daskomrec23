/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./html/src/*.{html,js}"],
  theme: {
    extend: {
      backgroundImage: {
        "space-milkyway": "url('/assets/homepage/Main_Background.png')",
      },
      dropShadow: {
        custom1: "0px 0px 6px rgba(180, 113, 7, 0.8)",
      },
      fontFamily: {
        arcade: ['"Arcade Classic"'],
        pixel: ['"VP Pixel"'],
      },
    },
  },
  plugins: [],
};
