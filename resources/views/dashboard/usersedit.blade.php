@extends('dashboard.admin')

@section('content')
<div class="container allContent-section py-4">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header bg-primary text-white">Edit User </div>

            <div class="card-body">
                <form method="POST" action="{{ route('users.update', $Users->id ) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="email" class="col-form-label text-md-right text-white">Email</label>
                        <input id="email" type="text" class="form-control" name="email" required autofocus value="{{ $Users->email }}">
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-form-label text-md-right text-white">Username</label>
                        <input type="text" id="name" class="form-control" name="name" required value="{{ $Users->name }}"></input> 
                    </div>

                    <div class="form-group">
                        <label for="role" class="col-form-label text-md-right text-white">Role</label>
                        <select class="form-control @error('role') is-invalid @enderror" id="role" name="role">
                            <option value="">Select Role</option>
                            <option value="admin" {{ $Users->role == 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="user" {{ $Users->role == 'user' ? 'selected' : '' }}>User</option>
                        </select>
                    </div>

                    <div class="form-group mb-0">
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">
                                Edit User
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
