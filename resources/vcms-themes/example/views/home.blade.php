<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

    </head>
    <body>
        @for ( $i =0; $i < 10; $i++ ) 
            <p> {{ $theme->description }} </p>
        @endfor
    </body>
</html>