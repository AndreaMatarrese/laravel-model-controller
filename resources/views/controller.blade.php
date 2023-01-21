<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel controller</title>
</head>
<body>
   <h2>Film estratti dal DB</h2>
    <div class="cards">
        <div class="card">
            @foreach($movies as $movie)
                <h3>{{ $movie->title }}</h3>
                <h5>{{ $movie->nationality }}</h5>
                <h6>{{ $movie->date }}</h6>
                <div>{{ $movie->vote }}</div>
            @endforeach
        </div>
    </div>
</body>
</html>
