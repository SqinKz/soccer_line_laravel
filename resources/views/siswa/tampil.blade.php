@extends('layout')

@section('konten')

<div class="d-flex">
    <h4>Menu Program</h4>
    <div class="ms-auto">
        <a class="btn btn-success" href="{{ route('siswa.tambah') }}">Tambah Program</a>
    </div>
</div>

<table class="table">
    <tr>
        <th>No</th>
        <th>Nama Program</th>
        <th>Kategori</th>
        <th>Informasi</th>
        <th>Harga</th>
    </tr>
    @foreach($siswa as $no=>$data)
    <tr>
        <td>{{ $no+1 }}</td>
        <td>{{ $data->nama_program }}</td>
        <td>{{ $data->kategori }}</td>
        <td>{{ $data->informasi }}</td>
        <td>{{ $data->harga }}</td>
        <td>
            <a href="{{ route('siswa.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit</a>
            <form action="{{ route('siswa.delete', $data->id) }}" method="post">
                @csrf
                <button class="btn btn-sm btn-danger">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection