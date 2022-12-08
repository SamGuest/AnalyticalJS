<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
       
        <div class="hero-head">

            <div class="hero-content">

                <h1 class="logo">Analytical.js</h1>

                <p>Open source, transparent, simple and free for all website analytics.</p>

                <a href="https://github.com/SamGuest/AnalyticalJS" class="btn btn-gradient-purple">View on GitHub</a>

            </div>

        </div>

    </body>
</html>
