module.exports = {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        width: {
          '128': '50rem'
        },
        fontFamily: {
            'sansation': "'Sansation', sans-serif"
        },
        colors: {
            'onepiece': '#3D3B3B',
        }
    },
  },
  plugins: [],
}
