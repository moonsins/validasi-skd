@extends('layouts.master')



@section('content')
<h1>Tambah Data Surat Keterangan Dokter</h1>
<form action="/skd/{{$pasien->id}}" method="POST">
    @csrf
    <div class="mb-3">
        <label>NIK</label>
        <input type="text" name="nik" class="form-control" value="{{$pasien->nik}}">
      </div>
      @error('nik')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
    <div class="mb-3">
      <label>Nomor Surat</label>
      <input type="text" name="no_surat" class="form-control">
    </div>
    @error('no_surat')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    <div class="mb-3">
      <label>Nama Dokter</label>
      <input type="text" name="nama_dokter" class="form-control">
    </div>
    @error('nama_dokter')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    <div class="mb-3">
        <label>Diagnosa</label>
        <input type="text" name="diagnosa" class="form-control">
      </div>
      @error('diagnosa')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
      <div class="mb-3">
        <label>Tanggal Masuk</label>
        <input type="date" name="tgl_in" class="form-control">
      </div>
      @error('tgl_in')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
      <div class="mb-3">
        <label>Tanggal Keluar</label>
        <input type="date" name="tgl_out" class="form-control">
      </div>
      @error('tgl_out')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
