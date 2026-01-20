@extends('layout/app')

@section('content')
    <div class="w-50 center border rounded px-3 py-3 mx-auto bg-white shadow">
        <h3>Edit User</h3>
        <form action="{{ url('admin/users/' . $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="{{ $user->email }}" readonly disabled>
                <small class="text-muted">Email tidak dapat diubah</small>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password Baru (Opsional)</label>
                <input type="password" name="password" class="form-control">
                <small class="text-muted">Kosongkan jika tidak ingin mengubah password</small>
            </div>
            <div class="mb-3 d-grid">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            <div class="mb-3 d-grid">
                <a href="{{ url('admin') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
@endsection
