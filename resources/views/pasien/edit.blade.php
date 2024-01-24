@extends('layouts.master')



@section('content')
<h1>Edit Data Pasien</h1>
<form action="/pasien/{{$pasien->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label>NIK</label>
      <input type="text" name="nik" value="{{$pasien->nik}}" class="form-control" disabled>
    </div>
    @error('nik')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    <div class="mb-3">
      <label>Nama</label>
      <input type="text" name="nama" value="{{$pasien->nama}}" class="form-control">
    </div>
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    <div class="mb-3">
        <label>Pekerjaan</label>
        <input type="text" name="pekerjaan" value="{{$pasien->pekerjaan}}" class="form-control">
      </div>
      @error('pekerjaan')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
      <div class="mb-3">
        <label>Alamat</label>
        <textarea name="alamat" id="" cols="30" rows="10" class="form-control" >{{$pasien->alamat}}</textarea>
      </div>
      @error('alamat')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
      <div class="mb-3">
        <label>Nomor Handphone</label>
        <input type="text" name="no_hp" value="{{$pasien->no_hp}}" class="form-control">
      </div>
      @error('no_hp')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
      <div class="mb-3">
        <label>Tempat Lahir</label>
        <input type="text" name="tmptlahir" value="{{$pasien->tmptlahir}}" class="form-control">
      </div>
      @error('tmptlahir')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
      <div class="mb-3">
        <label>Tanggal Lahir</label>
        <input type="date" name="tgllahir" value="{{$pasien->tgllahir}}" class="form-control">
      </div>
      @error('tgllahir')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
