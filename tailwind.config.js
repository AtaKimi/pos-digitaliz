module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {},
    colors: {
      primaryRed: {
        100: '#F54748',
      },
      bgGray: {
        100: '#F7F7F7',
      }
    }
  },
  plugins: [
      require('flowbite/plugin')
  ],
}