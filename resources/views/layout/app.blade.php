<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
      
        <link rel="stylesheet" href="{{asset("css/app.css")}}"> 
        <title>{{config('app.name', 'LSAPP')}}</title>
    </head>
    <body>
        @include('inc.navbar')
        <div class='container'>
            @include('inc.massage')
            @yield('content');
            <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
            <script>
                CKEDITOR.replace( 'article-ckeditor' );
            </script>
        </div>
    </body>
</html>
