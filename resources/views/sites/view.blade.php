<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Web Analytics for {!! $domain !!} - {{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/analytical.js') }}" data-debug-analytical-js="true" defer></script>

        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
        <link rel="manifest" href="/favicon/site.webmanifest">

    </head>
    <body>
       
        <div class="hero-head">

            <div class="hero-content">

                <h1 class="logo">Analytical.js</h1>

                <div class="glassText domain">
                    {!! $domain !!}
                </div>

                @if($domain == "")
                
                    <div class="glassText domain">
                        Please enter a valid domain
                    </div>

                @else

                    <div class="glassText">

                        Site Not Found

                    </div>

                @endif

                <div class="spacer20"></div>

                <a href="/" class="btn btn-gradient-purple-alternative btn100">Go Back</a>

            </div>

        </div>

    </body>
</html>
