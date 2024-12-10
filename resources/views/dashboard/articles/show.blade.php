<style>
    .card-header {
        background-color: #007bff;
        color: white;
        font-weight: bold;
    }

    .btn-back {
        background-color: #6c757d;
        border-color: #6c757d;
    }

    .btn-back:hover {
        background-color: #5a6268;
        border-color: #545b62;
    }
    .mb-4,.card-text {
        color: whitesmoke;
    }
</style>

@extends('dashboard.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    Detail Artikel: {{ $article->title }}
                </div>

                <div class="card-body">
                    <div class="mb-4">
                        <img src="{{ asset('storage/' . $article->image) }}" class="img-fluid mb-3" alt="Gambar Artikel">
                    </div>

                    <p class="card-text">{{ $article->description }}</p>

                    <div class="mb-4">
                        <strong>Jumlah Volunteer:</strong> {{ $volunteerCount }}
                    </div>

                    <a href="{{ route('dashboard.articles') }}" class="btn btn-back">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
