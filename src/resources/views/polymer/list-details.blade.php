@extends('uix::polymer.master')
@section('body')
<body class="fullbleed vertical layout">

<dom-module id="main-app">
    <template>
        <layout-master app-title="APP NAME">

            <list-view title="Module Name" ajax-url="/list"></list-view>

        </layout-master>
    </template>


    <script>
        Polymer({
            is: 'main-app',

            ready: function()
            {
                this.selected = 0;
            }
        });
    </script>
</dom-module>
<main-app></main-app>
</body>
@endsection
