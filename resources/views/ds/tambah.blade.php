@extends('layouts.master')



@section('content')
<h1>Tambah Data Surat Keterangan Dokter</h1>
<form action="/ds/{{$skd->id}}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Nomor Surat</label>
        <input type="text" name="no_surat" class="form-control" value="{{$skd->no_surat}}">
      </div>
      @error('no_surat')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
    <div class="mb-3">
      <label>Hash</label>
      <input type="text" name="hash" class="form-control">
    </div>
    @error('hash')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    <div class="mb-3">
        <label>QR Code</label>
        <input type="text" name="qrcode" class="form-control">
      </div>
      @error('qrcode')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
