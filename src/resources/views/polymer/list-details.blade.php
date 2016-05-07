@extends('uix::polymer.master')
@section('body')
<body class="fullbleed vertical layout">

<dom-module id="main-app">
    <template>
        <layout-master app-title="APP NAME">

            <iron-ajax
                    auto
                    url="http://homestead.dev/list"
                    handle-as="json"
                    last-response="@{{items}}"
                    debounce-duration="300"></iron-ajax>

            <list-view title="Module Name" items="@{{items}}"></list-view>

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
