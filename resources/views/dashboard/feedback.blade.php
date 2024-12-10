@extends('dashboard.admin')

@section('content')
    <!-- Table to display users -->
    <div id="users-table" class="container allContent-section py-4">
        <h2>All Feedback</h2>  
        <table class="table ">
            <thead>
                <tr>
                    <th class="text-center">Tanggal</th>
                    <th class="text-center">Email/th>
                    <th class="text-center">Full Name</th>
                    <th class="text-center">Feedback</th>
                    <th class="text=center"> Action </th>
                </tr>
            </thead>
            <tbody id="users-data">
                @foreach ($feedback as $data)
                    <tr>
                        <td class="text-center">{{ $data->created_at }}</td>
                        <td class="text-center">{{ $data->email }}</td>
                        <td class="text-center">{{ $data->fullname }}</td>
                        <td class="text-center">{{ $data->feedback }}</td>
                        <td>
                            <form action="{{ route('feedback.destroy', $data->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus feedback ini?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
