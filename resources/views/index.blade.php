<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Movies - Home</title>
  <!-- Fonts -->
  <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <!-- Styles -->
  @vite('resources/js/app.js')
</head>

<body>
  
  <header class="page-header mb-3">
    <div class="container">
      <h1>Movies</h1>
    </div>
  </header>

  <main class="main-content">
    <div class="container">
      <div class="row row-gap-3">
        @foreach ($movies as $movie)
          <div class="col-3">
            <div class="card">
              <div class="card-header fw-bold">
                {{ $movie->title }}
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Original title: {{ $movie->original_title }}
                </li>
                <li class="list-group-item">
                  Nationality: {{ $movie->nationality}}
                </li>
                <li class="list-group-item">
                  Release date: {{ $movie->date }}
                </li>
                <li class="list-group-item">
                  Vote: {{ $movie->vote }}
                </li>
              </ul>
            </div>
          </div>
        @endforeach
      </div>
    </div>

  </main>

</body>