<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">I Film più votati</h1>
            </div>
        </div>  
        <div class="row">
            <div class="col-2">
                <ul>
                    @foreach ($movies as $movie)
                    <li>
                        <h4>Titolo originale: {{$movie->original_title}}</h4>
                        <p>Nazionalità: {{$movie->nationality}}</p>
                        <p>Data di uscita: {{$movie->date}}</p>
                        <p>Voto: {{$movie->vote}}</p>
                    </li> 
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</body>
</html>