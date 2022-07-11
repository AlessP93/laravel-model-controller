<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">I Film più votati</h1>
            </div>
        </div>  
        <div>
            <ul class="row">
                @foreach ($movies as $movie)
                    <div class="col-3">
                        <div class="movies">
                        <a href="{{route("movie", $movie->id)}}">
                            <li>
                                <h4>Titolo originale: {{$movie->original_title}}</h4>
                            </li> 
                        </a>
                        </div>
                    </div>
                @endforeach
            </ul>
        </div>
    </div>
</body>
</html>