@extends('layout/app')

@section('content')
    <div class="bg-white p-5 rounded shadow">
        <h1>Halo User</h1>
        <div class="alert alert-info">Selamat datang di halaman User</div>
        
        <div class="mt-3">
            <a href="/sesi/logout" class="btn btn-danger">Logout</a>
        </div>
    </div>
@endsection
