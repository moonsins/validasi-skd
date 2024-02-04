
<style>
    table{
        text-align: center;
    };
</style>

@extends('layouts.master')



@section('content')
<div class="card">
    <div class="card-header">
<h1>Digital Signatured Surat Keterangan Dokter</h1>
    </div>
    <div class="card-body">
<table id="example2" class="table table-bordered table-hover">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nomor SKD</th>
        <th scope="col">Hash</th>
        <th scope="col">Qr Code</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($ds as $key => $value)
    <tr>
        <td>{{$key + 1}}</td>
        <td>{{$value ->skd->no_surat}}</td>
        <td>{{substr($value->hash,0,30)."....."}}</td>
        <td> <img style="height: 100px; width: 100px;" src="{{asset('qrcodes/'.$value->qrcode)}}" alt=""></td>
        <td><a href="/pdf/{{$value->id}}/cetakpdf" class="btn btn-info btn-sm">Download</a>
        </td>

    </tr>
@empty
    <tr>
        <td>Tidak Ada Data</td>
    </tr>

@endforelse
    </tbody>
  </table>
</div>
</div>
@endsection
