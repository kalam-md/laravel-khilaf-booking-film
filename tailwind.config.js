/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/dashboard-admin/*.blade.php",
    "./resources/dashboard-admin/**/*.blade.php",
    "./resources/dashboard-admin/category/*.blade.php",
    "./resources/dashboard-admin/studio/*.blade.php",
    "./resources/dashboard-admin/movie/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    {
      transform: (content) => content.replace(/taos:/g, ''),
    }
  ],
  safelist: [
    '!duration-0',
    '!delay-0',
    'html.js :where([class*="taos:"]:not(.taos-init))'
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/forms'),
    require('@tailwindcss/line-clamp'),
    require('@tailwindcss/typography'),
    require('taos/plugin')
  ],
}
