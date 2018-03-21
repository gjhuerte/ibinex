<!DOCTYPE html>
<html lang=en-US>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width", initial-scale="1.0", maximum-scale="1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">

        <link rel="shortcut icon" href="{{ asset('favicon.png') }}"/>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,600i,700,700i,800,800i" rel="stylesheet">

        <title>{{ config('app.name') .  (isset($title) ? ' | ' . $title : '') }} </title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/css/uikit.min.css" />
        <link rel="stylesheet" href="{{ asset('css/base.nav.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/base.footer.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

        <script src="{{ asset('js/uikit.min.js') }}"></script>
        <script src="{{ asset('js/uikit-icons.min.js') }}"></script>
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

        @yield('styles_include')
    </head>
    <body>
        @include('layouts.base.navbar')
        @yield('content')
        @include('layouts.base.footer')
    
        <script type="text/javascript">
            
            // ----------page loader-----------//
            $('html, body').css({
                    overflow: 'hidden',
                    height: '100%',
                    cursor: 'wait'
            });
            
            $("body").prepend('<div class="loader"></div>');
            $(window).on("load",function() {
                    $(".loader").fadeOut(10);
                    $('html, body').css({
                            overflow: 'auto',
                            height: 'auto',
                            cursor: 'auto'
                    });
            });
            // ----------page loader-----------//

        </script>

        @yield('scripts_include')
        
    </body>
</html>