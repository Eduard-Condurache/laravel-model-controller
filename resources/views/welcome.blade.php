@extends('layouts.app')

@section('main-content')

<main>
    
    <div class="container">
        <div class="row">
            @foreach($movies as $movie)
            <div class="card col-3">
                <div class="card-body">
                    <h5 class="card-title">
                        Titolo: {{ $movie['title'] }}
                    </h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">
                        Titolo originale: {{ $movie['original_title'] }}
                    </h6>
                    <p class="card-text">
                        Nationalità: {{ $movie['nationality'] }}
                    </p>
                    <p class="card-text">
                        Data: {{ $movie['date'] }}
                    </p>
                    <p class="card-text">
                        Voto: {{ $movie['vote'] }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
</main>
@endsection
