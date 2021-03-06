<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>Todos</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


        <link rel="icon" href="{{ asset('images/icon/favicon.ico') }}" type="image/png" sizes="16x16">    


        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">


       
    </head>
    <body>
        @include('commons.navbar')

        @yield('cover')

        <div class="container clearfix">
            @include('commons.error_messages')
            @yield('content')
        </div>

        @include('commons.footer')
        
        <!-- JS記述 -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         @yield('sctipt')
    </body>
</html>