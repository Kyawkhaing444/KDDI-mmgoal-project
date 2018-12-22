var elixir = require('laravel-elixir');
elixir(function(mix){
   mix.sass('app.scss')

   .styles([
       'bootstrap.min.css',
       'bootstrap.css',
       'mdb.css',
       'mdb.lite.css',
       'mdb.lite.min.css',
       'mdb.min.css',
       'style.css',
       'style.min.css',
       'modules/animations-extended.css',
       'modules/animations-extended.min.css',
       'addons/datatables.css',
       'addons/datatables.min.css'
   ], './public/css/libs.css')

   .scripts([
       'jquery-3.3.1.min.js',
       'bootstrap.js',
       'bootstrap.min.js',
       'mdb.js',
       'mdb.min.js',
       'popper.min.js',
       'modules/chart.js',
       'modules/default-file-input.js',
       'modules/enhanced-modals.js',
       'modules/forms-free.js',
       'modules/jquery.easing.js',
       'modules/scrolling-navbar.js',
       'modules/velocity.js',
       'modules/velocity.min.js',
       'modules/waves.js',
       'modules/wow.js',
       'addons/datatables.js',
       'addons/datatables.min.js',
   ],'./public/js/libs.js')

});
