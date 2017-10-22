<!--                             __               __ 
   __    __   __         __     /\ \   __  _____ /\ \
  / /\   \ \ /\_\  _ __ /\ \   _\_\ \ /\_\/\  __\\ \ \
  \ \ \  /\ \\/\ \/\`'__\/__\ /\  __ \ /\ \ \ \___\ \ \
   \ \ \/ / / \ \ \ \ \/ \ \ \\ \ \_\ \  \ \ \  __\\ \ \_____
    \ \ \/ /   \ \_\ \_\  \ \_\\ \_____\  \ \ \ \___\ \______/
     \/___/     \/_/\/_/   \/_/ \/___/_/\ /_/\/_____/\/_____/
                                P R O D U C T I O N S
 -->
 <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ViriCMS Editor</title>

        @require( asset('/plugins/css/css-reset.css') )
        
        @yield('head')
        
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    </head>

    <body>
        @yield('body')

        @yield('script')
    </body>
</html>