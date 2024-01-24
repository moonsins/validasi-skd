@extends('layouts.master')



@section('content')
    <h1>Edit Data Surat Keterangan Dokter</h1>
    <form action="/skd/{{ $skd->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Nomor Surat</label>
            <input type="text" name="no_surat" value="{{ $skd->no_surat }}" class="form-control">
        </div>
        @error('no_surat')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label>Nama Dokter</label>
            <input type="text" name="nama_dokter" value="{{ $skd->nama_dokter }}" class="form-control">
        </div>
        @error('nama_dokter')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label>Diagnosa</label>
            <input type="text" name="diagnosa" value="{{ $skd->diagnosa }}" class="form-control">
        </div>
        @error('diagnosa')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label>Tanggal Masuk</label>
            <input type="date" name="tgl_in" value="{{ $skd->tgl_in }}" class="form-control">
        </div>
        @error('tgl_in')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label>Tanggal Keluar</label>
            <input type="date" name="tgl_out" value="{{ $skd->tgl_out }}" class="form-control">
        </div>
        @error('tgl_out')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
