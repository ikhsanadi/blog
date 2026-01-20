@extends('layout/app')

@section('content')
    <div class="bg-white p-5 rounded shadow">
        <h1>Halo Admin</h1>
        <div class="alert alert-info">Selamat datang di halaman Admin</div>
        
        <div class="mt-3 mb-4">
            <a href="/sesi/logout" class="btn btn-danger">Logout</a>
        </div>

        <h3>Daftar Pengguna</h3>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->role }}</td>
                        <td>
                            <a href="{{ url('admin/users/' . $item->id . '/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ url('admin/users/' . $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
