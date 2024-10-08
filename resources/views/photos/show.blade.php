

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $photo->caption }}</h1>
    <img src="{{ asset('storage/' . $photo->image) }}" alt="{{ $photo->caption }}">

    <div>
        <h3>Likes: {{ $photo->likes }}</h3>
        <form action="{{ route('photos.like', $photo->id) }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary">Like</button>
        </form>
    </div>

    <hr>

    <h3>Comments</h3>
    @foreach ($photo->comments as $comment)
        <div>
            <p>{{ $comment->comment }}</p>
        </div>
    @endforeach

    <hr>

    <h4>Add a Comment:</h4>
    <form action="{{ route('photos.addComment', $photo->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <textarea name="comment" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
@endsection
