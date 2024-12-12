@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Data Santri</h1>
    <a href="{{ route('santri.create') }}" class="btn btn-primary mb-3">Tambah Santri</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif


    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>email</th>
                <th>pilihan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                  
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>
                        <form action="{{ route('santri.destroy', $item->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button     class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                        <a href="{{ route ('santri.show', $item->id) }}" class="btn btn-warning btn-sm">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
