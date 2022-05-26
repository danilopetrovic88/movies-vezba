@extends("layouts.app")

@section('title', $movie->title)

@section('content')
    @include('partials.navbar')

    <h1 class="m-4">Single movie page</h1>

    <div class="container">
        <div class="row">
            <div class="col-10">
               <div class="card">
                   <div class="card-header">
                       <h4>{{ $movie->title }}</h4>
                   </div>
                   <div class="card-body">
                       <p>Genre: {{ $movie->genre }}</p>
                       <p>Director: {{ $movie->director }}</p>
                       <p>Year: {{ $movie->year }}</p>
                   </div>
                   <div class="card-footer">
                       <p>Storyline: {{ $movie->storyline }}</p><hr>
                       <p class="btn btn-success">{{ $movie->created_at }}</p>
                   </div>
               </div>

               <div class="form-control">
                   <h4 class="m-2">Comments: </h4>
                   @foreach ($movie->comments as $comment)
                       <p class="p-2">{{ $comment->conetnt }}</p>
                   @endforeach
               </div>

               <form action="/comment/add" method="POST">
                @csrf
                    <input type="text" name="content" class="form-control" placeholder="Leave your comment">
                    <button class="btn btn-success btn-sm">Add</button>
                </form>
            </div>
        </div>
    </div>
@endsection