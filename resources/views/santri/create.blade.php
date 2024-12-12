@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah  Santri</h1>
    <form action="{{ route('post-siswa') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nama" class="form-label">Nama </label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('santri.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
