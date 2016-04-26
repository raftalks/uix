var elixir = require('laravel-elixir');

require('./elixir-vulcanize-extension');

elixir(function(mix) {
    mix.scripts([
        './bower_components/webcomponentsjs/webcomponents-lite.js'
    ],
        'src/resources/assets/js/uix.polymer.js'
    );


    mix.styles([
        './node_modules/normalize.css/normalize.css'
    ],
        'src/resources/assets/css'
    );

    mix.vulcanize('resources/polymer/elements.html', 'src/resources/assets/imports');
});