<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{config('app.name')}}</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">  
        <link type="text/css" rel="stylesheet" href="{{ asset('/widget/css/rcarousel.css')}}" />
        <link href="{{ asset('/css/style.css')}}" rel="stylesheet" type="text/css">
        <link href="css/liteaccordion.css" rel="stylesheet" />
        <script src="{{ asset('js/comun.js')}}" type="text/javascript"></script>
        <script type="text/javascript" src="{{ asset('/widget/lib/jquery-2.2.3.js')}}"></script>
        <script type="text/javascript" src="{{ asset('/widget/lib/jquery.ui.core.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('/widget/lib/jquery.ui.widget.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('/widget/lib/jquery.ui.rcarousel.min.js')}}"></script>
        <script type="text/javascript" src="js/jquery.roundabout.js"></script>
        <script src="js/liteaccordion.jquery.js"></script>
    </head>


    <body>
        <div id="bodyS21">
            <h1><a href="index.html" class="centrar" id="logo"></a></h1>
            @include('include.menu')
            <div class="cleaner_h30"></div>
                <div id="contenidoPage">
                    @yield('content')
                </div>
            @include('include.footer')
        </div>
    </body>

    <script>
        function justNumbers(e){
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
        return true;
            
        return /\d/.test(String.fromCharCode(keynum));
        }
    </script>
</html>

