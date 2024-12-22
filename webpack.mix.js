let mix = require('laravel-mix')

mix.extend('nova', require('laravel-nova-devtool'))

mix
  .setPublicPath('dist')
  .js('resources/js/field.js', 'dist')
  .vue({ version: 3 })
  .nova('digitaltunnel/nova-media-library')
