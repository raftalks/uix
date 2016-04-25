@extends('uix::polymer.master')
@section('body')
<body class="fullbleed vertical layout">
    <paper-drawer-panel class="flex">


        <!-- Nav Content -->
        <paper-header-panel drawer>
            <paper-toolbar>
                <div>Mailbox</div>
            </paper-toolbar>
            {{--Drawer Content--}}
            <div>
                <div role="listbox">
                    <paper-item>Inbox</paper-item>
                    <paper-item>Starred</paper-item>
                    <paper-item>Sent mail</paper-item>
                </div>
            </div>
        </paper-header-panel>



        <paper-drawer-panel main class="flex">

            <paper-header-panel class="list-panel" drawer>
                <!-- List Toolbar -->
                <paper-toolbar>
                    <div>
                        List
                    </div>
                    <paper-icon-button icon="menu" paper-drawer-toggle></paper-icon-button>
                </paper-toolbar>
                <!-- List -->
                <paper-menu class="list">
                    <paper-item>1</paper-item>
                    <paper-item>2</paper-item>
                    <paper-item>3</paper-item>
                    <paper-item>4</paper-item>
                    <paper-item>5</paper-item>
                    <paper-item>6</paper-item>
                    <paper-item>7</paper-item>
                    <paper-item>8</paper-item>
                    <paper-item>9</paper-item>
                    <paper-item>10</paper-item>
                    <paper-item></paper-item>
                    <paper-item></paper-item>
                    <paper-item></paper-item>
                    <paper-item></paper-item>
                    <paper-item></paper-item>
                    <paper-item></paper-item>
                    <paper-item></paper-item>
                    <paper-item></paper-item>
                    <paper-item></paper-item>
                    <paper-item></paper-item>
                </paper-menu>
            </paper-header-panel>

            <paper-header-panel main class="flex">
                <paper-toolbar>
                    <div>Content</div>
                    <paper-icon-button icon="arrow-back" paper-drawer-toggle></paper-icon-button>
                </paper-toolbar>
                {{--Main Content--}}
                <div class="content">
                    Form Input
                    <paper-input label="text input"></paper-input>
                    <paper-textarea label="autoresizing textarea input"></paper-textarea>
                    <paper-input label="password input" type="password"></paper-input>
                    <paper-input label="Date" type="date"></paper-input>
                    <paper-input label="disabled input" disabled></paper-input>
                </div>
            </paper-header-panel>

        </paper-drawer-panel>





    </paper-drawer-panel>
</body>
@endsection