@extends('dashboard.admin')

@section('content')
    <div class="container allContent-section py-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>All Articles</h2>
            <a href="{{ route('articles.create') }}" class="btn btn-primary">Tambah Artikel Baru</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center">Judul</th>
                    <th class="text-center">Deskripsi</th>
                    <th class="text-center">Gambar</th>
                    <th class="text-center">Dibuat pada tanggal</th>
                    <th class="text-center">Volunteers</th> <!-- Tambah kolom untuk volunteers -->
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody id="articles-data">
                @foreach ($articles as $article)
                    <tr>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->description }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $article->image) }}" alt="Gambar Artikel" style="max-width: 100px;">
                        </td>
                        <td>{{ $article->created_at->format('d/m/Y H:i:s') }}</td>
                        <td>{{ $article->volunteers->count() }}</td> <!-- Menampilkan jumlah volunteers -->
                        <td>
                            <a href="{{ route('admin.articles.show', $article->id) }}" class="btn btn-sm btn-info">Detail</a>
                            <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
