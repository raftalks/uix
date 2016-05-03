@extends('uix::polymer.master')
@section('body')
<body class="fullbleed vertical layout">

<dom-module id="main-app">
    <template>
        <layout-master app-title="APP NAME">

            <list-view title="Module Name">



            </list-view>

            {{--<list-view title="Module Name">--}}

               {{----}}

                {{--<paper-tabs class="bottom fit dark-shaded-bg" selected='@{{selected}}'>--}}
                    {{--<paper-tab>Section A</paper-tab>--}}
                    {{--<paper-tab>Section B</paper-tab>--}}
                    {{--<paper-tab>Section C</paper-tab>--}}
                {{--</paper-tabs>--}}

                {{--<div main>--}}
                    {{--<neon-animated-pages selected='@{{selected}}'--}}
                                         {{--entry-animation='slide-from-right-animation'--}}
                                         {{--exit-animation='slide-left-animation'>--}}

                        {{--<neon-animatable>--}}
                            {{--@for($i=0; $i<50; $i++)--}}

                                {{--<paper-card heading="Card Title" style="width: 100%">--}}
                                    {{--<div class="card-content">Some content</div>--}}
                                    {{--<div class="card-actions">--}}
                                        {{--<paper-button>Some action</paper-button>--}}
                                    {{--</div>--}}
                                {{--</paper-card>--}}

                            {{--@endfor--}}
                        {{--</neon-animatable>--}}

                        {{--<neon-animatable>--}}
                            {{--Section B Page--}}

                        {{--</neon-animatable>--}}

                        {{--<neon-animatable>--}}
                            {{--Section C Page--}}
                        {{--</neon-animatable>--}}

                    {{--</neon-animated-pages>--}}
                {{--</div>--}}


            {{--</list-view>--}}

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
