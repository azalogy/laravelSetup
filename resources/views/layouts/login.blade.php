<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

   
        </style>
    </head>
    <body >
            <div id="app"> 
            {{-- <login></login>
            <register></register> --}}
            <router-view></router-view>
         
            </div>
        
      

        <script src="{{ asset('/js/app.js') }}"></script>
    </body>
</html>
