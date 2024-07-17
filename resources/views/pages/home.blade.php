@extends('layouts.app')

@section('page-title', 'homepage')

@section('main-content')
    <div class="container mt-5">
        <div class="row">
            @foreach($movies as $movie)
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
                        <p class="card-text">Nationality: {{ $movie->nationality }}</p>
                        <p class="card-text">Release Date: {{ $movie->date }}</p>
                        <p class="card-text">Vote: {{ $movie->vote }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection