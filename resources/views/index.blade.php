{{--  default layout extended  --}}
@extends('layouts.default')

{{-- page title --}}
@section('page-title', 'Home - Movies')

{{--  all the body content here --}}
@section('content')
    
  <header class="page-header mb-3">
    <div class="container">
      <h1>Movies</h1>
    </div>
  </header>

  <main class="main-content">
    <div class="container">
      <div class="row row-gap-3">
        @foreach ($movies as $movie)
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card card--height">
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
@endsection  