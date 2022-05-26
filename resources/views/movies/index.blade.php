@extends("layouts.app")

@section('title', 'all movies')

@section('content')
    @include('partials.navbar')

    <h1 class="m-4">Movies: </h1>

    <div class="container">
        <div class="row">
            <div class="col-10">
                @foreach ($movies as $movie)
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="/movies/{{ $movie->id }}" class="nav-link">{{ $movie->title }}</a>
                            <p class="p-2">{{ $movie->storyline }}</p>    
                        </li>    
                    </ul>   
                @endforeach
            </div>
        </div>
    </div>
@endsection