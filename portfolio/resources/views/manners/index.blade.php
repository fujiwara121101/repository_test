<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>マナー集</h1>
        <div class='manners'>
            @foreach($manners as $manner)    
                <div class='manners'>
                    <a href="/manners/{{ $manner->id }}"><h2>{{ $manner->title}}</h2></a>
                </div>
            @endforeach
        </div>
    </body>
</html>

