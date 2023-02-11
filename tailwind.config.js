/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./html/*.{html,js}"],
  theme: {
    extend: {
      backgroundImage: {
        "space-milkyway": "url('/public/assets/homepage/Main_Background.png')",
      },
    },
  },
  plugins: [],
};
