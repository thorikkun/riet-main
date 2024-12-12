@extends('layouts.app')

@section('title', 'Tambah Holaqoh')

@section('content')
    <h1>Tambah Holaqoh</h1>
    <form action="{{ route('holaqohs.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="id_user" class="form-label">ID User</label>
            <input type="text" name="id_user" id="id_user" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="id_santri" class="form-label">ID Santri</label>
            <input type="text" name="id_santri" id="id_santri" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="jenis" class="form-label">Jenis</label>
            <input type="text" name="jenis" id="jenis" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="catatan" class="form-label">Catatan</label>
            <textarea name="catatan" id="catatan" class="form-control" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select">
                <option value="sudah">Sudah</option>
                <option value="belum" selected>Belum</option>
                <option value="tanpa perbaikan">Tanpa Perbaikan</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('holaqohs.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
