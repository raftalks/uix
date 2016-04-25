var elixir = require('laravel-elixir');

require('./elixir-vulcanize-extension');

elixir(function(mix) {
    mix.scripts([
        './bower_components/webcomponentsjs/webcomponents-lite.js'
    ],
        'src/resources/assets/js/uix.polymer.js'
    );

    mix.vulcanize('resources/polymer/elements.html', 'src/resources/assets/imports');
});