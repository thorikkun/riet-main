@extends('layouts.app')

@section('header-area')
<div class="col-md-12">
    <div class="card p-2" style="background-color: #173158;">
        <div class="card-body text-white">
            <!-- Area Judul -->
            <h3>Detail {{ $data->name }}</h3>
            <p class="text-white">Jika ingin mengubah data, klik tombol di bawah</p>
            <div class="button-area">
                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalForm">
                    Edit
                </button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('body-area')
<div class="col-md-12">
    <div class="card mt-3">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th>Nama Santri</th>
                            <td>{{ $data->name }}</td>
                        </tr>
                        <tr>
                            <th>Email Santri</th>
                            <td>{{ $data->email }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('santri.update', $data->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="name" value="{{ $data->name }}" required class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" value="{{ $data->email }}" required class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
