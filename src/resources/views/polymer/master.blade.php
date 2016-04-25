<!DOCTYPE html>
<html>
<head>
    <title>Polymer App</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="/vendor/raftalks/uix/js/uix.polymer.js" type="text/javascript"></script>

    <link rel="import" href="/vendor/raftalks/uix/imports/elements.html">

    <style>
        body {
            margin:0;
        }
    </style>
</head>
<body class="fullbleed vertical layout">
<paper-drawer-panel class="flex">
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
    <paper-header-panel main>
        <paper-toolbar>
            <paper-icon-button icon="menu" paper-drawer-toggle></paper-icon-button>
            <div>Title</div>
        </paper-toolbar>
        {{--Main Content--}}
        <div>
            Form Input
            <paper-input label="text input"></paper-input>
            <paper-textarea label="autoresizing textarea input"></paper-textarea>
            <paper-input label="password input" type="password"></paper-input>
            <paper-input label="Date" type="date"></paper-input>
            <paper-input label="disabled input" disabled></paper-input>
        </div>
    </paper-header-panel>
</paper-drawer-panel>
</body>
</html>
