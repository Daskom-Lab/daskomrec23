/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./html/*.{html,js}"],
  theme: {
    extend: {
      backgroundImage: {
        "space-milkyway": "url('/public/assets/homepage/Main_Background.png')",
      },
      dropShadow: {
        "brown-shadow": "0px 0px 6px rgba(180, 113, 7, 0.8)", //use in homepage
      },
    },
  },
  plugins: [],
};
