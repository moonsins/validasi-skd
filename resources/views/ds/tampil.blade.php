@extends('layouts.master')



@section('content')
<h1>Digital Signatured Surat Keterangan Dokter</h1>

<table class="table">
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
        <td>{{$value ->hash}}</td>
        <td>{{$value ->qrcode}}</td>
        <td>
            <form action="/ds/{{$value->id}}" method="POST">
                @csrf
                @method('DELETE')
                <a href="" class="btn btn-info btn-sm">Download</a>
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
