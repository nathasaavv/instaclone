@extends('layout') <!-- Menggunakan layout utama -->

@section('title', 'Edit Caption')

@section('content')
<div class="container">
    <h1>Edit Caption</h1>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="caption" class="form-label">Caption</label>
            <input type="text" class="form-control" id="caption" name="caption" value="{{ $post->caption }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Caption</button>
        <a href="{{ route('profile') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
