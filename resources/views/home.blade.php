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


    <main>
        <div class="container my-5">
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-4 mb-5">

                @foreach ($movies as $movie)
                    <div class="col">
                        <div class="card text-bg-dark mb-3 h-100 text-center" style="max-width: 18rem;">
                            <div class="card-header">{{ $movie->date }} || Vote: {{ $movie->vote }} </div>
                            <div class="card-body">
                                <h2 class="card-title">{{ $movie->title }}</h2>
                                <h5>{{ $movie->original_title }}</h5>
                                <p class="card-text">{{ $movie->nationality }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

    </main>

</body>

</html>
