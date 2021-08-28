/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JS files.
 |
 */

const mix = require('laravel-mix');
// const dotenv = require('dotenv');

mix.setPublicPath('assets') // generate manifest in this directory

  // JavaScript ES6
  .js('src/scripts/app.js', 'assets/scripts/main.js')
  // .extract([
  //   'fancybox',
  //   'jquery',
  // ])

  // SCSS to CSS
  .sass('src/styles/app.scss', 'assets/styles/main.css')
  // .sourceMaps();

  // Process images + media
  .copyDirectory('src/media/src', 'assets/images')

  // Live reload browser
  .browserSync({
    watch: true,
    // proxy: process.env.SITE_URL,
    proxy: 'https://pyramidschemebar.local',
    // files: [
    //   '{*,**/*}.css',
    //   '{*,**/*}.js',
    //   '{*,**/*}.twig'
    // ],
    files: [
      'assets/scripts/*.js',
      'src/scripts/*.js',
      'src/scripts/**/*.js',
      'assets/styles/*.css',
      'src/styles/*.scss',
      'src/styles/**/*.scss',
      'templates/*.twig',
      'templates/**/*.twig'
    ]
  })

  // Additional config
  .minify([
    'assets/scripts/main.js',
    'assets/styles/main.css'
  ]) // create sibling *.min file
  // .disableSuccessNotifications()
  // .version()
  .options({
    // autoprefixer: {
    //   options: {
    //     grid: "autoplace"
    //   }
    // },
    // postCss: [
    //   require('autoprefixer')
    // ],
    processCssUrls: false,
  })
;
