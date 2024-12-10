@extends('dashboard.admin')

@section('content')
<div class="container allContent-section py-4">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header bg-primary text-white">Tambah Artikel Baru</div>

            <div class="card-body">
                <form method="POST" action="{{ route('articles.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="title" class="col-form-label text-md-right text-white">Judul</label>
                        <input id="title" type="text" class="form-control" name="title" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="description" class="col-form-label text-md-right text-white">Deskripsi</label>
                        <textarea id="description" class="form-control" name="description" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="image" class="col-form-label text-md-right text-white">Gambar</label>
                        <input id="image" type="file" class="form-control-file text-white" name="image" required>
                    </div>

                    <div class="form-group mb-0">
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">
                                Tambah Artikel
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
