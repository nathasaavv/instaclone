{{-- resources/views/photos/index.blade.php --}}

@extends('layout')

@section('content')
<div class="container">
    <h1>All Photos</h1>
    @foreach ($photos as $photo)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $photo->caption }}</h5>
                <img src="{{ asset('storage/' . $photo->image) }}" alt="{{ $photo->caption }}" class="img-fluid">
                <p class="card-text">Likes: {{ $photo->likes }}</p>

                <h6>Comments:</h6>
                @if ($photo->comments->isEmpty())
                    <p>No comments yet.</p>
                @else
                    <ul>
                        @foreach ($photo->comments as $comment)
                            <li>{{ $comment->comment }}</li>
                        @endforeach
                    </ul>
                @endif

                <form action="{{ route('photos.like', $photo->id) }}" method="POST" class="mt-2">
                    @csrf
                    <button type="submit" class="btn btn-primary">Like</button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection
