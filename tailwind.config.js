module.exports = {
  purge: [
       './resources/views/**/*.blade.php',
       './resources/js/**/*.vue',
  ],
  theme: {
    extend: {},
  },
  variants: {},
  plugins: [],
  future: {
    removeDeprecatedGapUtilities: true,
  },
}
