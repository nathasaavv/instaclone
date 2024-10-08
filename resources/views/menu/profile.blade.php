@extends('layout')

@section('title', 'Profile')

@section('content')

<div class="card mb-3">
    <div class="card-body text-center">
        <div class="d-flex justify-content-center align-items-center mb-3">
            <!-- Foto Profile dengan Frame Lingkaran -->
            <div class="position-relative me-3">
                <img src="{{ Auth::user()->profile_picture ? Storage::url(Auth::user()->profile_picture) : 'default_profile_picture.jpg' }}"
                     class="rounded-circle"
                     alt=""
                     style="width: 150px; height: 150px; object-fit: cover;"
                     data-bs-toggle="modal"
                     data-bs-target="#changeProfilePictureModal">
                <div class="border border-primary rounded-circle position-absolute" style="width: 160px; height: 160px; top: -5px; left: -5px;"></div>
            </div>

            <!-- Nama Pengguna -->
            <div>
                <h4 class="card-title">{{ Auth::user()->name }}</h4>
            </div>
        </div>

        <div class="d-flex justify-content-around w-100 my-3">
            <div>
                <strong>{{ $posts->count() }}</strong>
                <p>Posts</p>
            </div>
            <div>
                <strong>1,5M</strong>
                <p>Followers</p>
            </div>
            <div>
                <strong>3</strong>
                <p>Following</p>
            </div>
        </div>

        <!-- Tombol Edit Profile -->
        <a href="{{ route('profile.edit') }}" class="btn btn-outline-primary w-100">Edit Profile</a>
    </div>
</div>

<!-- Menampilkan semua foto yang diupload -->
<div class="card mb-3">
    <div class="card-body">
        <h5 class="card-title">Posts</h5>
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-4 mb-3">
                    <img src="{{ Storage::url($post->image) }}" class="img-fluid" alt="Post Image">

                    <!-- Menampilkan Caption -->
                    <p class="mt-2">{{ $post->caption }}</p> <!-- Menampilkan caption di sini -->

                    <!-- Tombol Like -->
                    <div class="mt-2">
                        <form action="{{ route('post.like', $post->id) }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-light">
                                <span class="me-1">❤️</span> Like ({{ $post->likes }})
                            </button>
                        </form>
                    </div>

                    <!-- Edit and Delete Buttons -->
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-outline-secondary">Edit</a>

                        <form action="{{ route('posts.delete', $post->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>


                    <!-- Edit Image Modal -->
                    <div class="modal fade" id="editImageModal{{ $post->id }}" tabindex="-1" aria-labelledby="editImageModalLabel{{ $post->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <form action="{{ route('posts.update', $post->id) }}" method="POST">
                                @csrf
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editImageModalLabel{{ $post->id }}">Edit Caption</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="caption" class="form-label">Caption</label>
                                            <input type="text" class="form-control" id="caption" name="caption" value="{{ $post->caption }}">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- Penutup div untuk postingan -->
            @endforeach
        </div>
    </div>
</div>


<!-- Modal untuk mengubah foto profil -->
<div class="modal fade" id="changeProfilePictureModal" tabindex="-1" aria-labelledby="changeProfilePictureModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="changeProfilePictureModalLabel">Ubah Foto Profil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="profile_picture" class="form-label">Pilih Foto</label>
                        <input type="file" class="form-control" id="profile_picture" name="profile_picture" accept="image/*" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
