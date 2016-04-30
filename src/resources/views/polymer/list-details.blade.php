@extends('uix::polymer.master')
@section('body')
<body class="fullbleed vertical layout">

<dom-module id="main-app">
    <template>
        <layout-master>

            <list-view title="Module Name">


                {{--<paper-tabs class="bottom fit dark-shaded-bg" selected="@{{selected}}">--}}
                    {{--<paper-tab active="true">Tab 1</paper-tab>--}}
                    {{--<paper-tab>Tab 2</paper-tab>--}}
                    {{--<paper-tab>Tab 3</paper-tab>--}}
                {{--</paper-tabs>--}}

                {{--<iron-pages selected="@{{selected}}" main>--}}
                    {{--<div>Page 1</div>--}}
                    {{--<div>Page 2</div>--}}
                    {{--<div>Page 3</div>--}}
                {{--</iron-pages>--}}

                <paper-tabs class="bottom fit dark-shaded-bg" selected='@{{selected}}' attr-for-selected='key'>
                    <paper-tab key='foo'>Foo</paper-tab>
                    <paper-tab key='bar'>Bar</paper-tab>
                    <paper-tab key='baz'>Baz!</paper-tab>
                </paper-tabs>

                <div main>
                    <neon-animated-pages selected='@{{selected}}'
                                         attr-for-selected='key'
                                         entry-animation='slide-from-right-animation'
                                         exit-animation='slide-left-animation'>
                        <neon-animatable key='foo'>
                            @for($i=0; $i<50; $i++)

                                <paper-card heading="Card Title" style="width: 100%">
                                    <div class="card-content">Some content</div>
                                    <div class="card-actions">
                                        <paper-button>Some action</paper-button>
                                    </div>
                                </paper-card>

                            @endfor
                        </neon-animatable>
                        <neon-animatable key='bar'>
                            <paper-card heading="Card Title" style="width: 100%">
                                <div class="card-content">Some content</div>
                                <div class="card-actions">
                                    <paper-button>Some action</paper-button>
                                </div>
                            </paper-card>
                        </neon-animatable>
                        <neon-animatable key='baz'>
                            <paper-card heading="Card Title" style="width: 100%">
                                <div class="card-content">Some content</div>
                                <div class="card-actions">
                                    <paper-button>Some action</paper-button>
                                </div>
                            </paper-card>
                        </neon-animatable>
                    </neon-animated-pages>
                </div>






            </list-view>

        </layout-master>
    </template>


    <script>
        Polymer({
            is: 'main-app'
        });
    </script>
    </dom-module>
<main-app></main-app>
</body>
@endsection
