const mix = require('laravel-mix');
require('dotenv').config();

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
const glob = require('glob')

let theme = null;

let distPath = mix.inProduction() ? 'resources/assets' : 'resources/pre-assets';

function mixAssetsDir(query, cb) {
  (glob.sync('resources/src/' + query) || []).forEach(f => {
    f = f.replace(/[\\\/]+/g, '/');
    cb(f, f.replace('resources/src', distPath));
  });
}

function themeCss(path) {
  let sf = theme ? '-'+theme : '';

  return `${distPath}/${path}${sf}.css`
}

function dcatPath(path) {
  return 'resources/src/dcat/' + path;
}

function dcatDistPath(path) {
  return distPath + '/dcat/' + path;
}


/*
 |--------------------------------------------------------------------------
 | Dcat Admin assets
 |--------------------------------------------------------------------------
 */

mix.copyDirectory('resources/src/images', distPath + '/images');
mix.copyDirectory('resources/src/fonts', distPath + '/fonts');

// AdminLTE3.0
mix.sass('resources/src/adminlte/scss/AdminLTE.scss', themeCss('adminlte/adminlte')).sourceMaps();
mix.js('resources/src/adminlte/js/AdminLTE.js', distPath + '/adminlte/adminlte.js').sourceMaps();

mix.copyDirectory(dcatPath('plugins'), dcatDistPath('plugins'));
mix.js(dcatPath('js/dcat-app.js'), dcatDistPath('js/dcat-app.js')).sourceMaps();
mix.sass(dcatPath('sass/dcat-app.scss'), themeCss('dcat/css/dcat-app')).sourceMaps();
mix.copy(dcatPath('sass/nunito.css'), `${distPath}/dcat/css/nunito.css`);

mixAssetsDir('dcat/extra/*.js', (src, dest) => mix.js(src, dest));
mixAssetsDir('dcat/extra/*.scss', (src, dest) => mix.sass(src, dest.replace('scss', 'css')));
