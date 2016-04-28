@extends('uix::polymer.master')
@section('body')
<body class="fullbleed vertical layout">
    <layout-master>

        <list-view title="Module Name">
            <paper-tabs class="bottom fit dark-shaded-bg" selected="0" view-tabs>
                <paper-tab>All Items</paper-tab>
                <paper-tab>TWO</paper-tab>
                <paper-tab>THREE</paper-tab>
                <paper-tab>FOUR</paper-tab>
                <paper-tab>FIV</paper-tab>
                <paper-tab>SIX</paper-tab>
            </paper-tabs>

            <div main>
                @for($i=0; $i<50; $i++)

                    <paper-card heading="Card Title" style="width: 100%">
                        <div class="card-content">Some content</div>
                        <div class="card-actions">
                            <paper-button>Some action</paper-button>
                        </div>
                    </paper-card>

                @endfor
            </div>
        </list-view>

    </layout-master>
</body>
@endsection
