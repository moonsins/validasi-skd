@extends('layouts.master')



@section('content')
<h1>Data Surat Keterangan Dokter</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">NIK</th>
        <th scope="col">No Surat</th>
        <th scope="col">Nama Dokter</th>
        <th scope="col">Diagnosa</th>
        <th scope="col">Tanggal Masuk</th>
        <th scope="col">Tanggal Keluar</th>
        <th scope="col">Sign</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($skd as $key => $value)
    <tr>
        <td>{{$key + 1}}</td>
        <td>{{$value ->pasien->nik}}</td>
        <td>{{$value ->no_surat}}</td>
        <td>{{$value ->nama_dokter}}</td>
        <td>{{$value ->diagnosa}}</td>
        <td>{{$value ->tgl_in}}</td>
        <td>{{$value ->tgl_out}}</td>
        <td>
            <form action="/ds/{{$value->id}}" method="POST">
                @csrf
                <input type="submit" value="Sign" class="btn btn-success btn-sm">
            </form>
        </td>

        <td>
            <form action="/skd/{{$value->id}}" method="POST">
                @csrf
                @method('DELETE')
                <a href="/skd/{{$value->id}}/edit" class="btn btn-info btn-sm">EDIT</a>
                <input type="submit" value="Delete" class="btn btn-danger btn-sm">
            </form>
        </td>
    </tr>
@empty
    <tr>
        <td>Tidak Ada Data</td>
    </tr>

@endforelse
    </tbody>
  </table>
@endsection
