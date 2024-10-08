@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <h3 class="text-center mb-4">Upload Foto</h3>

             
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label for="image" class="form-label">Pilih Foto</label>
                            <input class="form-control" type="file" id="image" name="image" required>
                        </div>

                        <div class="mb-4">
                            <label for="caption" class="form-label">Caption</label>
                            <textarea class="form-control" id="caption" name="caption" rows="3" placeholder="Tulis caption di sini..." style="resize: none;"></textarea>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-dark">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
