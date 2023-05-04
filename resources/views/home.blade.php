<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
         @vite('resources/js/app.js')
    </head>
    <body>
        <div class="container">
            <h1>Movies</h1>

            @foreach ($movies as $movie)
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                    <h5 class="card-title">{{$movie->title}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$movie->original_title}}</h6>
                    <p class="card-text">{{$movie->nationality}}</p>
                    <p class="card-text">{{$movie->date}}</p>
                    <p class="card-text">{{$movie->vote}}</p>
                    </div>
                </div>
            @endforeach
        </div>

    </body>
</html>
