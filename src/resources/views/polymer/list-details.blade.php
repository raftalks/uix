@extends('uix::polymer.master')
@section('body')
<body class="fullbleed vertical layout">
    <layout-master>

            @for($i=0; $i<50; $i++)
                    <paper-card heading="Card Title">
                            <div class="card-content">Some content</div>
                            <div class="card-actions">
                                    <paper-button>Some action</paper-button>
                            </div>
                    </paper-card>

            @endfor
    </layout-master>
</body>
@endsection
