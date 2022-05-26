@extends("layouts.app")

@section('title', 'Create movie')

@section('content')
    @include('partials.navbar')

    <h1 class="m-4">Create movie</h1>

    <div class="container">
        <div class="row">
            <div class="col-10">
               <form action="/create" method="POST">
                @csrf
                <input type="text" name="title" id="title" class="form-control" placeholder="title"><br>
                <input type="text" name="genre" id="genre" class="form-control" placeholder="genre"><br>
                <input type="text" name="director" id="director" class="form-control" placeholder="director"><br>
                <input type="number" name="year" id="year" class="form-control" placeholder="year"><br>
                <textarea name="storyline" id="storyline" class="form-control" cols="30" rows="5"></textarea><br>
                <button type="submit" class="form-control btn btn-success">Add</button>
                </form>
            </div>
        </div>
    </div>
@endsection