@extends('layout') <!-- Layout utama -->

@section('content')
<div class="container">
    @foreach($posts as $post)
        <div class="card mb-3">
            <img src="{{ Storage::url($post->image) }}" class="card-img-top" alt="Post Image">
            <div class="card-body">
                <h5 class="card-title">{{ $post->user->name }}</h5>
                <p class="card-text">{{ $post->caption }}</p>

                <!-- Likes Section -->
                <form action="{{ route('post.like', $post->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-outline-primary">
                        Like ({{ $post->likes }})
                    </button>
                </form>

                <!-- Comments Section -->
                <h6>Comments</h6>
                @if($post->comments)
                    @foreach(json_decode($post->comments, true) as $comment)
                        <p>{{ $comment }}</p>
                    @endforeach
                @else
                    <p>No comments yet</p>
                @endif

                <!-- Add Comment Form -->
                <form action="{{ route('post.comment', $post->id) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control" name="comment" placeholder="Add a comment" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Comment</button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection
