@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Kamar</h1>
    <form action="{{ route('kamar.update', $kamar->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="id_user" class="form-label">ID User</label>
            <input type="text" name="id_user" value="{{ $kamar->id_user }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="nama_kamar" class="form-label">Nama Kamar</label>
            <input type="text" name="nama_kamar" value="{{ $kamar->nama_kamar }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="lantai" class="form-label">Lantai</label>
            <input type="number" name="lantai" value="{{ $kamar->lantai }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('kamar.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
