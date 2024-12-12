@extends('layouts.app')

@section('title', 'Daftar Holaqoh')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Daftar Holaqoh</h1>
        <a href="{{ route('holaqohs.create') }}" class="btn btn-primary">Tambah Holaqoh</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>ID User</th>
                <th>ID Santri</th>
                <th>Jenis</th>
                <th>Catatan</th>
                <th>Status</th>
                
            </tr>
        </thead>
        <tbody>
            @forelse($holaqohs as $holaqoh)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $holaqoh->id_user }}</td>
                    <td>{{ $holaqoh->id_santri }}</td>
                    <td>{{ $holaqoh->jenis }}</td>
                    <td>{{ $holaqoh->catatan }}</td>
                    <td>{{ ucfirst($holaqoh->status) }}</td>
                    <td>
                        <a href="{{ route('holaqohs.edit', $holaqoh) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('holaqohs.destroy', $holaqoh) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">Tidak ada data</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
