@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Santri</h1>
    <form action="{{ route('santri.update', $santri->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="id_user" class="form-label">Nama User</label>
            <select name="id_user" class="form-control" required>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}" {{ $santri->id_user == $user->id ? 'selected' : '' }}>
                        {{ $user->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="nama_kamar" class="form-label">Nama Kamar</label>
            <input type="text" name="nama_kamar" value="{{ $santri->nama_kamar }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <input type="text" name="kelas" value="{{ $santri->kelas }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('santri.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection

