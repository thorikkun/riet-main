@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Data Kamar</h1>
    <a href="{{ route('kamar.create') }}" class="btn btn-primary mb-3">Tambah Kamar</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kamar</th>
                <th>Lantai</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kamar as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->nama_kamar }}</td>
                    <td>{{ $item->lantai }}</td>
                    <td>
                        <a href="{{ route('kamar.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('kamar.destroy', $item->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
