@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Kamar</h1>
    <form action="{{ route('kamar.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="id_user" class="form-label">ID User</label>
            <input type="text" name="id_user" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="nama_kamar" class="form-label">Nama Kamar</label>
            <input type="text" name="nama_kamar" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="lantai" class="form-label">Lantai</label>
            <input type="number" name="lantai" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('kamar.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
