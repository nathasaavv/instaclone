@extends('layout')

@section('title', 'Edit Profile')

@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Edit Profile</h5>

        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="profile_picture" class="form-label">Foto Profil</label>
                <input type="file" class="form-control" id="profile_picture" name="profile_picture" accept="image/*">
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
</div>
@endsection
