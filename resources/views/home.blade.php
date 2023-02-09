<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>


    <main class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div>
                        @foreach ($movies as $movie)
                            <h1>{{ $movie->title }}</h1>
                            <h4>{{ $movie->original_title }}</h4>
                            <h6>{{ $movie->nationality }}</h6>
                            <p>{{ $movie->date }}</p>
                            <p>{{ $movie->vote }}</p>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>

    </main>

</body>

</html>
