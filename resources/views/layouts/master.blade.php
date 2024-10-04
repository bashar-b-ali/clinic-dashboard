<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> SSSS </title>
    <link rel="icon" type="image/png" href=" ">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&amp;family=Oxygen:wght@400;700&amp;display=swap" rel="stylesheet">
    <style>
         :root {
            --adminuiux-content-font: 'Open Sans';
            --adminuiux-content-font-weight: 400;
            --adminuiux-title-font: "Oxygen", sans-serif;
            --adminuiux-title-font-weight: 700
        }
    </style>
    <script defer="defer" src="{{ asset('assets/js/app.js' )}}"></script>
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
</head>

<body class="main-bg main-bg-opac main-bg-blur">

    @include('layouts.loader.loader')

    @include('layouts.navbar.navbar')

    <div class="adminuiux-wrap">

        @include('layouts.side-menu.side-menu')

        <main class="adminuiux-content has-sidebar" onclick="contentClick()">

            @yield('body')
            
        </main>

    </div>

    @include('layouts.footer.footer')

    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/costume/sweetalert.js') }}"></script>

    @yield('js')

</body>

</html>