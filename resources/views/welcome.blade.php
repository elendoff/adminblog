<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Admin Blog
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    {{-- <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="css/app.css">
    <script>
        (function () {
                    window.Laravel = {
                        csrfToken: '{{ csrf_token() }}'
                    };
                })();
    </script>
</head>

<body>
    <div id="app">
        @if(Auth::check())
        <mainapp :user="{{Auth::user()}}" :permission="{{Auth::user()->role->permission}}"></mainapp>
        @else
        <mainapp :user="false"></mainapp>
        @endif
    </div>
</body>
<script src="{{mix('/js/app.js')}}"></script>

</html>