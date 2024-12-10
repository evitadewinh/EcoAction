@extends('dashboard.admin')

@section('content')
    <!-- Table to display users -->
    <div id="users-table" class="container allContent-section py-4">
        <h2>All Volunteers</h2>
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center">Full Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Phone</th>
                    <th class="text-center">City</th>
                    <th class="text-center">State</th>
                    <th class="text-center">Postal</th>
                    <th class="text-center">Article</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody id="users-data">
                @foreach ($volunteers as $volunteer)
                    <tr>
                        <td class="text-center">{{ $volunteer->full_name }}</td>
                        <td class="text-center">{{ $volunteer->email }}</td>
                        <td class="text-center">{{ $volunteer->phone }}</td>
                        <td class="text-center">{{ $volunteer->city }}</td>
                        <td class="text-center">{{ $volunteer->state }}</td>
                        <td class="text-center">{{ $volunteer->postal }}</td>
                        <td class="text-center">{{ $volunteer->article->title }}</td>
                        <td>
                            <form action="{{ route('volunteer.destroy', $volunteer->id) }}" method="POST" style="display: inline-block;">
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
