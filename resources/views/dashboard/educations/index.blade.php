@extends('dashboard.admin')

@section('content')
<div id="main-content" class="container allContent-section py-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>All Education</h2>
        <a href="{{ route('dashboard.educations.create') }}" class="btn btn-primary">Tambah Education Baru</a>
    </div>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th class="text-center">Judul</th>
                <th class="text-center">Deskripsi</th>
                <th class="text-center">Gambar</th>
                <th class="text-center">Dibuat pada tanggal</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody id="educations-data">
            @foreach ($educations as $education)
                <tr>
                    <td class="text-center align-middle">{{ $education->title }}</td>
                    <td class="align-middle">
                        <div style="max-height: 100px; overflow: auto;">
                            <p>{{ Str::limit($education->description, 10) }}</p>
                        </div>
                    </td>
                    <td class="text-center align-middle">
                        <img src="{{ asset('storage/' . $education->image) }}" alt="Gambar Artikel" style="max-width: 100px;">
                    </td>
                    <td class="text-center align-middle">{{ $education->created_at->format('d/m/Y H:i:s') }}</td>
                    <td class="text-center align-middle">
                        <a href="{{ route('dashboard.educations.show', $education->id) }}" class="btn btn-sm btn-info mb-1">Detail</a>
                        <a href="{{ route('dashboard.educations.edit', $education->id) }}" class="btn btn-primary btn-sm mb-1">Edit</a>
                        <form action="{{ route('dashboard.educations.destroy', $education->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus education ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

<style>
    .table td, .table th {
        vertical-align: middle;
    }

    .table td img {
        display: block;
        margin: 0 auto;
    }
</style>
