@extends('layout')

@section('konten')

<h4>Tambah Program</h4>

<form action="{{ route('siswa.submit') }}" method="post">
    @csrf
    <label>Nama Program</label>
    <input type="text" name="nama_program" class="form-control mb-2">
    <label>Kategori</label>
    <input type="text" name="kategori" class="form-control mb-2">
    <label>Informasi</label>
    <input type="text" name="informasi" class="form-control mb-2">
    <label>Harga</label>
    <input type="text" name="harga" class="form-control mb-2">

    <button class="btn btn-primary">Tambah</button>
</form>

@endsection