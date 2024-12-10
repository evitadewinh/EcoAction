@extends('dashboard.admin')

@section('content')
<div class="container allContent-section py-4">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header bg-primary text-white">Edit Artikel</div>

            <div class="card-body">
                <form method="POST" action="{{ route('articles.update', $articles->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="title" class="col-form-label text-md-right text-white">Judul</label>
                        <input id="title" type="text" class="form-control" name="title" value="{{ $articles->title }}" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="description" class="col-form-label text-md-right text-white">Deskripsi</label>
                        <textarea id="description" class="form-control" name="description" required>{{ $articles->description }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="image" class="col-form-label text-md-right text-white">Gambar</label>
                        <input id="image" type="file" class="form-control-file" name="image">
                        <p class="text-white">Gambar Saat Ini:</p>
                        <img src="{{ asset('storage/' . $articles->image) }}" alt="Article Image" style="max-width: 200px;">
                    </div>

                    <div class="form-group mb-0">
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">
                                Simpan Perubahan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection