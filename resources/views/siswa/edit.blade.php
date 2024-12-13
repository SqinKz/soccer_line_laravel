@extends('layout')

@section('konten')

<h4>Edit Program</h4>

<form action="{{ route('siswa.update', $siswa->id) }}" method="post">
    @csrf
    <label>Nama Program</label>
    <input type="text" name="nama_program" value="{{ $siswa->nama_program }}" class="form-control mb-2">
    <label>Kategori</label>
    <input type="text" name="kategori" value="{{ $siswa->kategori }}"  class="form-control mb-2">
    <label>Informasi</label>
    <input type="text" name="informasi" value="{{ $siswa->informasi }}"  class="form-control mb-2">
    <label>Harga</label>
    <input type="text" name="harga" value="{{ $siswa->harga }}"  class="form-control mb-2">

    <button class="btn btn-primary">Edit</button>
</form>

@endsection