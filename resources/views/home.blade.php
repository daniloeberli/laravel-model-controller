<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
         @vite('resources/js/app.js')
    </head>
    <body class="p-3">
        <div class="container">
            <h1 class="text-center">Movies</h1>
            <!-- elemento card per visualizzare i dati in pagina -->
            <div class="row">
                @foreach ($movies as $movie)
                <div class="col col-sm-6 col-md-3 g-3">
                    <div class="card text-center" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$movie->title}}</h5>
                            <h6 class="card-subtitle mb-2">{{$movie->original_title}}</h6>
                            <p class="card-text">{{$movie->nationality}}</p>
                            <p class="card-text">{{$movie->date}}</p>
                            <p class="card-text">{{$movie->vote}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>            
        </div>

    </body>
</html>
