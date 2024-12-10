{{-- @extends('dashboard.admin')

@section('content')
    <!-- Table to display donations -->
    <div id="donations-table" class="container allContent-section py-4">
        <h2>All Donations</h2>  
        <table class="table ">
            <thead>
                <tr>
                    <th class="text-center">Full Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Country</th>
                    <th class="text-center">City</th>
                    <th class="text-center">Donation</th>
                    <th class="text-center">Proof</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody id="donations-data">
                @foreach ($donations as $donation)
                    <tr>
                        <td class="text-center">{{ $donation->fname }} + {{ $donation->lname }}</td>
                        <td class="text-center">{{ $donation->email }}</td>
                        <td class="text-center">{{ $donation->country }}</td>
                        <td class="text-center">{{ $donation->city }}</td>
                        <td class="text-center">{{ $donation->donation }}</td>
                        <td class="text-center">{{ $donation->proof }}</td>
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
@endsection --}}


@extends('dashboard.admin')

@section('content')
    <!-- Table to display donations -->
    <div id="donations-table" class="container allContent-section py-4">
        <h2>All Donations</h2>
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center">Full Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Country</th>
                    <th class="text-center">City</th>
                    <th class="text-center">Donation</th>
                    <th class="text-center">Proof</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody id="donations-data">
                @foreach ($donations as $donation)
                    <tr>
                        <td class="text-center">{{ $donation->fname }} {{ $donation->lname }}</td>
                        <td class="text-center">{{ $donation->email }}</td>
                        <td class="text-center">{{ $donation->country }}</td>
                        <td class="text-center">{{ $donation->city }}</td>
                        <td class="text-center">{{ $donation->donation }}</td>
                        <td class="text-center">
                            <a href="{{ asset('uploads/proofUploads/' . $donation->proof) }}" target="_blank">
                            <img src="{{ asset('uploads/proofUploads/' . $donation->proof) }}" alt="Proof" width="100" height="80">
                            </a>
                        </td>
                        <td>
                            {{-- <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm">Edit</a> --}}
                            <form action="{{ route('donations.destroy', $donation->id) }}" method="POST" style="display: inline-block;">
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

