@extends('layouts.master')



@section('content')
<h1>Tambah Data Pasien</h1>
<form action="/pasien" method="POST">
    @csrf
    <div class="mb-3">
      <label>NIK</label>
      <input type="text" name="nik" class="form-control">
    </div>
    @error('nik')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    <div class="mb-3">
      <label>Nama</label>
      <input type="text" name="nama" class="form-control">
    </div>
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    <div class="mb-3">
        <label>Pekerjaan</label>
        <input type="text" name="pekerjaan" class="form-control">
      </div>
      @error('pekerjaan')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
      <div class="mb-3">
        <label>Alamat</label>
        <textarea name="alamat" id="" cols="30" rows="10" class="form-control"></textarea>
      </div>
      @error('alamat')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
      <div class="mb-3">
        <label>Nomor Handphone</label>
        <input type="text" name="no_hp" class="form-control">
      </div>
      @error('no_hp')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
      <div class="mb-3">
        <label>Tempat Lahir</label>
        <input type="text" name="tmptlahir" class="form-control">
      </div>
      @error('tmptlahir')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
      <div class="mb-3">
        <label>Tanggal Lahir</label>
        <input type="date" name="tgllahir" class="form-control">
      </div>
      @error('tgllahir')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
