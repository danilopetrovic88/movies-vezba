<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCommentRequest;
use App\Models\Movie;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Movie $movie, CreateCommentRequest $request) {
        $data = $request->validated();

        $comment = $movie->comments()->create($data);

        return back();
    }
}
