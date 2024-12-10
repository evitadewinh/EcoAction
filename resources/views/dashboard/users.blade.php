@extends('dashboard.admin')

@section('content')
    <!-- Table to display users -->
    <div id="users-table" class="container allContent-section py-4">
        <h2>All User</h2>
        <table class="table ">
            <thead>
                <tr>
                    <th class="text-center">Username</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Joining Date</th>
                    <th class="text-center">Role</th>
                    <th class="tet-center"> Action</th>
                </tr>
            </thead>
            <tbody id="users-data">
                @foreach ($users as $user)
                    <tr>
                        <td class="text-center">{{ $user->name }}</td>
                        <td class="text-center">{{ $user->email }}</td>
                        <td class="text-center">{{ $user->created_at }}</td>
                        <td class="text-center">{{ $user->role }}</td>
                        <td>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
